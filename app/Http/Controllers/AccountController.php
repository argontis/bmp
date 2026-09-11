<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class AccountController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $totalDonation = $user->donations()->where('status', 'Berhasil')->sum('amount');
        $totalTransactions = $user->donations()->count();
        $supportedPrograms = $user->donations()->where('status', 'Berhasil')->distinct('campaign_id')->count('campaign_id');
        
        return view('account', compact('user', 'totalDonation', 'totalTransactions', 'supportedPrograms'));
    }
}
