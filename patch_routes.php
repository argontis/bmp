<?php

$web = file_get_contents('routes/web.php');
$target = "Route::get('/history', [DashboardController::class, 'history'])->name('history');";
$replace = $target."\n    Route::get('/user/laporan', [ReportController::class, 'userIndex'])->name('user.laporan');";
$web = str_replace($target, $replace, $web);
file_put_contents('routes/web.php', $web);
echo "routes patched\n";
