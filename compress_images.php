<?php

function compressDir($dir)
{
    if (! is_dir($dir)) {
        return;
    }
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $ext = strtolower(pathinfo($file->getFilename(), PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
                $filePath = $file->getPathname();
                $webpPath = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $filePath);

                $data = @file_get_contents($filePath);
                if (! $data) {
                    continue;
                }

                $image = @imagecreatefromstring($data);

                if ($image !== false) {
                    imagepalettetotruecolor($image);
                    imagealphablending($image, true);
                    imagesavealpha($image, true);

                    imagewebp($image, $webpPath, 80);
                    imagedestroy($image);
                    unlink($filePath);
                    echo "Compressed: $filePath -> $webpPath\n";
                } else {
                    echo "Failed to read: $filePath\n";
                }
            }
        }
    }
}

compressDir(__DIR__.'/public/images');
compressDir(__DIR__.'/public/logo');
compressDir(__DIR__.'/storage/app/public');
