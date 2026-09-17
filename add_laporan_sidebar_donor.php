<?php

$files = [
    'resources/views/dashboard.blade.php',
    'resources/views/history.blade.php',
    'resources/views/explore.blade.php',
    'resources/views/account.blade.php',
    'resources/views/user_relawan.blade.php',
    'resources/views/laporan.blade.php',
];

$link = <<<'HTML'
                                <button hx-get="/laporan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition {{ request()->routeIs('laporan') ? 'bg-[#12355B] text-white shadow-sm' : 'text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                    Laporan Tahunan
                                </button>
HTML;

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);

        // Add Laporan before Pengaturan Akun in the sidebar
        if (! str_contains($content, 'Laporan Tahunan') && str_contains($content, 'Pengaturan Akun')) {
            $search = '<button hx-get="/account"';
            if (str_contains($content, $search)) {
                $content = str_replace($search, $link."\n                                ".$search, $content);
                file_put_contents($file, $content);
                echo "Updated $file\n";
            }
        }

        // Let's also check if the active state needs to be dynamic in laporan.blade.php itself
        // In laporan.blade.php, we might have hardcoded the sidebar buttons instead of using route checks
        // We will just let the script insert it, then manually review `laporan.blade.php` if needed.
    }
}
echo "Done\n";
