<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Campaign::query();
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('location', 'like', '%' . $request->search . '%');
        }
        $campaigns = $query->orderBy('created_at', 'desc')->paginate(20)->withQueryString();
        return view('admin', compact('campaigns'));
    }

    public function kegiatan(Request $request)
    {
        $query = Campaign::query();
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('location', 'like', '%' . $request->search . '%');
        }
        $campaigns = $query->orderBy('created_at', 'desc')->paginate(20)->withQueryString();
        return view('admin_kegiatan', compact('campaigns'));
    }

    public function showKegiatan($id)
    {
        $campaign = Campaign::with('volunteers')->findOrFail($id);
        return view('admin_kegiatan_detail', compact('campaign'));
    }

    public function storeKegiatan(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:0',
            'rfm_score' => 'required|string|max:10',
            'status' => 'required|string|in:Aktif,Berjalan,Selesai',
            'category' => 'nullable|string|max:255',
            'volunteer_target' => 'nullable|integer|min:0',
        ]);

        Campaign::create($validated);

        return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function updateKegiatan(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:0',
            'rfm_score' => 'required|string|max:10',
            'status' => 'required|string|in:Aktif,Berjalan,Selesai',
            'category' => 'nullable|string|max:255',
            'volunteer_target' => 'nullable|integer|min:0',
        ]);

        $campaign->update($validated);

        return redirect()->back()->with('success', 'Kegiatan berhasil diperbarui!');
    }

    public function destroyKegiatan($id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return redirect()->back()->with('success', 'Kegiatan berhasil dihapus!');
    }

    public function donatur(Request $request)
    {
        $query = \App\Models\User::where('is_admin', false);
        if ($request->has('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }
        $donors = $query->orderBy('created_at', 'desc')->paginate(20)->withQueryString();
        return view('admin_donatur', compact('donors'));
    }

    public function transaksi(Request $request)
    {
        $donations = \App\Models\Donation::with(['user', 'campaign'])->orderBy('created_at', 'desc')->paginate(20);
        return view('admin_transaksi', compact('donations'));
    }

    public function relawan(Request $request)
    {
        $query = \App\Models\Volunteer::with('campaign');
        if ($request->has('search')) {
            $query->where(function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('role', 'like', '%' . $request->search . '%');
            });
        }
        $volunteers = $query->orderBy('created_at', 'desc')->paginate(20)->withQueryString();
        return view('admin_relawan', compact('volunteers'));
    }

    public function updateRelawan(Request $request, $id)
    {
        $volunteer = \App\Models\Volunteer::findOrFail($id);
        
        $validated = $request->validate([
            'status' => 'required|string|in:Menunggu,Diterima,Ditolak',
        ]);

        $volunteer->update($validated);

        return redirect()->back()->with('success', 'Status relawan berhasil diperbarui!');
    }

    public function destroyRelawan($id)
    {
        $volunteer = \App\Models\Volunteer::findOrFail($id);
        $volunteer->delete();

        return redirect()->back()->with('success', 'Data relawan berhasil dihapus!');
    }

    public function galeri(Request $request)
    {
        $query = \App\Models\Gallery::query();
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }
        $galleries = $query->orderBy('created_at', 'desc')->paginate(20)->withQueryString();
        return view('admin_galeri', compact('galleries'));
    }

    public function storeGaleri(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/gallery'), $imageName);

        \App\Models\Gallery::create([
            'image' => '/images/gallery/' . $imageName,
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Galeri berhasil ditambahkan!');
    }

    public function updateGaleri(Request $request, $id)
    {
        $gallery = \App\Models\Gallery::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/gallery'), $imageName);
            
            // Delete old image if exists
            if (file_exists(public_path($gallery->image))) {
                @unlink(public_path($gallery->image));
            }
            
            $gallery->update([
                'image' => '/images/gallery/' . $imageName,
                'title' => $request->title,
                'category' => $request->category,
                'description' => $request->description,
            ]);
        } else {
            $gallery->update([
                'title' => $request->title,
                'category' => $request->category,
                'description' => $request->description,
            ]);
        }

        return redirect()->back()->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroyGaleri($id)
    {
        $gallery = \App\Models\Gallery::findOrFail($id);
        if (file_exists(public_path($gallery->image))) {
            @unlink(public_path($gallery->image));
        }
        $gallery->delete();

        return redirect()->back()->with('success', 'Galeri berhasil dihapus!');
    }

    public function artikel(Request $request)
    {
        $query = Article::query();
        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('content', 'like', '%' . $request->search . '%');
        }
        $articles = $query->orderBy('created_at', 'desc')->paginate(20)->withQueryString();
        return view('admin_artikel', compact('articles'));
    }

    public function storeArtikel(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|string|in:draft,published',
            'image' => 'nullable|image|max:2048'
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']) . '-' . time();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/artikel'), $filename);
            $validated['image'] = '/uploads/artikel/' . $filename;
        }

        if ($validated['status'] === 'published') {
            $validated['published_at'] = now();
        }

        Article::create($validated);

        return redirect()->back()->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function updateArtikel(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|string|in:draft,published',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->title !== $article->title) {
            $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']) . '-' . time();
        }

        if ($request->hasFile('image')) {
            if ($article->image && file_exists(public_path($article->image))) {
                @unlink(public_path($article->image));
            }
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/artikel'), $filename);
            $validated['image'] = '/uploads/artikel/' . $filename;
        }

        if ($validated['status'] === 'published' && !$article->published_at) {
            $validated['published_at'] = now();
        } elseif ($validated['status'] === 'draft') {
            $validated['published_at'] = null;
        }

        $article->update($validated);

        return redirect()->back()->with('success', 'Artikel berhasil diupdate!');
    }

    public function destroyArtikel($id)
    {
        $article = Article::findOrFail($id);
        if ($article->image && file_exists(public_path($article->image))) {
            @unlink(public_path($article->image));
        }
        $article->delete();

        return redirect()->back()->with('success', 'Artikel berhasil dihapus!');
    }
}
