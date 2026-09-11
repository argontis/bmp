<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Campaign;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        $totalDonasi = Donation::where('user_id', $user->id)
            ->where('status', 'Berhasil')
            ->sum('amount');
            
        $donasiCount = Donation::where('user_id', $user->id)
            ->where('status', 'Berhasil')
            ->count();
            
        $programAktifCount = Campaign::where('status', 'Aktif')->count();
        
        $programTerbaru = Campaign::latest()->take(4)->get();
        
        $donasiTerakhir = Donation::with('campaign')
            ->where('user_id', $user->id)
            ->latest()
            ->take(3)
            ->get();
            
        return view('dashboard', compact(
            'totalDonasi',
            'donasiCount',
            'programAktifCount',
            'programTerbaru',
            'donasiTerakhir'
        ));
    }
}
