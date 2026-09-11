<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Bakti Merah Putih</title>
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
                    <img src="{{ asset('images/hero1.webp') }}" alt="Anak-anak ceria" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0" style="background: linear-gradient(160deg, rgba(18, 53, 91, 0.933) 0%, rgba(214, 40, 40, 0.8) 100%);"></div>
                    <div class="absolute inset-0 opacity-[0.08] pointer-events-none" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
                    <button onclick="window.location.href='/'" class="absolute top-12 left-5 flex items-center gap-1.5 text-white/80 hover:text-white transition-colors text-[13px] font-semibold z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-4 h-4"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg> Kembali
                    </button>
                    <div class="absolute inset-0 flex flex-col items-center justify-center gap-3">
                        <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-16 w-auto object-contain drop-shadow-lg">
                        <p class="text-white/75 text-[13px] font-medium tracking-wide">Bersama Menebar Kebaikan untuk Indonesia</p>
                    </div>
                    <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 430 32" preserveAspectRatio="none"><path d="M0 32 Q215 0 430 32 L430 32 L0 32Z" fill="white"></path></svg>
                </div>
                
                <div class="flex-1 flex flex-col px-6 pt-2 pb-8 overflow-y-auto">
                    <div class="mb-6 text-center">
                        <h2 class="text-[22px] font-extrabold text-[#12355B] tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Buat Akun Baru</h2>
                        <p class="text-[13px] text-gray-400 mt-1">Bergabung dan buat perubahan nyata</p>
                    </div>
                    
                    <button onclick="window.location.href='/auth/google'" type="button" class="w-full flex items-center justify-center gap-3 py-3.5 bg-white border border-gray-200 rounded-2xl text-[14px] font-bold text-[#1B1B1B] hover:bg-gray-50 hover:border-gray-300 active:scale-[0.98] transition-all duration-150 shadow-sm mb-5 disabled:opacity-60">
                        <svg viewBox="0 0 24 24" class="w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"></path>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                        </svg>
                        Daftar dengan Google
                    </button>
                    
                    <div class="flex items-center gap-3 mb-5">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <span class="text-[11px] text-gray-400 font-semibold">atau dengan email</span>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>
                    
                    <form class="space-y-3" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama lengkap" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                            @error('name')
                                <p class="text-xs text-red-500 mt-1 pl-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Alamat email" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                            @error('email')
                                <p class="text-xs text-red-500 mt-1 pl-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <input type="password" name="password" placeholder="Kata sandi" required="" class="w-full pl-11 pr-12 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                            @error('password')
                                <p class="text-xs text-red-500 mt-1 pl-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="pt-1">
                            <button type="submit" class="w-full py-4 rounded-2xl text-[15px] font-extrabold text-white active:scale-[0.98] transition-all disabled:opacity-50 flex items-center justify-center gap-2 shadow-lg" style="background: rgb(214, 40, 40); box-shadow: rgba(214, 40, 40, 0.6) 0px 12px 28px -8px;">
                                Buat Akun
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                        </div>
                    </form>
                    
                    <div class="mt-6 text-center text-xs text-[#62758A]">
                        Sudah punya akun? <a href="/login" class="font-bold text-[#D62828] hover:underline ml-1">Masuk sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLET & DESKTOP VIEW (Hidden on Mobile) -->
    <div class="hidden md:block">
        <main class="min-h-screen bg-[#FBFAF7] text-[#12355B] font-['Inter'] lg:grid lg:grid-cols-[1.1fr_.9fr] selection:bg-[#D62828] selection:text-white">
            <section class="relative hidden overflow-hidden lg:block bg-[#12355B]">
                <img src="{{ asset('images/hero1.webp') }}" alt="Relawan Bakti Merah Putih" class="absolute inset-0 h-full w-full object-cover opacity-60">
                <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(18,53,91,.9)_0%,rgba(18,53,91,.75)_60%,rgba(18,53,91,.95)_100%)]"></div>
                <div class="relative flex h-full flex-col justify-between p-12 text-white">
                    <div>
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="Bakti Merah Putih White Logo" class="h-12 w-auto object-contain cursor-pointer">
                        </a>
                    </div>
                    <div class="max-w-xl">
                        <span class="inline-block rounded-full bg-white/10 px-3.5 py-1 text-[11px] font-extrabold uppercase tracking-[.2em] text-[#F4AAAA] border border-white/15">Bergabung Bersama Kami</span>
                        <h1 class="mt-5 font-['Plus_Jakarta_Sans'] text-4xl font-extrabold leading-[1.1] tracking-[-.035em] xl:text-5xl">Mulai Langkah Kecil Anda untuk Perubahan Besar.</h1>
                        <p class="mt-5 text-base leading-7 text-white/80">Jadilah bagian dari komunitas donatur yang telah mewujudkan ribuan senyum di pelosok negeri. Daftar sekarang dan mulai berdonasi dengan mudah, aman, dan transparan.</p>
                        <div class="mt-8 flex items-center gap-6 border-t border-white/15 pt-6 text-xs text-white/70">
                            <div class="flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check text-[#16A34A]">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <span>100% Aman & Terenkripsi</span>
                            </div>
                            <div>•</div>
                            <span>Kemudahan Berdonasi</span>
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
                        <span class="text-[11px] font-extrabold uppercase tracking-[.2em] text-[#D62828]">Daftar Akun</span>
                        <h2 class="mt-2 font-['Plus_Jakarta_Sans'] text-3xl font-extrabold tracking-[-.035em] text-[#12355B]">Buat Akun Baru</h2>
                        <p class="mt-2 text-xs leading-relaxed text-[#62758A]">Isi data diri Anda di bawah ini untuk menjadi donatur resmi.</p>
                        
                        <div class="mt-6">
                            <button onclick="window.location.href='/auth/google'" type="button" class="flex w-full items-center justify-center gap-3 rounded-2xl border border-[#12355B]/15 bg-white py-3.5 text-xs font-bold text-[#12355B] shadow-sm transition hover:bg-[#F1EEE8] active:scale-[0.99]">
                                <svg class="h-4 w-4" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"></path>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"></path>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"></path>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"></path>
                                </svg>
                                Daftar dengan Google
                            </button>
                            <div class="relative my-6 flex items-center justify-center">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-[#12355B]/10"></div>
                                </div>
                                <span class="relative bg-[#FBFAF7] px-3 text-[10px] font-extrabold uppercase tracking-wider text-[#8192A3]">atau via email</span>
                            </div>
                        </div>
                        
                        <form class="space-y-4" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div>
                                <label class="block text-xs font-bold text-[#12355B] mb-1">Nama Lengkap</label>
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user absolute left-3.5 top-1/2 -translate-y-1/2 text-[#8192A3]">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                        <circle cx="12" cy="7" r="4"/>
                                    </svg>
                                    <input type="text" name="name" required="" placeholder="Budi Santoso" class="w-full rounded-xl border border-[#12355B]/15 bg-white py-3 pl-10 pr-4 text-xs outline-none focus:border-[#D62828] focus:ring-1 focus:ring-[#D62828]" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-[#12355B] mb-1">Alamat Email</label>
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-3.5 top-1/2 -translate-y-1/2 text-[#8192A3]">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    <input type="email" name="email" required="" placeholder="nama@email.com" class="w-full rounded-xl border border-[#12355B]/15 bg-white py-3 pl-10 pr-4 text-xs outline-none focus:border-[#D62828] focus:ring-1 focus:ring-[#D62828]" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-[#12355B] mb-1">Kata Sandi</label>
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock-keyhole absolute left-3.5 top-1/2 -translate-y-1/2 text-[#8192A3]">
                                        <circle cx="12" cy="16" r="1"></circle>
                                        <rect x="3" y="10" width="18" height="12" rx="2"></rect>
                                        <path d="M7 10V7a5 5 0 0 1 10 0v3"></path>
                                    </svg>
                                    <input type="password" name="password" required="" placeholder="••••••••" class="w-full rounded-xl border border-[#12355B]/15 bg-white py-3 pl-10 pr-10 text-xs outline-none focus:border-[#D62828] focus:ring-1 focus:ring-[#D62828]" value="">
                                </div>
                                @error('password')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-[#D62828] py-3.5 text-xs font-bold text-white shadow transition hover:bg-[#b91e26] active:scale-[0.99]">
                                Buat Akun
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg>
                            </button>
                        </form>
                        
                        <div class="mt-6 text-center text-xs text-[#62758A]">
                            Sudah punya akun? <a href="/login" class="font-bold text-[#D62828] hover:underline ml-1">Masuk sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="mt-10 text-center text-[11px] text-[#8192A3] lg:hidden">
                    © 2026 Yayasan Bakti Merah Putih · Humanitarian Editorial
                </div>
            </section>
        </main>
    </div>
</body>
</html>
