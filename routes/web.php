<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/newsletter/subscribe', [\App\Http\Controllers\NewsletterSubscriberController::class, 'subscribe'])->name('newsletter.subscribe');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('auth.register');
})->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Mock Google Auth
Route::get('/auth/google', function () {
    return redirect('/auth/google/callback');
})->name('google.login');

Route::get('/auth/google/callback', function () {
    $user = \App\Models\User::firstOrCreate(
        ['email' => 'budi.google@gmail.com'],
        [
            'name' => 'Budi Google',
            'password' => \Illuminate\Support\Facades\Hash::make('password123')
        ]
    );
    \Illuminate\Support\Facades\Auth::login($user);
    return redirect('/dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/account', [\App\Http\Controllers\AccountController::class, 'index'])->name('account');

    Route::get('/history', [\App\Http\Controllers\HistoryController::class, 'index'])->name('history');

    Route::get('/pembayaran', function (\Illuminate\Http\Request $request) {
        return view('pembayaran', [
            'nominal' => $request->query('nominal'),
            'payment' => $request->query('payment'),
            'category' => $request->query('category'),
            'title' => $request->query('title'),
            'campaign_id' => $request->query('campaign_id'),
        ]);
    })->name('pembayaran');

    Route::post('/pembayaran/process', function (\Illuminate\Http\Request $request) {
        $request->validate([
            'campaign_id' => 'required|exists:campaigns,id',
            'nominal' => 'required|numeric|min:1000',
            'payment' => 'required|string'
        ]);
        
        \App\Models\Donation::create([
            'user_id' => auth()->id(),
            'campaign_id' => $request->campaign_id,
            'amount' => $request->nominal,
            'payment_method' => $request->payment,
            'status' => 'Berhasil'
        ]);
        
        return redirect('/history')->with('success', 'Pembayaran Berhasil! Terima kasih atas donasi Anda.');
    })->name('pembayaran.process');
});

Route::get('/explore', [\App\Http\Controllers\ExploreController::class, 'index'])->name('explore');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/reward', function () {
    return view('reward');
})->name('reward');

Route::get('/dampak', function () {
    return view('dampak');
})->name('dampak');

Route::get('/darurat', function () {
    return view('darurat');
})->name('darurat');

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

Route::post('/kontak/send', [\App\Http\Controllers\ContactController::class, 'sendMessage'])->name('kontak.send');

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

Route::get('/artikel/klinik-terapung-maluku', function () {
    return view('artikel.klinik-terapung-maluku');
})->name('artikel.klinik-terapung-maluku');

Route::get('/artikel/renovasi-masjid', function () {
    return view('artikel.renovasi-masjid');
})->name('artikel.renovasi-masjid');

Route::get('/artikel/bantuan-gempa-lombok', function () {
    return view('artikel.bantuan-gempa-lombok');
})->name('artikel.bantuan-gempa-lombok');

// Relawan Pages
Route::get('/relawan/daftar', function () { return view('relawan_pages.daftar'); });
Route::post('/relawan/daftar', [\App\Http\Controllers\VolunteerController::class, 'store']);
Route::get('/relawan/video', function () { return view('relawan_pages.video'); });

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/kegiatan', [AdminController::class, 'kegiatan'])->name('admin.kegiatan');
    Route::post('/admin/kegiatan', [AdminController::class, 'storeKegiatan'])->name('admin.kegiatan.store');
    Route::put('/admin/kegiatan/{id}', [AdminController::class, 'updateKegiatan'])->name('admin.kegiatan.update');
    Route::delete('/admin/kegiatan/{id}', [AdminController::class, 'destroyKegiatan'])->name('admin.kegiatan.destroy');
    Route::get('/admin/donatur', [AdminController::class, 'donatur'])->name('admin.donatur');
    Route::get('/admin/transaksi', [AdminController::class, 'transaksi'])->name('admin.transaksi');
    
    // Relawan Admin Routes
    Route::get('/admin/relawan', [AdminController::class, 'relawan'])->name('admin.relawan');
    Route::put('/admin/relawan/{id}', [AdminController::class, 'updateRelawan'])->name('admin.relawan.update');
    Route::delete('/admin/relawan/{id}', [AdminController::class, 'destroyRelawan'])->name('admin.relawan.destroy');
});
