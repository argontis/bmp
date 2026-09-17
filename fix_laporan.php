<?php

$files = [
    'resources/views/dashboard.blade.php',
    'resources/views/history.blade.php',
    'resources/views/explore.blade.php',
    'resources/views/account.blade.php',
    'resources/views/user_relawan.blade.php',
    'resources/views/laporan.blade.php',
];

foreach ($files as $file) {
    if (! file_exists($file)) {
        continue;
    }

    $content = file_get_contents($file);
    // Remove all <button hx-get="/laporan"... to </button> containing Laporan Tahunan
    $content = preg_replace('/<button hx-get="\/laporan".*?Laporan Tahunan.*?<\/button>/is', '', $content);

    // Also remove any extra whitespace left behind (optional, but keeps it clean)
    $content = preg_replace('/[ \t]*\n[ \t]*\n[ \t]*<button hx-get="\/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full/is', "\n                                <button hx-get=\"/account\" hx-push-url=\"true\" hx-target=\"body\" hx-swap=\"outerHTML transition:true\" class=\"flex w-full", $content);

    // Now insert it cleanly before Pengaturan Akun sidebar button
    $search = '<button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">';

    // For laporan, the account button might be the one in the sidebar
    // If it doesn't match, let's also try to match the active state just in case, but account is never active on these pages (except on account page, which is active, wait!)
    if ($file === 'resources/views/account.blade.php') {
        // In account.blade.php, the Pengaturan Akun button is ACTIVE.
        $search = '<button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition bg-[#12355B] text-white shadow-sm">';
    }

    if ($file === 'resources/views/laporan.blade.php') {
        $insert = <<<'HTML'
<button hx-get="/laporan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition bg-[#12355B] text-white shadow-sm">
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
    } else {
        $insert = <<<'HTML'
<button hx-get="/laporan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
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
    }

    // Replace only the specific Sidebar Account button
    $content = str_replace($search, $insert.$search, $content);
    file_put_contents($file, $content);
}
echo "Cleaned up and fixed!\n";
