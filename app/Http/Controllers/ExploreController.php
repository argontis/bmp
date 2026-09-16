<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class ExploreController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::withSum(['donations' => function($query) {
            $query->where('status', 'Berhasil');
        }], 'amount')->withCount('volunteers')->get();
        
        $registeredCampaignIds = [];
        if (auth()->check()) {
            $registeredCampaignIds = \App\Models\Volunteer::where('email', auth()->user()->email)
                ->pluck('campaign_id')
                ->toArray();
        }
        
        return view('explore', compact('campaigns', 'registeredCampaignIds'));
    }
}
