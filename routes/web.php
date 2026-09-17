<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NewsletterSubscriberController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VolunteerController;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Gallery;
use App\Models\Volunteer;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $campaigns = Campaign::with('donations')->orderBy('created_at', 'desc')->take(3)->get();

    return view('welcome', compact('campaigns'));
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/newsletter/subscribe', [NewsletterSubscriberController::class, 'subscribe'])->name('newsletter.subscribe');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', function () {
    return view('auth.register');
})->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore');

    Route::get('/account', [AccountController::class, 'index'])->name('account');

    Route::get('/history', [HistoryController::class, 'index'])->name('history');

    Route::get('/sertifikat/download', function () {
        $pdf = Pdf::loadView('sertifikat');

        return $pdf->download('Sertifikat_Kebaikan_'.auth()->user()->name.'.pdf');
    })->name('sertifikat.download');

    Route::get('/user/relawan', function () {
        $volunteers = Volunteer::where('email', auth()->user()->email)->with('campaign')->orderBy('created_at', 'desc')->paginate(10);

        return view('user_relawan', compact('volunteers'));
    })->name('user.relawan');

    Route::post('/user/relawan/{id}/konfirmasi', [VolunteerController::class, 'konfirmasi'])->name('user.relawan.konfirmasi');
    Route::get('/pembayaran', function (Request $request) {
        return view('pembayaran', [
            'nominal' => $request->query('nominal'),
            'payment' => $request->query('payment'),
            'category' => $request->query('category'),
            'title' => $request->query('title'),
            'campaign_id' => $request->query('campaign_id'),
        ]);
    })->name('pembayaran');

    Route::post('/pembayaran/process', function (Request $request) {
        $request->validate([
            'campaign_id' => 'required|exists:campaigns,id',
            'nominal' => 'required|numeric|min:1000',
            'payment' => 'required|string',
        ]);

        Donation::create([
            'user_id' => auth()->id(),
            'campaign_id' => $request->campaign_id,
            'amount' => $request->nominal,
            'payment_method' => $request->payment,
            'status' => 'Berhasil',
        ]);

        return redirect('/history')->with('success', 'Pembayaran Berhasil! Terima kasih atas donasi Anda.');
    })->name('pembayaran.process');
});

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
    $campaigns = Campaign::with('donations')
        ->where('label', 'like', '%Darurat%')
        ->orWhere('category', 'Kebencanaan')
        ->orWhere('category', 'Sosial & Kemanusiaan')
        ->paginate(9);

    return view('darurat', compact('campaigns'));
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
    $campaigns = Campaign::with('donations')->where('status', 'Aktif')->latest()->take(3)->get();

    return view('donasi', compact('campaigns'));
})->name('donasi');

Route::get('/laporan', [ReportController::class, 'index'])->name('laporan');

Route::get('/laporan/download/{year}', [ReportController::class, 'download'])->name('laporan.download');

Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('artikel.show');

// Berita statis
Route::get('/berita/beasiswa-ntt', function () {
    return view('berita.beasiswa-ntt');
})->name('berita.beasiswa-ntt');

Route::get('/berita/gerakan-pohon', function () {
    return view('berita.gerakan-pohon');
})->name('berita.gerakan-pohon');

Route::get('/berita/relawan-banjir', function () {
    return view('berita.relawan-banjir');
})->name('berita.relawan-banjir');

Route::get('/galeri', function () {
    $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12);

    return view('galeri', compact('galleries'));
})->name('galeri');

Route::get('/relawan', function () {
    $campaigns = Campaign::where('volunteer_target', '>', 0)->with('volunteers')->orderBy('created_at', 'desc')->take(4)->get();

    return view('relawan', compact('campaigns'));
})->name('relawan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::post('/kontak/send', [ContactController::class, 'sendMessage'])->name('kontak.send');

Route::get('/privasi', function () {
    return view('privasi');
})->name('privasi');

// Relawan Pages
Route::middleware('auth')->group(function () {
    Route::get('/relawan/daftar', function () {
        $campaigns = Campaign::where('volunteer_target', '>', 0)->get();

        return view('relawan_pages.daftar', compact('campaigns'));
    })->name('relawan.daftar');
    Route::post('/relawan/daftar', [VolunteerController::class, 'store']);
});
Route::get('/relawan/video', function () {
    return view('relawan_pages.video');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
    Route::get('/admin/kegiatan', [AdminController::class, 'kegiatan'])->name('admin.kegiatan');
    Route::get('/admin/kegiatan/{id}', [AdminController::class, 'showKegiatan'])->name('admin.kegiatan.show');
    Route::post('/admin/kegiatan', [AdminController::class, 'storeKegiatan'])->name('admin.kegiatan.store');
    Route::put('/admin/kegiatan/{id}', [AdminController::class, 'updateKegiatan'])->name('admin.kegiatan.update');
    Route::delete('/admin/kegiatan/{id}', [AdminController::class, 'destroyKegiatan'])->name('admin.kegiatan.destroy');
    Route::get('/admin/donatur', [AdminController::class, 'donatur'])->name('admin.donatur');
    Route::get('/admin/transaksi', [AdminController::class, 'transaksi'])->name('admin.transaksi');

    // Relawan Admin Routes

    Route::put('/admin/relawan/{id}', [AdminController::class, 'updateRelawan'])->name('admin.relawan.update');
    Route::delete('/admin/relawan/{id}', [AdminController::class, 'destroyRelawan'])->name('admin.relawan.destroy');

    // Galeri Admin Routes
    Route::get('/admin/galeri', [AdminController::class, 'galeri'])->name('admin.galeri');
    Route::post('/admin/galeri', [AdminController::class, 'storeGaleri'])->name('admin.galeri.store');
    Route::put('/admin/galeri/{id}', [AdminController::class, 'updateGaleri'])->name('admin.galeri.update');
    Route::delete('/admin/galeri/{id}', [AdminController::class, 'destroyGaleri'])->name('admin.galeri.destroy');

    // Artikel Admin Routes
    Route::get('/admin/artikel', [AdminController::class, 'artikel'])->name('admin.artikel');
    Route::post('/admin/artikel', [AdminController::class, 'storeArtikel'])->name('admin.artikel.store');
    Route::put('/admin/artikel/{id}', [AdminController::class, 'updateArtikel'])->name('admin.artikel.update');
    Route::delete('/admin/artikel/{id}', [AdminController::class, 'destroyArtikel'])->name('admin.artikel.destroy');
});
