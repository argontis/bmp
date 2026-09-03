<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/reward', function () {
    return view('reward');
})->name('reward');

Route::get('/dampak', function () {
    return view('dampak');
})->name('dampak');

Route::get('/zakat', function () {
    return view('zakat');
})->name('zakat');

Route::get('/darurat', function () {
    return view('darurat');
})->name('darurat');

Route::get('/asuransi', function () {
    return view('asuransi');
})->name('asuransi');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/relawan', function () {
    return view('relawan');
})->name('relawan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
