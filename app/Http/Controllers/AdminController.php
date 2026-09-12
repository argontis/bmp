<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();
        return view('admin', compact('campaigns'));
    }

    public function kegiatan()
    {
        $campaigns = Campaign::orderBy('created_at', 'desc')->get();
        return view('admin_kegiatan', compact('campaigns'));
    }

    public function storeKegiatan(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'nominal' => 'required|integer|min:0',
            'rfm_score' => 'required|string|max:10',
            'status' => 'required|string|in:Aktif,Berjalan,Selesai',
        ]);

        Campaign::create($validated);

        return redirect()->route('admin.kegiatan')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function donatur()
    {
        $donors = \App\Models\User::where('is_admin', false)->orderBy('created_at', 'desc')->get();
        return view('admin_donatur', compact('donors'));
    }

    public function transaksi()
    {
        $donations = \App\Models\Donation::with(['user', 'campaign'])->orderBy('created_at', 'desc')->get();
        return view('admin_transaksi', compact('donations'));
    }

}
