<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
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
        $galleries = \App\Models\Gallery::orderBy('created_at', 'desc')->get();
        return view('admin_galeri', compact('galleries'));
    }

    public function storeGaleri(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/gallery'), $imageName);

        \App\Models\Gallery::create([
            'image' => '/images/gallery/' . $imageName,
            'title' => $request->title,
            'category' => $request->category,
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
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/gallery'), $imageName);
            
            // Delete old image if exists
            if (file_exists(public_path($gallery->image))) {
                @unlink(public_path($gallery->image));
            }
            
            $gallery->image = '/images/gallery/' . $imageName;
        }

        $gallery->title = $request->title;
        $gallery->category = $request->category;
        $gallery->save();

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
}
