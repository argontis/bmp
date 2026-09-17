<?php

$content = <<<'HTML'
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <title>Laporan Tahunan - Bakti Merah Putih</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN for rapid prototyping) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D62828',
                        secondary: '#12355B'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        .css-uwf2km {position: relative; flex: 1 0 0; display: flex; flex-direction: column;}
        .css-fou3uo {min-height: 100vh; width: 100%;}
    </style>
</head>
<body>
    <div id="container">
        <div class="css-uwf2km css-fou3uo tailwind">
            <div class="min-h-screen bg-[#FBFAF7] text-[#1B1B1B] antialiased selection:bg-[#D62828] selection:text-white" style="font-family: Inter, sans-serif;">
                
                <header class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-transparent" style="height: 88px;">
                    <div class="absolute top-0 inset-x-0 h-[3px] transition-opacity duration-300 opacity-100" style="background: linear-gradient(90deg, rgb(214, 40, 40), rgb(214, 40, 40) 50%, rgb(255, 255, 255) 50%);"></div>
                    <div class="max-w-[1280px] mx-auto px-6 h-full flex items-center justify-between gap-6">
                        <a href="#" class="shrink-0 block">
                            <img src="/images/logo.webp" alt="Bakti Merah Putih" class="h-14 w-auto object-contain transition-opacity duration-300">
                        </a>
                        <nav class="hidden xl:flex items-center gap-0.5">
                            <button onclick="window.location.href='/'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Beranda</button>
                            <button onclick="window.location.href='/tentang-kami'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Tentang Kami</button>
                            <button onclick="window.location.href='/program'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Program</button>
                            <button onclick="window.location.href='/donasi'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Donasi</button>
                            <button class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#D62828] text-white/80 hover:text-white">
                                Laporan
                                <span class="absolute left-1/2 -translate-x-1/2 -bottom-0.5 w-1.5 h-1.5 rounded-full bg-[#D62828]"></span>
                            </button>
                            <button onclick="window.location.href='/artikel'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Artikel</button>
                            <button onclick="window.location.href='/galeri'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Galeri</button>
                            <button onclick="window.location.href='/relawan'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Relawan</button>
                            <button onclick="window.location.href='/kontak'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Kontak</button>
                        </nav>
                        <div class="flex items-center gap-3">
                            @if(auth()->check())
                            <button class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-[#12355B] text-white rounded-full text-[13px] font-bold hover:bg-[#0a2342] transition-all duration-200" onclick="window.location.href='/dashboard'">
                                Dashboard
                            </button>
                            @else
                            <button class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-[#D62828] text-white rounded-full text-[13px] font-bold hover:bg-[#B91C1C] transition-all duration-200 shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)]" onclick="window.location.href='/login'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in w-4 h-4 shrink-0"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
                                Daftar Sekarang
                            </button>
                            @endif
                            <button class="xl:hidden p-2.5 rounded-xl hover:bg-black/5 transition-colors" style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-5 h-5"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                </header>

                <main class="min-h-screen bg-[#FBFAF7]">
                    <!-- Page Header -->
                    <div class="bg-[#12355B] text-white pt-[140px] pb-32 relative overflow-hidden">
                        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
                        <div class="max-w-[1280px] mx-auto px-6 relative z-10 text-center">
                            <h1 class="text-4xl md:text-5xl font-extrabold mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">Laporan & Transparansi</h1>
                            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed">Komitmen kami dalam menyajikan data donasi secara terbuka, sebagai wujud tanggung jawab atas amanah Anda.</p>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="max-w-[1280px] mx-auto px-6 -mt-20 relative z-20 pb-24">
                        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 md:p-12">
                            <form action="{{ route('laporan') }}" method="GET" class="mb-10 max-w-sm mx-auto text-center">
                                <label class="block text-sm font-bold text-gray-500 mb-3">Pilih Tahun Laporan</label>
                                <div class="relative">
                                    <select name="year" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-5 py-4 text-base font-bold text-[#1B1B1B] focus:outline-none focus:ring-2 focus:ring-[#D62828] appearance-none cursor-pointer" onchange="this.form.submit()">
                                        @php
                                            $currentYear = date('Y');
                                            $startYear = 2024;
                                        @endphp
                                        @for($y = $currentYear; $y >= $startYear; $y--)
                                            <option value="{{ $y }}" {{ $year == $y ? 'selected' : '' }}>Laporan Tahun {{ $y }}</option>
                                        @endfor
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5 pointer-events-none text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down"><path d="m6 9 6 6 6-6"/></svg>
                                    </div>
                                </div>
                            </form>

                            @if(auth()->check())
                            <!-- Personal Report -->
                            <div class="mb-16">
                                <div class="text-center mb-8">
                                    <h2 class="text-2xl font-extrabold text-[#1B1B1B] mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Jejak Kebaikan Anda di {{ $year }}</h2>
                                    <p class="text-gray-500">Terima kasih atas dedikasi dan kontribusi nyata Anda.</p>
                                </div>
                                
                                <div class="bg-gradient-to-br from-[#12355B] to-[#1a4a7f] rounded-[32px] p-8 md:p-12 text-white shadow-lg relative overflow-hidden max-w-4xl mx-auto">
                                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-20 -mt-20"></div>
                                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-[#D62828]/20 rounded-full blur-2xl -ml-10 -mb-10"></div>
                                    
                                    <div class="grid md:grid-cols-2 gap-10 relative z-10 items-center">
                                        <div>
                                            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 mb-6 text-sm font-semibold">
                                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                                Donatur Terverifikasi
                                            </div>
                                            <p class="text-blue-100 font-medium mb-2">Total Donasi Anda</p>
                                            <h3 class="text-4xl md:text-5xl font-extrabold font-heading text-white">Rp {{ number_format($userNominal, 0, ',', '.') }}</h3>
                                        </div>
                                        
                                        <div class="grid grid-cols-2 gap-4">
                                            <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm border border-white/10">
                                                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mb-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M12 2v20"></path><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <p class="text-sm text-blue-100 font-medium mb-1">Frekuensi Donasi</p>
                                                <p class="text-2xl font-bold">{{ $userDonations }} Kali</p>
                                            </div>
                                            <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm border border-white/10">
                                                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center mb-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                </div>
                                                <p class="text-sm text-blue-100 font-medium mb-1">Aksi Relawan</p>
                                                <p class="text-2xl font-bold">{{ $userVolunteered }} Kegiatan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            <!-- Global Report -->
                            <div class="text-center mb-10">
                                <h2 class="text-2xl font-extrabold text-[#1B1B1B] mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dampak Bersama di Tahun {{ $year }}</h2>
                                <p class="text-gray-500">Pencapaian luar biasa yang berhasil kita wujudkan melalui semangat gotong royong.</p>
                            </div>
                            
                            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div class="bg-emerald-50/50 rounded-[24px] p-8 border border-emerald-100 text-center hover:-translate-y-1 transition-transform duration-300">
                                    <div class="w-16 h-16 mx-auto rounded-2xl bg-emerald-100 flex items-center justify-center text-emerald-600 mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>
                                    <p class="text-sm font-bold uppercase tracking-wider text-emerald-600/70 mb-2">Total Tersalurkan</p>
                                    <p class="text-2xl font-extrabold text-[#1B1B1B] font-['Plus_Jakarta_Sans']">Rp {{ number_format($globalNominal, 0, ',', '.') }}</p>
                                </div>
                                
                                <div class="bg-blue-50/50 rounded-[24px] p-8 border border-blue-100 text-center hover:-translate-y-1 transition-transform duration-300">
                                    <div class="w-16 h-16 mx-auto rounded-2xl bg-blue-100 flex items-center justify-center text-blue-600 mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <p class="text-sm font-bold uppercase tracking-wider text-blue-600/70 mb-2">Total Donasi</p>
                                    <p class="text-2xl font-extrabold text-[#1B1B1B] font-['Plus_Jakarta_Sans']">{{ number_format($globalDonations, 0, ',', '.') }} Trx</p>
                                </div>
                                
                                <div class="bg-amber-50/50 rounded-[24px] p-8 border border-amber-100 text-center hover:-translate-y-1 transition-transform duration-300">
                                    <div class="w-16 h-16 mx-auto rounded-2xl bg-amber-100 flex items-center justify-center text-amber-600 mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><line x1="19" y1="8" x2="19" y2="14"></line><line x1="22" y1="11" x2="16" y2="11"></line></svg>
                                    </div>
                                    <p class="text-sm font-bold uppercase tracking-wider text-amber-600/70 mb-2">Relawan Aktif</p>
                                    <p class="text-2xl font-extrabold text-[#1B1B1B] font-['Plus_Jakarta_Sans']">{{ number_format($globalVolunteers, 0, ',', '.') }} Orang</p>
                                </div>
                                
                                <div class="bg-purple-50/50 rounded-[24px] p-8 border border-purple-100 text-center hover:-translate-y-1 transition-transform duration-300">
                                    <div class="w-16 h-16 mx-auto rounded-2xl bg-purple-100 flex items-center justify-center text-purple-600 mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    </div>
                                    <p class="text-sm font-bold uppercase tracking-wider text-purple-600/70 mb-2">Kegiatan Berjalan</p>
                                    <p class="text-2xl font-extrabold text-[#1B1B1B] font-['Plus_Jakarta_Sans']">{{ number_format($globalCampaigns, 0, ',', '.') }} Program</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="relative bg-[#0D1F35] text-white pt-16 pb-8 overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-[3px]" style="background: linear-gradient(90deg, rgb(214, 40, 40), rgb(214, 40, 40) 50%, rgb(255, 255, 255) 50%);"></div>
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-12 pb-12 border-b border-white/[0.08]">
                            <div>
                                <div class="mb-5">
                                    <img src="/images/logo.webp" alt="Bakti Merah Putih" class="h-14 w-auto object-contain">
                                </div>
                                <p class="text-white/50 text-[13px] leading-relaxed mb-6">Bergerak bersama untuk Indonesia yang lebih baik. Sejak 2015, kami telah menyentuh jutaan kehidupan di 28 provinsi.</p>
                                <div class="flex items-center gap-2.5">
                                    <a href="https://www.facebook.com/BaktiMerahPutih/" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-4 h-4"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                                    <a href="https://www.instagram.com/baktimerahputih?stkn=d3JqeTlka2FzNnFv" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-4 h-4"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Navigasi</h4>
                                <ul class="space-y-3">
                                    <li><a href="/" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg> Beranda</a></li>
                                    <li><a href="/tentang-kami" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg> Tentang Kami</a></li>
                                    <li><a href="/laporan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg> Laporan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>

                @if(!auth()->check())
                <div class="fixed bottom-6 left-1/2 -translate-x-1/2 z-40 sm:hidden">
                    <button onclick="window.location.href='/login'" class="flex items-center gap-2 px-7 py-4 bg-[#D62828] text-white rounded-full font-extrabold text-sm shadow-[0_18px_40px_-10px_rgba(214,40,40,0.8)] hover:scale-105 transition-transform active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in w-4 h-4"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg> Daftar Sekarang
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('header');
            const logo = document.querySelector('header img');
            const navLinks = document.querySelectorAll('header nav button');
            const mobileMenuBtn = document.querySelector('header .xl\\:hidden');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 20) {
                    header.classList.remove('bg-transparent');
                    header.classList.add('bg-white', 'shadow-sm');
                    logo.src = '/images/logo2.webp';
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = '#1B1B1B';
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.remove('text-white/80', 'hover:text-white');
                    });
                } else {
                    header.classList.add('bg-transparent');
                    header.classList.remove('bg-white', 'shadow-sm');
                    logo.src = '/images/logo.webp';
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = 'white';
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.add('text-white/80', 'hover:text-white');
                    });
                }
            });
        });
    </script>
</body>
</html>
HTML;
file_put_contents('/home/argontis/utama/bmp/resources/views/laporan.blade.php', $content);
echo 'Laporan view fixed!';
