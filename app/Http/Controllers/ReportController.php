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
}
