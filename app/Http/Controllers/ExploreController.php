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
        }], 'amount')->get();
        
        return view('explore', compact('campaigns'));
    }
}
