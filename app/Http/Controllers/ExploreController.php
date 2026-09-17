<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Volunteer;

class ExploreController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::withSum(['donations' => function ($query) {
            $query->where('status', 'Berhasil');
        }], 'amount')->withCount('volunteers')->paginate(9);

        $registeredCampaignIds = [];
        if (auth()->check()) {
            $registeredCampaignIds = Volunteer::where('email', auth()->user()->email)
                ->pluck('campaign_id')
                ->toArray();
        }

        return view('explore', compact('campaigns', 'registeredCampaignIds'));
    }
}
