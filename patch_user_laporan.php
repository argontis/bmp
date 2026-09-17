<?php

$history = file_get_contents('resources/views/history.blade.php');

// Replace Mobile Section
$mobileStart = '<h2 class="font-extrabold text-[16px] text-[#1B1B1B] mb-4" style="font-family: \'Plus Jakarta Sans\', sans-serif;">Riwayat Donasi</h2>';
$mobileEnd = '</div>
                    </div>
                </div>
            </div>
            
            <div class="fixed bottom-0';

$mStartPos = strpos($history, $mobileStart);
$mEndPos = strpos($history, $mobileEnd, $mStartPos);

$laporanContent = <<<'HTML'
<h2 class="font-extrabold text-[16px] text-[#1B1B1B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Laporan Transparansi</h2>

<div class="space-y-6">
    <div class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100">
        <h3 class="text-lg font-extrabold text-[#1B1B1B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Ringkasan {{ $year }}</h3>
        
        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-2">
                <p class="text-[11px] font-bold text-gray-500 uppercase">Dana Dihimpun</p>
                <p class="text-lg font-extrabold text-emerald-600">Rp {{ number_format($globalNominal, 0, ',', '.') }}</p>
            </div>
            <div class="space-y-2">
                <p class="text-[11px] font-bold text-gray-500 uppercase">Donatur</p>
                <p class="text-lg font-extrabold text-blue-600">{{ number_format($globalDonations, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>

    <h3 class="text-lg font-extrabold text-[#1B1B1B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Arsip Laporan (CSV)</h3>
    
    <div class="space-y-3 pb-8">
        @foreach([2025, 2024, 2023] as $y)
        <div class="bg-white rounded-2xl p-4 shadow-sm border border-gray-100 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-[#D62828]"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-[#1B1B1B]">Laporan Audited {{ $y }}</h4>
                </div>
            </div>
            <a href="{{ route('laporan.download', $y) }}" target="_blank" hx-boost="false" class="w-8 h-8 rounded-full bg-gray-50 hover:bg-[#D62828] text-gray-500 hover:text-white flex items-center justify-center transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
            </a>
        </div>
        @endforeach
    </div>
</div>
HTML;

$history = substr_replace($history, $laporanContent, $mStartPos, $mEndPos - $mStartPos);

// Replace Desktop Section
$desktopStart = '<div>
                                <h2 class="font-[\'Plus_Jakarta_Sans\'] text-2xl font-extrabold text-[#12355B]">Riwayat &amp; Bukti Donasi</h2>';
$desktopEnd = '</div>
                    </section>
                </div>
            </div>';

$dStartPos = strpos($history, $desktopStart);
$dEndPos = strpos($history, $desktopEnd, $dStartPos);

$desktopLaporanContent = <<<'HTML'
<div>
    <h2 class="font-['Plus_Jakarta_Sans'] text-2xl font-extrabold text-[#12355B]">Laporan Tahunan</h2>
    <p class="mt-1 text-xs text-[#62758A]">Transparansi dana donasi dan pengeluaran Bakti Merah Putih.</p>
</div>

<div class="space-y-6 pb-8">
    <div class="bg-white rounded-[24px] p-6 shadow-sm border border-[#12355B]/10">
        <h3 class="text-lg font-extrabold text-[#12355B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Ringkasan Keuangan {{ $year }}</h3>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="space-y-2">
                <p class="text-[11px] font-bold text-[#62758A] uppercase">Dana Dihimpun</p>
                <p class="text-xl font-extrabold text-[#16A34A]">Rp {{ number_format($globalNominal, 0, ',', '.') }}</p>
            </div>
            <div class="space-y-2">
                <p class="text-[11px] font-bold text-[#62758A] uppercase">Total Donatur</p>
                <p class="text-xl font-extrabold text-[#12355B]">{{ number_format($globalDonations, 0, ',', '.') }}</p>
            </div>
            <div class="space-y-2">
                <p class="text-[11px] font-bold text-[#62758A] uppercase">Total Relawan</p>
                <p class="text-xl font-extrabold text-[#12355B]">{{ number_format($globalVolunteers, 0, ',', '.') }}</p>
            </div>
            <div class="space-y-2">
                <p class="text-[11px] font-bold text-[#62758A] uppercase">Program Aktif</p>
                <p class="text-xl font-extrabold text-[#12355B]">{{ number_format($globalCampaigns, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>

    <h3 class="text-lg font-extrabold text-[#12355B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Arsip Laporan (CSV)</h3>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([2025, 2024, 2023] as $y)
        <div class="bg-white rounded-2xl p-5 shadow-sm border border-[#12355B]/10 hover:shadow-md transition-shadow flex items-center justify-between group">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-[#F1EEE8] flex items-center justify-center shrink-0 group-hover:bg-[#D62828] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-6 h-6 text-[#12355B] group-hover:text-white transition-colors"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                </div>
                <div>
                    <h3 class="font-extrabold text-[#12355B]">Laporan Audited {{ $y }}</h3>
                    <p class="text-xs text-[#62758A]">CSV Laporan Tahunan</p>
                </div>
            </div>
            <a href="{{ route('laporan.download', $y) }}" target="_blank" hx-boost="false" class="w-10 h-10 rounded-full bg-[#F1EEE8] hover:bg-[#D62828] text-[#12355B] hover:text-white flex items-center justify-center transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-4 h-4"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
            </a>
        </div>
        @endforeach
    </div>
HTML;

$history = substr_replace($history, $desktopLaporanContent, $dStartPos, $dEndPos - $dStartPos);

$history = str_replace('<title>Riwayat - Bakti Merah Putih</title>', '<title>Laporan Tahunan - Bakti Merah Putih</title>', $history);

// Highlight the correct menu in the desktop sidebar
$history = str_replace('text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"', 'bg-[#12355B] text-white shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"', $history);
// Unhighlight history menu
$history = str_replace('bg-[#12355B] text-white shadow-sm"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text"', 'text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text"', $history);

file_put_contents('resources/views/user_laporan.blade.php', $history);
echo "user_laporan.blade.php generated\n";
