<?php

$search = '<button class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-4 h-4"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></button>';

$replace = '<a href="https://youtube.com/@yayasanbaktimerahputih?si=2HPfET3fJpl2I-t2" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-4 h-4"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></a>';

function getFiles($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $files[] = $file->getPathname();
        }
    }
    return $files;
}

$viewsDir = __DIR__ . '/resources/views';
$files = getFiles($viewsDir);

$count = 0;
foreach ($files as $file) {
    $content = file_get_contents($file);
    if (strpos($content, $search) !== false) {
        $content = str_replace($search, $replace, $content);
        file_put_contents($file, $content);
        $count++;
    }
}

echo "Updated $count files.\n";
