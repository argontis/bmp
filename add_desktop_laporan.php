<?php

$history = file_get_contents('resources/views/history.blade.php');
$laporan = file_get_contents('resources/views/laporan.blade.php');

// Extract the desktop header and sidebar from history.blade.php
// We know it starts at <!-- TABLET & DESKTOP VIEW (Hidden on Mobile) -->
// and ends just before <section class="space-y-6">

$startToken = '<!-- TABLET & DESKTOP VIEW (Hidden on Mobile) -->';
$endToken = '<section class="space-y-6">';
$startIndex = strpos($history, $startToken);
$endIndex = strpos($history, $endToken, $startIndex);

$desktopHeaderAndSidebar = substr($history, $startIndex, $endIndex - $startIndex);

// Now we need to create the main content for desktop laporan
// Let's extract the form, personal, and global sections from the mobile layout of laporan
// It is between <form action="{{ route('laporan') }}" and </div>\n            \n            <x-user-bottom-nav />

$contentStart = '<form action="{{ route(\'laporan\') }}" method="GET" class="mb-6">';
$contentEnd = '<x-user-bottom-nav />';

$cStart = strpos($laporan, $contentStart);
$cEnd = strpos($laporan, $contentEnd, $cStart);

// Content without the container divs
$desktopContent = substr($laporan, $cStart, $cEnd - $cStart);

// Remove the `</div>\n            \n            ` before `<x-user-bottom-nav />`
$desktopContent = rtrim($desktopContent);
if (substr($desktopContent, -6) == '</div>') {
    $desktopContent = substr($desktopContent, 0, -6);
}

// Build the desktop section
$desktopSection = <<<HTML
                    <section class="space-y-6">
                        <div class="space-y-6 pb-8">
                            <div>
                                <h2 class="font-['Plus_Jakarta_Sans'] text-2xl font-extrabold text-[#12355B]">Laporan Tahunan</h2>
                                <p class="mt-1 text-xs text-[#62758A]">Laporan transparansi penyaluran donasi dan program kebaikan untuk tahun terpilih.</p>
                            </div>
                            
                            <!-- CONTENT -->
                            $desktopContent
                            
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
HTML;

// Remove everything in laporan after </body> (actually we can just replace </body>\n</html> in laporan with the desktop layout + </body>\n</html>)
$laporan = str_replace("</body>\n</html>", $desktopHeaderAndSidebar.$desktopSection, $laporan);

file_put_contents('resources/views/laporan.blade.php', $laporan);
echo "Added desktop view to laporan.blade.php\n";
