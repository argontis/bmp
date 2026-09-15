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

    public function storeKegiatan(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'nominal' => 'required|numeric|min:0',
            'rfm_score' => 'required|string|max:10',
            'status' => 'required|string|in:Aktif,Berjalan,Selesai',
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
        $query = \App\Models\Volunteer::query();
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
}
