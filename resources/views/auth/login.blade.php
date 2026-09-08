<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Bakti Merah Putih</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <!-- MOBILE VIEW (Hidden on Tablet and Desktop) -->
    <div class="block md:hidden">
        <div class="min-h-screen flex items-center justify-center bg-[#F4F6F9]" style="font-family: Inter, sans-serif;">
            <div class="relative w-full max-w-[430px] min-h-screen bg-white flex flex-col shadow-[0_0_80px_-20px_rgba(0,0,0,0.18)] overflow-hidden">
                <div class="relative overflow-hidden flex-shrink-0" style="height: 300px;">
                    <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&amp;h=600&amp;fit=crop&amp;auto=format" alt="Anak-anak ceria" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0" style="background: linear-gradient(160deg, rgba(18, 53, 91, 0.933) 0%, rgba(214, 40, 40, 0.8) 100%);"></div>
                    <div class="absolute inset-0 opacity-[0.08] pointer-events-none" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
                    <button onclick="window.location.href='/'" class="absolute top-12 left-5 flex items-center gap-1.5 text-white/80 hover:text-white transition-colors text-[13px] font-semibold z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-4 h-4"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg> Kembali
                    </button>
                    <div class="absolute inset-0 flex flex-col items-center justify-center gap-3">
                        <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-16 w-auto object-contain drop-shadow-lg">
                        <p class="text-white/75 text-[13px] font-medium tracking-wide">Bersama Menebar Kebaikan untuk Indonesia</p>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="flex items-center gap-1 px-3 py-1 rounded-full bg-white/15 border border-white/25 text-white text-[10px] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5 text-emerald-400"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> Terverifikasi
                            </span>
                            <span class="flex items-center gap-1 px-3 py-1 rounded-full bg-white/15 border border-white/25 text-white text-[10px] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5 text-emerald-400"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> 78 Program Aktif
                            </span>
                        </div>
                    </div>
                    <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 430 32" preserveAspectRatio="none"><path d="M0 32 Q215 0 430 32 L430 32 L0 32Z" fill="white"></path></svg>
                </div>
                
                <div class="flex-1 flex flex-col px-6 pt-2 pb-8 overflow-y-auto">
                    <div class="mb-6 text-center">
                        <h2 id="welcome-title" class="text-[22px] font-extrabold text-[#12355B] tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Selamat Datang</h2>
                        <p id="welcome-subtitle" class="text-[13px] text-gray-400 mt-1">Masuk untuk mulai berdonasi</p>
                    </div>
                    
                    <div class="flex bg-[#F4F6F9] rounded-2xl p-1 mb-5">
                        <button id="tab-login" class="flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 bg-white shadow-sm text-[#12355B]">Masuk</button>
                        <button id="tab-register" class="flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 text-gray-400 hover:text-gray-600">Daftar</button>
                    </div>
                    
                    <button onclick="window.location.href='/dashboard'" type="button" class="w-full flex items-center justify-center gap-3 py-3.5 bg-white border border-gray-200 rounded-2xl text-[14px] font-bold text-[#1B1B1B] hover:bg-gray-50 hover:border-gray-300 active:scale-[0.98] transition-all duration-150 shadow-sm mb-5 disabled:opacity-60">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"></path>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                        </svg>
                        Lanjutkan dengan Google
                    </button>
                    
                    <div class="flex items-center gap-3 mb-5">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <span class="text-[11px] text-gray-400 font-semibold">atau dengan email</span>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>
                    
                    <form id="form-login" class="space-y-3" onsubmit="event.preventDefault(); window.location.href='/dashboard';" style="opacity: 1; transform: none; display: block;">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            <input type="email" placeholder="Alamat email" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" value="" style="--tw-ring-color: #D6282840;">
                        </div>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <input type="password" placeholder="Kata sandi" required="" class="w-full pl-11 pr-12 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" value="" style="--tw-ring-color: #D6282840;">
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></button>
                        </div>
                        <div class="text-right">
                            <button type="button" class="text-[12px] font-bold" style="color: rgb(214, 40, 40);">Lupa kata sandi?</button>
                        </div>
                        <div class="pt-1">
                            <button type="submit" class="w-full py-4 rounded-2xl text-[15px] font-extrabold text-white active:scale-[0.98] transition-all disabled:opacity-50 flex items-center justify-center gap-2 shadow-lg" style="background: rgb(214, 40, 40); box-shadow: rgba(214, 40, 40, 0.6) 0px 12px 28px -8px;">
                                Masuk Sekarang
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                        </div>
                    </form>

                    <form id="form-register" class="space-y-3" onsubmit="event.preventDefault(); window.location.href='/dashboard';" style="opacity: 1; transform: none; display: none;">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            <input type="text" placeholder="Nama lengkap" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                        </div>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            <input type="email" placeholder="Alamat email" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                        </div>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <input type="password" placeholder="Kata sandi" required="" class="w-full pl-11 pr-12 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></button>
                        </div>
                        <div class="pt-1">
                            <button type="submit" class="w-full py-4 rounded-2xl text-[15px] font-extrabold text-white active:scale-[0.98] transition-all disabled:opacity-50 flex items-center justify-center gap-2 shadow-lg" style="background: rgb(214, 40, 40); box-shadow: rgba(214, 40, 40, 0.6) 0px 12px 28px -8px;">
                                Buat Akun
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                        </div>
                    </form>
                    
                    <div class="mt-6 flex items-center justify-center gap-4">
                        <div class="flex items-center gap-1.5 text-[11px] text-gray-400 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-3.5 h-3.5 text-emerald-500"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg> Data aman &amp; terenkripsi
                        </div>
                        <div class="w-1 h-1 rounded-full bg-gray-300"></div>
                        <div class="flex items-center gap-1.5 text-[11px] text-gray-400 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 text-emerald-500"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> Terverifikasi resmi
                        </div>
                    </div>
                    
                    <p class="text-center text-[10px] text-gray-400 mt-3 leading-relaxed px-4">
                        Dengan masuk, Anda menyetujui <a href="#" class="font-bold" style="color: rgb(214, 40, 40);">Syarat &amp; Ketentuan</a> dan <a href="#" class="font-bold" style="color: rgb(214, 40, 40);">Kebijakan Privasi</a> Bakti Merah Putih
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLET & DESKTOP VIEW (Hidden on Mobile) -->
    <div class="hidden md:block">
        <main class="min-h-screen bg-[#FBFAF7] text-[#12355B] font-['Inter'] lg:grid lg:grid-cols-[1.1fr_.9fr] selection:bg-[#D62828] selection:text-white">
            <section class="relative hidden overflow-hidden lg:block bg-[#12355B]">
                <img src="{{ asset('images/hero-bg.png') }}" alt="Relawan Bakti Merah Putih bersama penerima manfaat" class="absolute inset-0 h-full w-full object-cover opacity-60">
                <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(18,53,91,.9)_0%,rgba(18,53,91,.75)_60%,rgba(18,53,91,.95)_100%)]"></div>
                <div class="relative flex h-full flex-col justify-between p-12 text-white">
                    <div>
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="Bakti Merah Putih White Logo" class="h-12 w-auto object-contain cursor-pointer">
                        </a>
                    </div>
                    <div class="max-w-xl">
                        <span class="inline-block rounded-full bg-white/10 px-3.5 py-1 text-[11px] font-extrabold uppercase tracking-[.2em] text-[#F4AAAA] border border-white/15">Portal Resmi Donatur</span>
                        <h1 class="mt-5 font-['Plus_Jakarta_Sans'] text-4xl font-extrabold leading-[1.1] tracking-[-.035em] xl:text-5xl">Kebaikan yang Anda mulai hari ini, mewujudkan jutaan senyum.</h1>
                        <p class="mt-5 text-base leading-7 text-white/80">Pantau laporan penyaluran 5 program utama, unduh bukti donasi resmi, serta terhubung dengan komunitas donatur di seluruh Indonesia.</p>
                        <div class="mt-8 flex items-center gap-6 border-t border-white/15 pt-6 text-xs text-white/70">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check text-[#16A34A]">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>Terverifikasi Kemenkumham &amp; Dinsos</span>
                            </div>
                            <div>•</div>
                            <span>Laporan Transparan Real-Time</span>
                        </div>
                    </div>
                    <p class="text-xs text-white/50">© 2026 Yayasan Bakti Merah Putih. Seluruh Hak Cipta Dilindungi.</p>
                </div>
            </section>
            
            <section class="mx-auto flex min-h-screen w-full max-w-[500px] flex-col justify-between px-6 py-8 sm:px-10 lg:max-w-none lg:justify-center lg:px-16">
                <div>
                    <div class="flex items-center justify-between mb-8">
                        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-xs font-bold text-[#62758A] transition hover:text-[#D62828]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                                <path d="m12 19-7-7 7-7"></path>
                                <path d="M19 12H5"></path>
                            </svg> Kembali ke Beranda
                        </a>
                        <img src="{{ asset('images/logo.png') }}" alt="Bakti Merah Putih Logo" class="h-9 w-auto object-contain lg:hidden">
                    </div>
                    
                    <div class="max-w-md mx-auto lg:mx-0">
                        <span class="text-[11px] font-extrabold uppercase tracking-[.2em] text-[#D62828]">Portal Donatur</span>
                        <h2 class="mt-2 font-['Plus_Jakarta_Sans'] text-3xl font-extrabold tracking-[-.035em] text-[#12355B]">Selamat Datang Kembali</h2>
                        <p class="mt-2 text-xs leading-relaxed text-[#62758A]">Masuk untuk mengakses dashboard laporan dan mengelola riwayat bantuan Anda.</p>
                        
                        <div class="mt-6">
                            <button onclick="window.location.href='/dashboard'" type="button" class="flex w-full items-center justify-center gap-3 rounded-2xl border border-[#12355B]/15 bg-white py-3.5 text-xs font-bold text-[#12355B] shadow-sm transition hover:bg-[#F1EEE8] active:scale-[0.99]">
                                <svg class="h-4 w-4" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"></path>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"></path>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"></path>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"></path>
                                </svg>
                                Masuk dengan Google
                            </button>
                            <div class="relative my-6 flex items-center justify-center">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-[#12355B]/10"></div>
                                </div>
                                <span class="relative bg-[#FBFAF7] px-3 text-[10px] font-extrabold uppercase tracking-wider text-[#8192A3]">atau via email</span>
                            </div>
                        </div>
                        
                        <form class="space-y-4" action="{{ route('dashboard') }}" method="GET">
                            <div>
                                <label class="block text-xs font-bold text-[#12355B] mb-1">Alamat Email</label>
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-3.5 top-1/2 -translate-y-1/2 text-[#8192A3]">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    <input type="email" required="" placeholder="nama@email.com" class="w-full rounded-xl border border-[#12355B]/15 bg-white py-3 pl-10 pr-4 text-xs outline-none focus:border-[#D62828] focus:ring-1 focus:ring-[#D62828]" value="">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-[#12355B] mb-1">Kata Sandi</label>
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock-keyhole absolute left-3.5 top-1/2 -translate-y-1/2 text-[#8192A3]">
                                        <circle cx="12" cy="16" r="1"></circle>
                                        <rect x="3" y="10" width="18" height="12" rx="2"></rect>
                                        <path d="M7 10V7a5 5 0 0 1 10 0v3"></path>
                                    </svg>
                                    <input type="password" required="" placeholder="••••••••" class="w-full rounded-xl border border-[#12355B]/15 bg-white py-3 pl-10 pr-10 text-xs outline-none focus:border-[#D62828] focus:ring-1 focus:ring-[#D62828]" value="">
                                    <button type="button" class="absolute right-3.5 top-1/2 -translate-y-1/2 text-[#8192A3] hover:text-[#12355B]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="mt-2 flex w-full items-center justify-center gap-2 rounded-xl bg-[#D62828] py-3.5 text-xs font-bold text-white shadow transition hover:bg-[#b91e26] active:scale-[0.99]">
                                Masuk ke Portal 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </button>
                        </form>
                        
                        <div class="mt-6 text-center text-xs text-[#62758A]">
                            Belum terdaftar sebagai donatur? <button class="font-bold text-[#D62828] hover:underline ml-1">Daftar sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="mt-10 text-center text-[11px] text-[#8192A3] lg:hidden">
                    © 2026 Yayasan Bakti Merah Putih · Humanitarian Editorial
                </div>
            </section>
        </main>
    </div>

    <script>
        // Script untuk tampilan mobile
        const tabLogin = document.getElementById('tab-login');
        const tabRegister = document.getElementById('tab-register');
        const formLogin = document.getElementById('form-login');
        const formRegister = document.getElementById('form-register');
        const welcomeTitle = document.getElementById('welcome-title');
        const welcomeSubtitle = document.getElementById('welcome-subtitle');

        if(tabLogin && tabRegister && formLogin && formRegister) {
            const activeClass = "flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 bg-white shadow-sm text-[#12355B]";
            const inactiveClass = "flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 text-gray-400 hover:text-gray-600";

            tabLogin.addEventListener('click', () => {
                tabLogin.className = activeClass;
                tabRegister.className = inactiveClass;
                
                formLogin.style.display = 'block';
                formRegister.style.display = 'none';
                
                welcomeTitle.innerText = "Selamat Datang";
                welcomeSubtitle.innerText = "Masuk untuk mulai berdonasi";
            });

            tabRegister.addEventListener('click', () => {
                tabRegister.className = activeClass;
                tabLogin.className = inactiveClass;
                
                formRegister.style.display = 'block';
                formLogin.style.display = 'none';
                
                welcomeTitle.innerText = "Buat Akun Baru";
                welcomeSubtitle.innerText = "Bergabung dan buat perubahan nyata";
            });
        }
    </script>
</body>
</html>
