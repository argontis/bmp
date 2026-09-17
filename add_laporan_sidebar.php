<?php

$files = glob('resources/views/admin*.blade.php');

$link = <<<'HTML'
            <a href="{{ route('admin.laporan') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium {{ request()->routeIs('admin.laporan') ? 'bg-primary text-white shadow-lg shadow-red-500/20' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                Laporan
            </a>
HTML;

foreach ($files as $file) {
    $content = file_get_contents($file);
    if (! str_contains($content, 'Laporan')) {
        // Find the place to insert (before Pengaturan or Logout)
        $content = str_replace('<a href="{{ route(\'logout\')', $link."\n            <a href=\"{{ route('logout')", $content);
        file_put_contents($file, $content);
        echo "Updated $file\n";
    }
}
