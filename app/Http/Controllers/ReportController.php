<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function download(Request $request, $year)
    {
        $fileName = "Laporan_BaktiMerahPutih_{$year}.csv";
        
        $donations = \App\Models\Donation::with(['user', 'campaign'])
                        ->whereYear('created_at', $year)
                        ->where('status', 'Berhasil')
                        ->get();
                        
        $pengeluarans = \App\Models\Pengeluaran::whereYear('created_at', $year)
                        ->get();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Tanggal', 'Tipe', 'Keterangan', 'Nominal (Rp)');

        $callback = function() use($donations, $pengeluarans, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($donations as $donation) {
                $row['Tanggal'] = $donation->created_at->format('Y-m-d H:i:s');
                $row['Tipe'] = 'Pemasukan (Donasi)';
                $row['Keterangan'] = "Donasi untuk: " . ($donation->campaign->name ?? 'Umum') . " (dari: " . ($donation->user->name ?? 'Hamba Allah') . ")";
                $row['Nominal (Rp)'] = $donation->amount;
                
                fputcsv($file, array($row['Tanggal'], $row['Tipe'], $row['Keterangan'], $row['Nominal (Rp)']));
            }
            
            foreach ($pengeluarans as $pengeluaran) {
                $row['Tanggal'] = $pengeluaran->created_at->format('Y-m-d H:i:s');
                $row['Tipe'] = 'Pengeluaran';
                $row['Keterangan'] = $pengeluaran->nama_pengeluaran . " (" . $pengeluaran->lokasi . ")";
                $row['Nominal (Rp)'] = "-" . $pengeluaran->jumlah;
                
                fputcsv($file, array($row['Tanggal'], $row['Tipe'], $row['Keterangan'], $row['Nominal (Rp)']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function index(Request $request)
    {
        $year = $request->query('year', date('Y'));
        
        $globalDonations = \App\Models\Donation::whereYear('created_at', $year)
                                              ->where('status', 'Berhasil')
                                              ->count();
                                              
        $globalNominal = \App\Models\Donation::whereYear('created_at', $year)
                                            ->where('status', 'Berhasil')
                                            ->sum('amount');
                                            
        $globalVolunteers = \App\Models\Volunteer::whereYear('created_at', $year)->count();
        $globalCampaigns = \App\Models\Campaign::whereYear('created_at', $year)->count();

        $userDonations = 0;
        $userNominal = 0;
        $userVolunteered = 0;

        if (auth()->check()) {
            $userDonations = \App\Models\Donation::where('user_id', auth()->id())
                                ->whereYear('created_at', $year)
                                ->where('status', 'Berhasil')
                                ->count();
                                
            $userNominal = \App\Models\Donation::where('user_id', auth()->id())
                                ->whereYear('created_at', $year)
                                ->where('status', 'Berhasil')
                                ->sum('amount');
                                
            $userVolunteered = \App\Models\Volunteer::where('email', auth()->user()->email)
                                ->whereYear('created_at', $year)
                                ->count();
        }

        return view('laporan', compact(
            'year', 
            'globalDonations', 
            'globalNominal', 
            'globalVolunteers', 
            'globalCampaigns',
            'userDonations',
            'userNominal',
            'userVolunteered'
        ));
    }
}
