<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'campaign_id' => 'nullable|exists:campaigns,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'role' => 'required|string',
            'motivation' => 'required|string'
        ]);

        Volunteer::create($validated);

        return redirect()->back()->with('success', 'Pendaftaran relawan berhasil! Tim kami akan segera menghubungi Anda.');
    }
}
