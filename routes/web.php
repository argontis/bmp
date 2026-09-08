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



Route::get('/darurat', function () {
    return view('darurat');
})->name('darurat');



Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/program/bakti-guru', function () {
    return view('program.bakti-guru');
})->name('program.bakti-guru');

Route::get('/program/bakti-pendidikan', function () {
    return view('program.bakti-pendidikan');
})->name('program.bakti-pendidikan');

Route::get('/program/bakti-lingkungan', function () {
    return view('program.bakti-lingkungan');
})->name('program.bakti-lingkungan');

Route::get('/program/bakti-kesehatan', function () {
    return view('program.bakti-kesehatan');
})->name('program.bakti-kesehatan');

Route::get('/program/bakti-pangan-gizi', function () {
    return view('program.bakti-pangan-gizi');
})->name('program.bakti-pangan-gizi');

Route::get('/program/bakti-bencana', function () {
    return view('program.bakti-bencana');
})->name('program.bakti-bencana');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/berita/beasiswa-ntt', function () {
    return view('berita.beasiswa-ntt');
})->name('berita.beasiswa-ntt');

Route::get('/berita/relawan-banjir', function () {
    return view('berita.relawan-banjir');
})->name('berita.relawan-banjir');

Route::get('/berita/gerakan-pohon', function () {
    return view('berita.gerakan-pohon');
})->name('berita.gerakan-pohon');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/relawan', function () {
    return view('relawan');
})->name('relawan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/privasi', function () {
    return view('privasi');
})->name('privasi');

Route::get('/artikel/kisah-pak-budi', function () {
    return view('artikel.kisah-pak-budi');
})->name('artikel.kisah-pak-budi');

Route::get('/artikel/sumur-bor-ntt', function () {
    return view('artikel.sumur-bor-ntt');
})->name('artikel.sumur-bor-ntt');

Route::get('/artikel/modal-usaha-ibu', function () {
    return view('artikel.modal-usaha-ibu');
})->name('artikel.modal-usaha-ibu');

// Relawan Pages
Route::get('/relawan/daftar', function () { return view('relawan_pages.daftar'); });
Route::get('/relawan/video', function () { return view('relawan_pages.video'); });
