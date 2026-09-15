<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class HistoryController extends Controller
{
    public function index()
    {
        $donations = auth()->user()->donations()->with('campaign')->orderByDesc('created_at')->paginate(20);

        return view('history', compact('donations'));
    }
}
