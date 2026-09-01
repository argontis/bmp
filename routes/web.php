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
