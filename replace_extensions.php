<?php

function replaceInDir($dir)
{
    if (! is_dir($dir)) {
        return;
    }
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($iterator as $file) {
        if ($file->isFile() && in_array(pathinfo($file->getFilename(), PATHINFO_EXTENSION), ['php'])) {
            $content = file_get_contents($file->getPathname());

            // Replace references to images in HTML or PHP strings
            $updatedContent = preg_replace('/(\/images\/[^"\'\s]+)\.(png|jpg|jpeg)/i', '$1.webp', $content);
            $updatedContent = preg_replace('/(\/logo\/[^"\'\s]+)\.(png|jpg|jpeg)/i', '$1.webp', $updatedContent);
            $updatedContent = preg_replace('/(images\/[^"\'\s]+)\.(png|jpg|jpeg)/i', '$1.webp', $updatedContent);

            // For DatabaseSeeder.php where it might be literal string assignments without leading /
            $updatedContent = preg_replace('/([a-zA-Z0-9_\-]+)\.(png|jpg|jpeg)/i', '$1.webp', $updatedContent);

            if ($content !== $updatedContent) {
                file_put_contents($file->getPathname(), $updatedContent);
                echo 'Updated references in: '.$file->getPathname()."\n";
            }
        }
    }
}

replaceInDir(__DIR__.'/resources/views');
replaceInDir(__DIR__.'/database/seeders');
