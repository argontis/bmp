<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Pengeluaran;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function download(Request $request, $year)
    {
        $fileName = "Laporan_BaktiMerahPutih_{$year}.csv";

        $donations = Donation::with(['user', 'campaign'])
            ->whereYear('created_at', $year)
            ->where('status', 'Berhasil')
            ->get();

        $pengeluarans = Pengeluaran::whereYear('created_at', $year)
            ->get();

        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=$fileName",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $columns = ['Tanggal', 'Tipe', 'Keterangan', 'Nominal (Rp)'];

        $callback = function () use ($donations, $pengeluarans, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($donations as $donation) {
                $row['Tanggal'] = $donation->created_at->format('Y-m-d H:i:s');
                $row['Tipe'] = 'Pemasukan (Donasi)';
                $row['Keterangan'] = 'Donasi untuk: '.($donation->campaign->name ?? 'Umum').' (dari: '.($donation->user->name ?? 'Hamba Allah').')';
                $row['Nominal (Rp)'] = $donation->amount;

                fputcsv($file, [$row['Tanggal'], $row['Tipe'], $row['Keterangan'], $row['Nominal (Rp)']]);
            }

            foreach ($pengeluarans as $pengeluaran) {
                $row['Tanggal'] = $pengeluaran->created_at->format('Y-m-d H:i:s');
                $row['Tipe'] = 'Pengeluaran';
                $row['Keterangan'] = $pengeluaran->nama_pengeluaran.' ('.$pengeluaran->lokasi.')';
                $row['Nominal (Rp)'] = '-'.$pengeluaran->jumlah;

                fputcsv($file, [$row['Tanggal'], $row['Tipe'], $row['Keterangan'], $row['Nominal (Rp)']]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function index(Request $request)
    {
        $year = $request->query('year', date('Y'));

        $globalDonations = Donation::whereYear('created_at', $year)
            ->where('status', 'Berhasil')
            ->count();

        $globalNominal = Donation::whereYear('created_at', $year)
            ->where('status', 'Berhasil')
            ->sum('amount');

        $globalVolunteers = Volunteer::whereYear('created_at', $year)->count();
        $globalCampaigns = Campaign::whereYear('created_at', $year)->count();

        $userDonations = 0;
        $userNominal = 0;
        $userVolunteered = 0;

        if (auth()->check()) {
            $userDonations = Donation::where('user_id', auth()->id())
                ->whereYear('created_at', $year)
                ->where('status', 'Berhasil')
                ->count();

            $userNominal = Donation::where('user_id', auth()->id())
                ->whereYear('created_at', $year)
                ->where('status', 'Berhasil')
                ->sum('amount');

            $userVolunteered = Volunteer::where('email', auth()->user()->email)
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
