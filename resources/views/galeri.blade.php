<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <title>Galeri - Bakti Merah Putih</title>

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
        .css-uwf2km {position: relative; flex: 1 0 0; display: block;}
        .css-fou3uo {min-height: 1px; width: 100%; height: 100dvh;}
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
                            <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-14 w-auto object-contain transition-opacity duration-300">
                        </a>
                        <nav class="hidden xl:flex items-center gap-0.5">
                            <button onclick="window.location.href='/'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Beranda
                            </button>
                            <button onclick="window.location.href='/tentang-kami'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Tentang Kami
                            </button>
                            <button onclick="window.location.href='/program'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Program
                            </button>
                            <button onclick="window.location.href='/donasi'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Donasi
                            </button>
                            <button onclick="window.location.href='/laporan'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Laporan
                            </button>
                            <button onclick="window.location.href='/artikel'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Artikel
                            </button>
                            <button class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#D62828] text-white/80 hover:text-white">
                                Galeri
                                <span class="absolute left-1/2 -translate-x-1/2 -bottom-0.5 w-1.5 h-1.5 rounded-full bg-[#D62828]"></span>
                            </button>
                            <button onclick="window.location.href='/relawan'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Relawan</button>
                            <button onclick="window.location.href='/kontak'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Kontak</button>
                        </nav>
                        <div class="flex items-center gap-3">
                            <button class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-[#D62828] text-white rounded-full text-[13px] font-bold hover:bg-[#B91C1C] transition-all duration-200 shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)] hover:shadow-[0_10px_26px_-8px_rgba(214,40,40,0.85)] hover:-translate-y-0.5" onclick="window.location.href='/login'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in w-4 h-4 shrink-0"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
                                Daftar Sekarang
                            </button>
                            <button onclick="window.location.href='/donasi'" class="xl:hidden p-2.5 rounded-xl hover:bg-black/5 transition-colors" style="color: white;">
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
                            <h1 class="text-4xl md:text-5xl font-extrabold mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">Galeri Kegiatan</h1>
                            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed">Jejak langkah kebaikan dan potret senyum kebahagiaan dari mereka yang telah menerima manfaat dari donasi Anda.</p>
                        </div>
                    </div>

                    <!-- Content Layout -->
                    <div class="max-w-[1280px] mx-auto px-6 -mt-20 relative z-20 pb-24">
                        
                        <!-- Filter/Categories -->
                        <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
                            <button data-filter="semua" class="filter-btn active px-6 py-2.5 rounded-full bg-[#D62828] text-white font-bold text-sm shadow-md transition-all">Semua</button>
                            <button data-filter="pendidikan" class="filter-btn px-6 py-2.5 rounded-full bg-white text-gray-600 font-semibold text-sm shadow-sm border border-gray-100 hover:border-gray-200 hover:bg-gray-50 transition-all">Pendidikan</button>
                            <button data-filter="kesehatan" class="filter-btn px-6 py-2.5 rounded-full bg-white text-gray-600 font-semibold text-sm shadow-sm border border-gray-100 hover:border-gray-200 hover:bg-gray-50 transition-all">Kesehatan</button>
                            <button data-filter="sosial & kemanusiaan" class="filter-btn px-6 py-2.5 rounded-full bg-white text-gray-600 font-semibold text-sm shadow-sm border border-gray-100 hover:border-gray-200 hover:bg-gray-50 transition-all">Sosial & Kemanusiaan</button>
                            <button data-filter="lingkungan" class="filter-btn px-6 py-2.5 rounded-full bg-white text-gray-600 font-semibold text-sm shadow-sm border border-gray-100 hover:border-gray-200 hover:bg-gray-50 transition-all">Lingkungan</button>
                            <button data-filter="fasilitas ibadah" class="filter-btn px-6 py-2.5 rounded-full bg-white text-gray-600 font-semibold text-sm shadow-sm border border-gray-100 hover:border-gray-200 hover:bg-gray-50 transition-all">Fasilitas Ibadah</button>
                        </div>

                        <!-- Masonry/Grid Gallery -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-16" id="gallery-container">
                            @forelse($galleries as $gallery)
                            <div data-category="{{ strtolower($gallery->category) }}" class="gallery-item group relative rounded-2xl overflow-hidden cursor-pointer h-64 md:h-80 shadow-sm border border-gray-100 transition-all duration-300">
                                <img src="{{ $gallery->image }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $gallery->title }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#12355B]/90 via-[#12355B]/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <span class="text-white text-xs font-bold uppercase tracking-wider mb-2 text-[#D62828]">{{ $gallery->category }}</span>
                                    <h3 class="text-white font-bold text-lg leading-tight mb-2">{{ $gallery->title }}</h3>
                                    @if($gallery->description)
                                    <p class="text-white/80 text-sm line-clamp-2">{{ $gallery->description }}</p>
                                    @endif
                                </div>
                            </div>
                            @empty
                            <div class="col-span-full py-12 text-center">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-700 mb-2 font-heading">Belum ada foto galeri</h3>
                                <p class="text-gray-500 max-w-md mx-auto">Nantikan pembaruan dokumentasi kegiatan kami di sini.</p>
                            </div>
                            @endforelse

                        </div>



                    </div>
                </main>

                <footer class="relative bg-[#0D1F35] text-white pt-16 pb-8 overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-[3px]" style="background: linear-gradient(90deg, rgb(214, 40, 40), rgb(214, 40, 40) 50%, rgb(255, 255, 255) 50%);"></div>
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-12 pb-12 border-b border-white/[0.08]">
                            <div>
                                <div class="mb-5">
                                    <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-14 w-auto object-contain">
                                </div>
                                <p class="text-white/50 text-[13px] leading-relaxed mb-6">Bergerak bersama untuk Indonesia yang lebih baik. Sejak 2015, kami telah menyentuh jutaan kehidupan di 28 provinsi.</p>
                                <div class="flex items-center gap-2.5">
                                    <a href="https://www.facebook.com/BaktiMerahPutih/" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-4 h-4"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                                    <a href="https://www.instagram.com/baktimerahputih?stkn=d3JqeTlka2FzNnFv" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-4 h-4"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                                    <button class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-4 h-4"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></button>
                                    <a href="https://youtube.com/@yayasanbaktimerahputih?si=2HPfET3fJpl2I-t2" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-4 h-4"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></a>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Navigasi</h4>
                                <ul class="space-y-3">
                                    <li><a href="#" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Beranda</a></li>
                                    <li><a href="/tentang-kami" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Tentang Kami</a></li>
                                    <li><a href="#" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Program</a></li>
                                    <li><a href="#" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Donasi</a></li>
                                    <li><a href="/laporan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Laporan &amp; Keuangan</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Program</h4>
                                <ul class="space-y-3">
                                    <li><a href="/program/bakti-guru" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Guru</a></li>
                                    <li><a href="/program/bakti-pendidikan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Pendidikan</a></li>
                                    <li><a href="/program/bakti-lingkungan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Lingkungan</a></li>
                                    <li><a href="/program/bakti-kesehatan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Kesehatan</a></li>
                                    <li><a href="/program/bakti-pangan-gizi" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Pangan &amp; Gizi</a></li>
                                    <li><a href="/program/bakti-bencana" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Bencana</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Kontak</h4>
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3 text-white/55 text-[13px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4 shrink-0 mt-0.5 text-white/30"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        <a href="https://maps.app.goo.gl/UVL5JZcLoiSfMHMb6" target="_blank" class="hover:text-white transition-colors">Jl. RS. Fatmawati Raya No.28 AA 1, RT.1/RW.5, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12420</a>
                                    </li>
                                    <li class="flex items-center gap-3 text-white/55 text-[13px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 text-white/30"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        0856-104-2026
                                    </li>
                                    <li class="flex items-center gap-3 text-white/55 text-[13px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-white/30"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                                        info@baktimerahputih.org
                                    </li>
                                </ul>
                                <button class="mt-6 inline-flex items-center gap-2 px-4 py-2.5 bg-white/[0.08] hover:bg-white/[0.14] border border-white/10 rounded-full text-[13px] font-semibold transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-4 h-4 text-white/60"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
                                    <span class="text-white/70">Unduh Laporan 2025</span>
                                </button>
                            </div>
                        </div>
                        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <p class="text-white/30 text-xs">© 2026 Yayasan Bakti Merah Putih. Seluruh hak cipta dilindungi undang-undang.</p>
                            <div class="flex items-center gap-4 text-white/30 text-xs">
                                <span class="flex items-center gap-4"><a href="#" class="hover:text-white/60 transition-colors">Kebijakan Privasi</a><span>·</span></span>
                                <span class="flex items-center gap-4"><a href="#" class="hover:text-white/60 transition-colors">Syarat &amp; Ketentuan</a><span>·</span></span>
                                <span class="flex items-center gap-4"><a href="/laporan" class="hover:text-white/60 transition-colors">Laporan Keuangan</a></span>
                            </div>
                        </div>
                    </div>
                </footer>

                <div class="fixed bottom-6 left-1/2 -translate-x-1/2 z-40 sm:hidden">
                    <button onclick="window.location.href='/login'" class="flex items-center gap-2 px-7 py-4 bg-[#D62828] text-white rounded-full font-extrabold text-sm shadow-[0_18px_40px_-10px_rgba(214,40,40,0.8)] hover:scale-105 transition-transform active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in w-4 h-4"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg> Daftar Sekarang
                    </button>
                </div>
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
                    logo.src = '/images/logo2.png';
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = '#1B1B1B';
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.remove('text-white/80', 'hover:text-white');
                    });
                } else {
                    header.classList.add('bg-transparent');
                    header.classList.remove('bg-white', 'shadow-sm');
                    logo.src = '/images/logo.png';
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = 'white';
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.add('text-white/80', 'hover:text-white');
                    });
                }
            });
        });

        // Gallery Filter
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Reset all buttons to inactive state
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-[#D62828]', 'text-white', 'shadow-md', 'active');
                        b.classList.add('bg-white', 'text-gray-600', 'shadow-sm', 'border', 'border-gray-100');
                    });
                    
                    // Set clicked button to active state
                    btn.classList.add('bg-[#D62828]', 'text-white', 'shadow-md', 'active');
                    btn.classList.remove('bg-white', 'text-gray-600', 'shadow-sm', 'border', 'border-gray-100');

                    const filterValue = btn.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filterValue === 'semua' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            // Quick reflow
                            void item.offsetWidth;
                            item.style.opacity = '1';
                        } else {
                            item.style.display = 'none';
                            item.style.opacity = '0';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>
