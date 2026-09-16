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

    public function konfirmasi(Request $request, $id)
    {
        $volunteer = Volunteer::findOrFail($id);
        
        // Ensure the logged in user owns this volunteer record (assuming by email)
        if (auth()->check() && $volunteer->email === auth()->user()->email) {
            $volunteer->status = 'Hadir';
            $volunteer->save();
            
            // Send email notification
            \Illuminate\Support\Facades\Mail::to($volunteer->email)->send(new \App\Mail\VolunteerConfirmationMail($volunteer));
            
            // Return updated HTML button for HTMX swapping
            return '
            <button class="flex items-center justify-center px-4 py-1.5 bg-emerald-100 text-emerald-700 border border-emerald-200 text-[11px] font-bold rounded-lg cursor-default" disabled>
                <svg class="w-3.5 h-3.5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Hadir
            </button>';
        }

        abort(403);
    }
}
