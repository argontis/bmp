<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <title>Bakti Merah Putih</title>

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
                            <button onclick="window.location.href='/donasi'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#D62828] text-white/80 hover:text-white">
                                Beranda
                                <span class="absolute left-1/2 -translate-x-1/2 -bottom-0.5 w-1.5 h-1.5 rounded-full bg-[#D62828]" style="transform: none; transform-origin: 50% 50% 0px; opacity: 1;"></span>
                            </button>
                            <button onclick="window.location.href='/tentang-kami'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-white/80 hover:text-white">Tentang Kami</button>
                            <button onclick="window.location.href='/program'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-white/80 hover:text-white">Program</button>
                            <button onclick="window.location.href='/donasi'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-white/80 hover:text-white">Donasi</button>
                            <button onclick="window.location.href='/laporan'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Laporan</button>
                            <button onclick="window.location.href='/artikel'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Artikel</button>
                            <button onclick="window.location.href='/galeri'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Galeri</button>
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

                <section class="relative overflow-hidden flex items-center min-h-screen lg:min-h-[max(100vh,760px)] pt-20 lg:pt-0">
                    <div class="absolute inset-0 bg-[#0a1f3a]">
                        <img src="/images/hero1.webp" alt="Bakti Merah Putih Hero 1" class="hero-bg-slide absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="opacity: 0.62;">
                        <img src="/images/hero2.webp" alt="Bakti Merah Putih Hero 2" class="hero-bg-slide absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="opacity: 0;">
                        <img src="/images/hero3.webp" alt="Bakti Merah Putih Hero 3" class="hero-bg-slide absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-1000" style="opacity: 0;">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#0D2137] via-[#0D2137]/85 to-[#0D2137]/25"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0D2137] via-transparent to-[#0D2137]/40"></div>
                        <div class="absolute inset-0 opacity-[0.05] pointer-events-none" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 22px 22px;"></div>
                        <div class="absolute bottom-8 right-8 flex items-center gap-2 z-10">
                            <button class="hero-indicator rounded-full transition-all duration-300 w-7 h-2 bg-white"></button>
                            <button class="hero-indicator rounded-full transition-all duration-300 w-2 h-2 bg-white/40 hover:bg-white/70"></button>
                            <button class="hero-indicator rounded-full transition-all duration-300 w-2 h-2 bg-white/40 hover:bg-white/70"></button>
                        </div>
                    </div>
                    <div class="relative max-w-[1280px] mx-auto px-6 w-full pt-28 pb-24">
                        <div class="grid lg:grid-cols-[1fr_380px] gap-16 items-center">
                            <div>
                                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-white/20 bg-white/[0.08] backdrop-blur-md text-white/90 text-[13px] font-semibold mb-8" style="opacity: 1; transform: none;">
                                    <div class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></div>
                                    Yayasan Sosial &amp; Kemanusiaan — Est. 2015
                                </div>
                                <h1 class="text-5xl md:text-6xl xl:text-[76px] font-extrabold text-white leading-[1.03] tracking-[-0.02em] mb-7" style="font-family: 'Plus Jakarta Sans', sans-serif; opacity: 1; transform: none;">
                                    Bersama Menebar<br>
                                    <span class="relative inline-block text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-rose-300">
                                        Kebaikan
                                        <svg class="absolute -bottom-2 left-0 w-full" height="10" viewBox="0 0 200 10" preserveAspectRatio="none"><path d="M2 7 Q 60 2 100 6 T 198 5" stroke="#D62828" stroke-width="3" fill="none" stroke-linecap="round" opacity="0.8"></path></svg>
                                    </span> 
                                    untuk<br>Indonesia.
                                </h1>
                                <p class="text-white/75 text-lg leading-relaxed max-w-xl mb-10" style="opacity: 1; transform: none;">
                                    Bakti Merah Putih bergerak di bidang pendidikan, kesehatan, lingkungan, dan kemanusiaan untuk menghadirkan perubahan nyata bagi jutaan masyarakat di seluruh pelosok Indonesia.
                                </p>
                                <div class="flex flex-wrap gap-4" style="opacity: 1; transform: none;">
                                    <button onclick="window.location.href='/donasi'" class="group inline-flex items-center gap-2.5 px-8 py-4 bg-[#D62828] text-white rounded-full font-extrabold text-[15px] hover:bg-[#B91C1C] transition-all shadow-[0_18px_40px_-12px_rgba(214,40,40,0.8)] hover:-translate-y-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-4 h-4 fill-white"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg> 
                                        Donasi Sekarang
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4 group-hover:translate-x-1 transition-transform"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                                    </button>
                                    <button onclick="window.location.href='/program'" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 backdrop-blur-md border border-white/25 text-white rounded-full font-bold text-[15px] hover:bg-white/20 transition-all">
                                        Lihat Program 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                                    </button>
                                </div>
                                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 mt-10" style="opacity: 1;">
                                    <span class="flex items-center gap-1.5 text-white/60 text-xs font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 text-emerald-400"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> 
                                        Terverifikasi Kemenkumham
                                    </span>
                                    <span class="flex items-center gap-1.5 text-white/60 text-xs font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 text-emerald-400"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> 
                                        Laporan Audit Terbuka
                                    </span>
                                    <span class="flex items-center gap-1.5 text-white/60 text-xs font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 text-emerald-400"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> 
                                        Donasi Real-time
                                    </span>
                                </div>
                            </div>
                            <div class="block w-full mt-12 lg:mt-0" style="opacity: 1; transform: none;">
                                <div class="rounded-[28px] p-7 border border-white/15 shadow-[0_30px_60px_-20px_rgba(0,0,0,0.5)]" style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(24px);">
                                    <div class="flex items-center gap-2 mb-6">
                                        <div class="w-7 h-7 rounded-lg bg-amber-400/20 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-amber-400 fill-amber-400"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                                        </div>
                                        <span class="text-white font-bold text-sm" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dampak Kebaikan Kita</span>
                                    </div>
                                    <div class="space-y-3">
                                        <div class="flex items-center gap-4 rounded-2xl p-2 -mx-2 hover:bg-white/5 transition-colors">
                                            <div class="w-11 h-11 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: rgba(214, 40, 40, 0.12);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet w-5 h-5" style="color: rgb(214, 40, 40);"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg>
                                            </div>
                                            <div>
                                                <div class="text-white font-extrabold text-lg lg:text-xl leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Rp 12,85 M</div>
                                                <div class="text-white/55 text-xs font-medium">Total Donasi</div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-4 rounded-2xl p-2 -mx-2 hover:bg-white/5 transition-colors">
                                            <div class="w-11 h-11 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: rgba(37, 99, 235, 0.14);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-5 h-5" style="color: rgb(37, 99, 235);"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                            </div>
                                            <div>
                                                <div class="text-white font-extrabold text-lg lg:text-xl leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">12.500+</div>
                                                <div class="text-white/55 text-xs font-medium">Penerima Manfaat</div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-4 rounded-2xl p-2 -mx-2 hover:bg-white/5 transition-colors">
                                            <div class="w-11 h-11 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: rgba(22, 163, 74, 0.14);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-5 h-5" style="color: rgb(22, 163, 74);"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                                            </div>
                                            <div>
                                                <div class="text-white font-extrabold text-lg lg:text-xl leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">78</div>
                                                <div class="text-white/55 text-xs font-medium">Program Aktif</div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-4 rounded-2xl p-2 -mx-2 hover:bg-white/5 transition-colors">
                                            <div class="w-11 h-11 rounded-2xl flex items-center justify-center flex-shrink-0" style="background: rgba(245, 158, 11, 0.16);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-heart w-5 h-5" style="color: rgb(245, 158, 11);"><path d="M11 14h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 16"></path><path d="m7 20 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"></path><path d="m2 15 6 6"></path><path d="M19.5 8.5c.7-.7 1.5-1.6 1.5-2.7A2.73 2.73 0 0 0 16 4a2.78 2.78 0 0 0-5 1.8c0 1.2.8 2 1.5 2.8L16 12Z"></path></svg>
                                            </div>
                                            <div>
                                                <div class="text-white font-extrabold text-lg lg:text-xl leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">5.000+</div>
                                                <div class="text-white/55 text-xs font-medium">Donatur Setia</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-6 h-px bg-white/10"></div>
                                    <div class="bg-white/[0.07] rounded-2xl p-4 border border-white/10">
                                        <p class="text-emerald-400 text-[11px] mb-1.5 font-bold flex items-center gap-1.5">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span> Update terbaru
                                        </p>
                                        <p class="text-white text-sm font-semibold leading-snug">"Relawan kami baru saja menyelesaikan distribusi ke 120 keluarga terdampak banjir di Kalimantan Selatan."</p>
                                        <p class="text-white/45 text-[11px] mt-2">— 2 jam lalu · Tim Lapangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="relative bg-[#FBFAF7] py-16">
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="rounded-[28px] bg-white ring-1 ring-black/[0.05] shadow-[0_20px_50px_-30px_rgba(13,33,55,0.35)] overflow-hidden">
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 divide-x divide-y lg:divide-y-0 divide-black/[0.06]">
                                <div class="flex flex-col items-center text-center px-6 py-8 group hover:bg-[#FBFAF7] transition-colors" style="opacity: 1; transform: none;">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" style="background: rgb(254, 242, 242);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-6 h-6" style="color: rgb(214, 40, 40);"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <div class="text-[30px] font-extrabold text-[#12355B] leading-none mb-1.5" style="font-family: 'Plus Jakarta Sans', sans-serif;">12.500+</div>
                                    <div class="text-xs text-[#8A8A8A] font-semibold">Penerima Manfaat</div>
                                </div>
                                <div class="flex flex-col items-center text-center px-6 py-8 group hover:bg-[#FBFAF7] transition-colors" style="opacity: 1; transform: none;">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" style="background: rgb(239, 246, 255);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-6 h-6" style="color: rgb(29, 78, 216);"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                                    </div>
                                    <div class="text-[30px] font-extrabold text-[#12355B] leading-none mb-1.5" style="font-family: 'Plus Jakarta Sans', sans-serif;">350+</div>
                                    <div class="text-xs text-[#8A8A8A] font-semibold">Program Sosial</div>
                                </div>
                                <div class="flex flex-col items-center text-center px-6 py-8 group hover:bg-[#FBFAF7] transition-colors" style="opacity: 1; transform: none;">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" style="background: rgb(240, 253, 244);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-6 h-6" style="color: rgb(22, 163, 74);"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                    <div class="text-[30px] font-extrabold text-[#12355B] leading-none mb-1.5" style="font-family: 'Plus Jakarta Sans', sans-serif;">28</div>
                                    <div class="text-xs text-[#8A8A8A] font-semibold whitespace-nowrap lg:whitespace-normal">Provinsi</div>
                                </div>
                                <div class="flex flex-col items-center text-center px-6 py-8 group hover:bg-[#FBFAF7] transition-colors" style="opacity: 1; transform: none;">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" style="background: rgb(254, 242, 242);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-6 h-6" style="color: rgb(214, 40, 40);"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                                    </div>
                                    <div class="text-[30px] font-extrabold text-[#12355B] leading-none mb-1.5" style="font-family: 'Plus Jakarta Sans', sans-serif;">5.000+</div>
                                    <div class="text-xs text-[#8A8A8A] font-semibold">Donatur</div>
                                </div>
                                <div class="flex flex-col items-center text-center px-6 py-8 group hover:bg-[#FBFAF7] transition-colors" style="opacity: 1; transform: none;">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-300" style="background: rgb(255, 251, 235);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-6 h-6" style="color: rgb(217, 119, 6);"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <div class="text-[30px] font-extrabold text-[#12355B] leading-none mb-1.5" style="font-family: 'Plus Jakarta Sans', sans-serif;">700+</div>
                                    <div class="text-xs text-[#8A8A8A] font-semibold">Relawan Aktif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-[#FBFAF7] py-24">
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="flex items-end justify-between mb-12">
                            <div>
                                <span class="inline-flex items-center gap-2.5 mb-5 ">
                                    <span class="h-px w-7" style="background: rgb(214, 40, 40);"></span>
                                    <span class="text-[11px] font-extrabold tracking-[0.22em] uppercase" style="color: rgb(214, 40, 40);">Program Kami</span>
                                </span>
                                <h2 class="text-4xl lg:text-[52px] font-extrabold text-[#12355B] leading-[1.05] tracking-[-0.02em]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bersama Hadirkan<br>Perubahan Nyata</h2>
                            </div>
                            <button onclick="window.location.href='/program'" class="hidden md:inline-flex items-center gap-2 px-5 py-3 border border-[#12355B]/20 text-[#12355B] rounded-full text-[13px] font-bold hover:bg-[#12355B] hover:text-white hover:border-[#12355B] transition-all duration-200">
                                Lihat Semua Program <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                            </button>
                        </div>
                        <div class="mb-8 flex flex-col md:flex-row gap-4 justify-between items-center">
                            <div class="w-full md:w-1/3 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-4 top-1/2 -translate-y-1/2 text-[#8192A3]">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                                <input type="text" id="welcomeSearchInput" placeholder="Cari program donasi..." class="w-full rounded-2xl border border-[#12355B]/15 bg-white py-3 pl-11 pr-4 text-sm outline-none focus:border-[#D62828] focus:ring-1 focus:ring-[#D62828] shadow-sm">
                            </div>
                            <div class="flex flex-wrap gap-2 justify-center">
                                <button id="welcomeAllBtn" data-category="all" class="px-4 py-2 rounded-full text-xs font-bold transition-all bg-[#D62828] text-white border border-[#D62828]">Semua</button>
                                <button data-category="Kesehatan" class="welcome-category-btn px-4 py-2 rounded-full border border-[#12355B]/15 text-[#12355B] text-xs font-bold transition-all hover:bg-[#12355B]/5">Kesehatan</button>
                                <button data-category="Pendidikan" class="welcome-category-btn px-4 py-2 rounded-full border border-[#12355B]/15 text-[#12355B] text-xs font-bold transition-all hover:bg-[#12355B]/5">Pendidikan</button>
                                <button data-category="Sosial & Kemanusiaan" class="welcome-category-btn px-4 py-2 rounded-full border border-[#12355B]/15 text-[#12355B] text-xs font-bold transition-all hover:bg-[#12355B]/5">Sosial & Kemanusiaan</button>
                                <button data-category="Lingkungan" class="welcome-category-btn px-4 py-2 rounded-full border border-[#12355B]/15 text-[#12355B] text-xs font-bold transition-all hover:bg-[#12355B]/5">Lingkungan</button>
                                <button data-category="Fasilitas Ibadah" class="welcome-category-btn px-4 py-2 rounded-full border border-[#12355B]/15 text-[#12355B] text-xs font-bold transition-all hover:bg-[#12355B]/5">Fasilitas Ibadah</button>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" id="programContainer">
                            <div onclick="window.location.href='/program/bakti-guru'" class="group bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.05] hover:ring-black/[0.1] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 cursor-pointer flex flex-col" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1632215861513-130b66fe97f4?w=720&h=480&fit=crop&auto=format" alt="Seorang guru perempuan mendampingi murid-murid sekolah dasar di ruang kelas pedesaan" class="w-full h-full object-cover group-hover:scale-[1.08] transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                                    <div class="absolute top-4 left-4"><span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold backdrop-blur-sm" style="background: rgb(239, 246, 255); color: rgb(29, 78, 216);">Pendidikan</span></div>
                                    <div class="absolute -bottom-5 left-6 w-11 h-11 rounded-2xl bg-white flex items-center justify-center shadow-lg ring-1 ring-black/5" style="color: rgb(29, 78, 216);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open w-5 h-5"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg>
                                    </div>
                                </div>
                                <div class="p-6 pt-8 flex flex-col flex-1">
                                    <h3 class="font-extrabold text-[#12355B] text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bakti Guru</h3>
                                    <p class="text-sm text-[#666] leading-relaxed mb-4 flex-1">Melatih dan mendampingi guru-guru di wilayah 3T agar mampu menghadirkan pendidikan berkualitas bagi generasi penerus bangsa.</p>
                                    <div class="flex items-center justify-between pt-4 border-t border-black/[0.06]">
                                        <span class="text-xs font-bold text-[#8A8A8A]">1.200 guru didampingi</span>
                                        <button class="flex items-center gap-1 text-xs font-bold transition-all duration-200 group-hover:gap-2" style="color: rgb(29, 78, 216);">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5"><path d="m9 18 6-6-6-6"></path></svg></button>
                                    </div>
                                </div>
                            </div>
                            <div onclick="window.location.href='/program/bakti-pendidikan'" class="group bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.05] hover:ring-black/[0.1] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 cursor-pointer flex flex-col" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1636202339022-7d67f7447e3a?w=720&h=480&fit=crop&auto=format" alt="Anak-anak belajar bersama di kelas dengan penuh semangat" class="w-full h-full object-cover group-hover:scale-[1.08] transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                                    <div class="absolute top-4 left-4"><span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold backdrop-blur-sm" style="background: rgb(254, 242, 242); color: rgb(214, 40, 40);">Beasiswa</span></div>
                                    <div class="absolute -bottom-5 left-6 w-11 h-11 rounded-2xl bg-white flex items-center justify-center shadow-lg ring-1 ring-black/5" style="color: rgb(214, 40, 40);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap w-5 h-5"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
                                    </div>
                                </div>
                                <div class="p-6 pt-8 flex flex-col flex-1">
                                    <h3 class="font-extrabold text-[#12355B] text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bakti Pendidikan</h3>
                                    <p class="text-sm text-[#666] leading-relaxed mb-4 flex-1">Memberikan beasiswa penuh dan perlengkapan belajar bagi anak-anak dari keluarga prasejahtera di seluruh kepulauan Indonesia.</p>
                                    <div class="flex items-center justify-between pt-4 border-t border-black/[0.06]">
                                        <span class="text-xs font-bold text-[#8A8A8A]">4.500 beasiswa aktif</span>
                                        <button class="flex items-center gap-1 text-xs font-bold transition-all duration-200 group-hover:gap-2" style="color: rgb(214, 40, 40);">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5"><path d="m9 18 6-6-6-6"></path></svg></button>
                                    </div>
                                </div>
                            </div>
                            <div onclick="window.location.href='/program/bakti-lingkungan'" class="group bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.05] hover:ring-black/[0.1] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 cursor-pointer flex flex-col" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1763856957026-a74ab4f05891?w=720&h=480&fit=crop&auto=format" alt="Tangan menanam bibit pohon kecil di tanah subur sebagai aksi pelestarian lingkungan" class="w-full h-full object-cover group-hover:scale-[1.08] transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                                    <div class="absolute top-4 left-4"><span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold backdrop-blur-sm" style="background: rgb(240, 253, 244); color: rgb(22, 163, 74);">Lingkungan</span></div>
                                    <div class="absolute -bottom-5 left-6 w-11 h-11 rounded-2xl bg-white flex items-center justify-center shadow-lg ring-1 ring-black/5" style="color: rgb(22, 163, 74);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-leaf w-5 h-5"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path></svg>
                                    </div>
                                </div>
                                <div class="p-6 pt-8 flex flex-col flex-1">
                                    <h3 class="font-extrabold text-[#12355B] text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bakti Lingkungan</h3>
                                    <p class="text-sm text-[#666] leading-relaxed mb-4 flex-1">Penanaman pohon, pengelolaan sampah komunitas, dan edukasi lingkungan hidup untuk menjaga keasrian alam Indonesia.</p>
                                    <div class="flex items-center justify-between pt-4 border-t border-black/[0.06]">
                                        <span class="text-xs font-bold text-[#8A8A8A]">180.000 pohon ditanam</span>
                                        <button class="flex items-center gap-1 text-xs font-bold transition-all duration-200 group-hover:gap-2" style="color: rgb(22, 163, 74);">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5"><path d="m9 18 6-6-6-6"></path></svg></button>
                                    </div>
                                </div>
                            </div>
                            <div onclick="window.location.href='/program/bakti-kesehatan'" class="group bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.05] hover:ring-black/[0.1] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 cursor-pointer flex flex-col" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1621353880071-4752fa42cbc7?w=720&h=480&fit=crop&auto=format" alt="Tenaga medis sukarela memberikan layanan kesehatan gratis kepada warga pedesaan" class="w-full h-full object-cover group-hover:scale-[1.08] transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                                    <div class="absolute top-4 left-4"><span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold backdrop-blur-sm" style="background: rgb(255, 251, 235); color: rgb(217, 119, 6);">Kesehatan</span></div>
                                    <div class="absolute -bottom-5 left-6 w-11 h-11 rounded-2xl bg-white flex items-center justify-center shadow-lg ring-1 ring-black/5" style="color: rgb(217, 119, 6);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope w-5 h-5"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg>
                                    </div>
                                </div>
                                <div class="p-6 pt-8 flex flex-col flex-1">
                                    <h3 class="font-extrabold text-[#12355B] text-lg mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bakti Kesehatan</h3>
                                    <p class="text-sm text-[#666] leading-relaxed mb-4 flex-1">Klinik keliling, pemeriksaan gratis, dan penyuluhan gizi bagi masyarakat terpencil yang jauh dari fasilitas layanan kesehatan.</p>
                                    <div class="flex items-center justify-between pt-4 border-t border-black/[0.06]">
                                        <span class="text-xs font-bold text-[#8A8A8A]">38.000 pasien dilayani</span>
                                        <button class="flex items-center gap-1 text-xs font-bold transition-all duration-200 group-hover:gap-2" style="color: rgb(217, 119, 6);">Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5"><path d="m9 18 6-6-6-6"></path></svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="relative bg-white py-24 overflow-hidden">
                    <div class="absolute top-24 -left-20 w-80 h-80 rounded-full bg-red-100/40 blur-3xl pointer-events-none"></div>
                    <div class="absolute bottom-10 -right-24 w-96 h-96 rounded-full bg-blue-100/40 blur-3xl pointer-events-none"></div>
                    <div class="relative max-w-[1280px] mx-auto px-6">
                        <div class="text-center mb-14 flex flex-col items-center">
                            <span class="inline-flex items-center gap-2.5 mb-5 justify-center">
                                <span class="h-px w-7" style="background: rgb(214, 40, 40);"></span>
                                <span class="text-[11px] font-extrabold tracking-[0.22em] uppercase" style="color: rgb(214, 40, 40);">Donasi Terbuka</span>
                            </span>
                            <h2 class="text-4xl lg:text-[52px] font-extrabold text-[#12355B] tracking-[-0.02em]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Program Terbaru</h2>
                            <p class="text-[#888] mt-3 text-base max-w-lg mx-auto">Pilih program yang menyentuh hati Anda. Setiap donasi tercatat transparan.</p>
                        </div>
                        <div class="grid md:grid-cols-3 gap-6">
                            @forelse($campaigns as $campaign)
                            @php
                                $terkumpul = $campaign->donations->where('status', 'Berhasil')->sum('amount');
                                $target = $campaign->nominal;
                                $persentase = $target > 0 ? min(100, round(($terkumpul / $target) * 100)) : 0;
                                $donatur = $campaign->donations->where('status', 'Berhasil')->count();
                            @endphp
                            <div class="bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.06] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 flex flex-col" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden group">
                                    <img src="{{ asset($campaign->image) }}" alt="{{ $campaign->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/5 to-transparent"></div>
                                    <div class="absolute top-4 left-4 flex items-center gap-2">
                                        <span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold backdrop-blur-sm" style="background: rgb(239, 246, 255); color: rgb(29, 78, 216);">{{ $campaign->category ?? 'Program Sosial' }}</span>
                                        @if($campaign->label)
                                        <span class="px-2.5 py-1 rounded-full text-[10px] font-extrabold bg-amber-400 text-white flex items-center gap-1 animate-pulse">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert w-2.5 h-2.5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg> {{ $campaign->label }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col flex-1">
                                    <h3 class="font-extrabold text-[#12355B] text-[15px] leading-snug mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">{{ Str::limit($campaign->name, 60) }}</h3>
                                    @if(!empty($campaign->activity_date))
                                    <div class="mb-4 flex items-center gap-1.5 text-xs font-semibold text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                                        {{ \Carbon\Carbon::parse($campaign->activity_date)->translatedFormat('d F Y') }}
                                    </div>
                                    @endif
                                    <div class="mt-auto space-y-3">
                                        <div class="flex items-center justify-between text-xs text-[#888] mb-1">
                                            <span>Terkumpul <strong class="text-[#D62828]">{{ $persentase }}%</strong></span>
                                            <span>{{ number_format($donatur, 0, ',', '.') }} donatur</span>
                                        </div>
                                        <div class="relative h-2.5 rounded-full bg-[#EFEBE6] overflow-hidden">
                                            <div class="h-full rounded-full transition-all duration-[1200ms] ease-out" style="width: {{ $persentase }}%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40) 60%, rgb(248, 113, 113));"></div>
                                        </div>
                                        <div class="flex justify-between items-end">
                                            <div>
                                                <div class="text-[17px] font-extrabold text-[#12355B]">Rp {{ number_format($terkumpul, 0, ',', '.') }}</div>
                                                <div class="text-[11px] text-[#aaa]">dari Rp {{ number_format($target, 0, ',', '.') }}</div>
                                            </div>
                                        </div>
                                        <button onclick="window.location.href='/donasi'" class="w-full py-3.5 bg-[#D62828] text-white rounded-full text-[13px] font-extrabold hover:bg-[#B91C1C] transition-all shadow-[0_10px_24px_-10px_rgba(214,40,40,0.7)] hover:-translate-y-0.5 mt-2">Donasi Sekarang</button>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-span-3 text-center text-gray-500 py-10">Belum ada program saat ini.</div>
                            @endforelse
                        </div>
                    </div>
                </section>

                <section class="bg-[#FBFAF7] py-24">
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="text-center mb-16 flex flex-col items-center">
                            <span class="inline-flex items-center gap-2.5 mb-5 justify-center">
                                <span class="h-px w-7" style="background: rgb(214, 40, 40);"></span>
                                <span class="text-[11px] font-extrabold tracking-[0.22em] uppercase" style="color: rgb(214, 40, 40);">Cara Berdonasi</span>
                            </span>
                            <h2 class="text-4xl lg:text-[52px] font-extrabold text-[#12355B] tracking-[-0.02em]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Mudah, Cepat, dan Aman</h2>
                        </div>
                        <div class="relative">
                            <div class="hidden lg:block absolute top-10 left-[calc(10%+40px)] right-[calc(10%+40px)] h-px border-t-2 border-dashed border-[#D62828]/25 z-0"></div>
                            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 relative z-10">
                                <div class="flex flex-col items-center text-center group" style="opacity: 1; transform: none;">
                                    <div class="relative mb-5">
                                        <div class="w-20 h-20 rounded-3xl bg-white border border-black/[0.05] shadow-[0_12px_30px_-16px_rgba(13,33,55,0.4)] flex items-center justify-center group-hover:-translate-y-1 group-hover:shadow-[0_20px_40px_-16px_rgba(214,40,40,0.4)] transition-all duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-8 h-8 text-[#D62828]"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                                        </div>
                                        <div class="absolute -top-2 -right-2 w-7 h-7 bg-[#12355B] rounded-full flex items-center justify-center text-white text-[11px] font-extrabold shadow-lg ring-2 ring-[#FBFAF7]">1</div>
                                    </div>
                                    <h4 class="font-extrabold text-[#12355B] text-sm mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Pilih Program</h4>
                                    <p class="text-[13px] text-[#888] leading-relaxed">Temukan program yang ingin Anda dukung dari ratusan kampanye terverifikasi</p>
                                </div>
                                <div class="flex flex-col items-center text-center group" style="opacity: 1; transform: none;">
                                    <div class="relative mb-5">
                                        <div class="w-20 h-20 rounded-3xl bg-white border border-black/[0.05] shadow-[0_12px_30px_-16px_rgba(13,33,55,0.4)] flex items-center justify-center group-hover:-translate-y-1 group-hover:shadow-[0_20px_40px_-16px_rgba(214,40,40,0.4)] transition-all duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-8 h-8 text-[#D62828]"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                                        </div>
                                        <div class="absolute -top-2 -right-2 w-7 h-7 bg-[#12355B] rounded-full flex items-center justify-center text-white text-[11px] font-extrabold shadow-lg ring-2 ring-[#FBFAF7]">2</div>
                                    </div>
                                    <h4 class="font-extrabold text-[#12355B] text-sm mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Isi Nominal</h4>
                                    <p class="text-[13px] text-[#888] leading-relaxed">Tentukan jumlah donasi sesuai kemampuan, mulai dari Rp10.000</p>
                                </div>
                                <div class="flex flex-col items-center text-center group" style="opacity: 1; transform: none;">
                                    <div class="relative mb-5">
                                        <div class="w-20 h-20 rounded-3xl bg-white border border-black/[0.05] shadow-[0_12px_30px_-16px_rgba(13,33,55,0.4)] flex items-center justify-center group-hover:-translate-y-1 group-hover:shadow-[0_20px_40px_-16px_rgba(214,40,40,0.4)] transition-all duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-8 h-8 text-[#D62828]"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                        </div>
                                        <div class="absolute -top-2 -right-2 w-7 h-7 bg-[#12355B] rounded-full flex items-center justify-center text-white text-[11px] font-extrabold shadow-lg ring-2 ring-[#FBFAF7]">3</div>
                                    </div>
                                    <h4 class="font-extrabold text-[#12355B] text-sm mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Pembayaran Aman</h4>
                                    <p class="text-[13px] text-[#888] leading-relaxed">Lebih dari 10 metode pembayaran tersedia, semua terenkripsi SSL</p>
                                </div>
                                <div class="flex flex-col items-center text-center group" style="opacity: 1; transform: none;">
                                    <div class="relative mb-5">
                                        <div class="w-20 h-20 rounded-3xl bg-white border border-black/[0.05] shadow-[0_12px_30px_-16px_rgba(13,33,55,0.4)] flex items-center justify-center group-hover:-translate-y-1 group-hover:shadow-[0_20px_40px_-16px_rgba(214,40,40,0.4)] transition-all duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-8 h-8 text-[#D62828]"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                        </div>
                                        <div class="absolute -top-2 -right-2 w-7 h-7 bg-[#12355B] rounded-full flex items-center justify-center text-white text-[11px] font-extrabold shadow-lg ring-2 ring-[#FBFAF7]">4</div>
                                    </div>
                                    <h4 class="font-extrabold text-[#12355B] text-sm mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Berhasil &amp; Tercatat</h4>
                                    <p class="text-[13px] text-[#888] leading-relaxed">Bukti donasi dikirim otomatis ke email Anda dalam hitungan detik</p>
                                </div>
                                <div class="flex flex-col items-center text-center group" style="opacity: 1; transform: none;">
                                    <div class="relative mb-5">
                                        <div class="w-20 h-20 rounded-3xl bg-white border border-black/[0.05] shadow-[0_12px_30px_-16px_rgba(13,33,55,0.4)] flex items-center justify-center group-hover:-translate-y-1 group-hover:shadow-[0_20px_40px_-16px_rgba(214,40,40,0.4)] transition-all duration-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-8 h-8 text-[#D62828]"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg>
                                        </div>
                                        <div class="absolute -top-2 -right-2 w-7 h-7 bg-[#12355B] rounded-full flex items-center justify-center text-white text-[11px] font-extrabold shadow-lg ring-2 ring-[#FBFAF7]">5</div>
                                    </div>
                                    <h4 class="font-extrabold text-[#12355B] text-sm mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Laporan Transparan</h4>
                                    <p class="text-[13px] text-[#888] leading-relaxed">Pantau penggunaan dana secara real-time lewat dashboard donatur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-white py-24">
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="flex items-end justify-between mb-10">
                            <div>
                                <span class="inline-flex items-center gap-2.5 mb-5 ">
                                    <span class="h-px w-7" style="background: rgb(214, 40, 40);"></span>
                                    <span class="text-[11px] font-extrabold tracking-[0.22em] uppercase" style="color: rgb(214, 40, 40);">Galeri Lapangan</span>
                                </span>
                                <h2 class="text-4xl lg:text-[52px] font-extrabold text-[#12355B] leading-[1.05] tracking-[-0.02em]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Wajah Perubahan<br>Nyata</h2>
                            </div>
                            <button onclick="window.location.href='/galeri'" class="hidden md:flex items-center gap-2 text-[13px] font-bold text-[#12355B] hover:text-[#D62828] transition-colors">
                                Lihat Galeri Lengkap <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg>
                            </button>
                        </div>
                        <div class="grid grid-cols-3 grid-rows-2 gap-4" style="height: 560px;">
                            <div class="col-span-1 row-span-2 relative rounded-[26px] overflow-hidden bg-gray-200 group cursor-pointer ring-1 ring-black/5" style="opacity: 1; transform: none;">
                                <img src="https://images.unsplash.com/photo-1720238280782-bd9e5b597903?w=600&h=900&fit=crop&auto=format" alt="Dua anak Indonesia berdiri berdampingan penuh semangat" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                                <div class="absolute bottom-4 left-4 right-4 translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-400">
                                    <p class="text-white text-xs font-semibold leading-snug">Dua anak Indonesia berdiri berdampingan penuh semangat</p>
                                </div>
                            </div>
                            <div class="col-span-2 row-span-1 relative rounded-[26px] overflow-hidden bg-gray-200 group cursor-pointer ring-1 ring-black/5" style="opacity: 1; transform: none;">
                                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=900&h=420&fit=crop&auto=format" alt="Lima anak ceria membentuk tanda perdamaian bersama relawan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                                <div class="absolute bottom-4 left-4 right-4 translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-400">
                                    <p class="text-white text-xs font-semibold leading-snug">Lima anak ceria membentuk tanda perdamaian bersama relawan</p>
                                </div>
                            </div>
                            <div class="col-span-1 row-span-1 relative rounded-[26px] overflow-hidden bg-gray-200 group cursor-pointer ring-1 ring-black/5" style="opacity: 1; transform: none;">
                                <img src="https://images.unsplash.com/photo-1759738099669-d64b0656f6cf?w=420&h=420&fit=crop&auto=format" alt="Perempuan desa Indonesia bertenun kain tradisional bersama-sama" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                                <div class="absolute bottom-4 left-4 right-4 translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-400">
                                    <p class="text-white text-xs font-semibold leading-snug">Perempuan desa Indonesia bertenun kain tradisional bersama-sama</p>
                                </div>
                            </div>
                            <div class="col-span-1 row-span-1 relative rounded-[26px] overflow-hidden bg-gray-200 group cursor-pointer ring-1 ring-black/5" style="opacity: 1; transform: none;">
                                <img src="https://images.unsplash.com/photo-1782024097113-c824129378f2?w=420&h=420&fit=crop&auto=format" alt="Empat perempuan Indonesia berbagi kebahagiaan di bawah langit cerah" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-400"></div>
                                <div class="absolute bottom-4 left-4 right-4 translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-400">
                                    <p class="text-white text-xs font-semibold leading-snug">Empat perempuan Indonesia berbagi kebahagiaan di bawah langit cerah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="relative bg-[#12355B] py-24 overflow-hidden">
                    <div class="absolute inset-0 opacity-[0.04] pointer-events-none" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 26px 26px;"></div>
                    <div class="absolute -top-32 -right-32 w-[28rem] h-[28rem] rounded-full bg-[#D62828]/15 blur-3xl pointer-events-none"></div>
                    <div class="relative max-w-[1280px] mx-auto px-6">
                        <div class="grid lg:grid-cols-2 gap-20 items-center">
                            <div style="opacity: 1; transform: none;">
                                <span class="inline-flex items-center gap-2.5 mb-5 ">
                                    <span class="h-px w-7" style="background: rgb(248, 113, 113);"></span>
                                    <span class="text-[11px] font-extrabold tracking-[0.22em] uppercase" style="color: rgb(248, 113, 113);">Kisah Nyata</span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote w-14 h-14 text-[#D62828]/50 mb-5"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg>
                                <blockquote class="text-3xl lg:text-[40px] font-extrabold text-white leading-[1.25] tracking-[-0.01em] mb-10" style="font-family: 'Plus Jakarta Sans', sans-serif;">"Beasiswa dari Bakti Merah Putih membuat saya bisa kembali bersekolah dan meraih mimpi menjadi guru."</blockquote>
                                <div class="flex items-center gap-5">
                                    <div class="relative">
                                        <div class="w-16 h-16 rounded-2xl overflow-hidden bg-gray-600 ring-2 ring-white/20">
                                            <img src="https://images.unsplash.com/photo-1581929378520-a4230051620d?w=120&h=120&fit=crop&auto=format" alt="Siti Rahayu penerima beasiswa" class="w-full h-full object-cover">
                                        </div>
                                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-emerald-500 rounded-full border-2 border-[#12355B] flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3 h-3 text-white fill-white"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="text-white font-extrabold text-base" style="font-family: 'Plus Jakarta Sans', sans-serif;">Siti Rahayu, 16 tahun</div>
                                        <div class="text-white/50 text-sm">Penerima Beasiswa 2025 — Nusa Tenggara Timur</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-8 pt-8 border-t border-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-amber-400 fill-amber-400"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-amber-400 fill-amber-400"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-amber-400 fill-amber-400"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-amber-400 fill-amber-400"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-amber-400 fill-amber-400"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
                                    <span class="text-white/50 text-sm ml-1">4.9/5 dari 1.200+ ulasan donatur</span>
                                </div>
                            </div>
                            <div style="opacity: 1; transform: none;">
                                <h3 class="text-white/50 text-[11px] font-extrabold uppercase tracking-[0.22em] mb-6">Dipercaya &amp; Didukung Oleh</h3>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">🏛️</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">Kemendikbud RI</div>
                                            <div class="text-white/40 text-[11px]">Pemerintah</div>
                                        </div>
                                    </div>
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">🏛️</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">Kemenkes RI</div>
                                            <div class="text-white/40 text-[11px]">Pemerintah</div>
                                        </div>
                                    </div>
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">🏦</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">Bank BRI</div>
                                            <div class="text-white/40 text-[11px]">Perusahaan</div>
                                        </div>
                                    </div>
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">📡</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">Telkom Indonesia</div>
                                            <div class="text-white/40 text-[11px]">Perusahaan</div>
                                        </div>
                                    </div>
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">🎓</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">Universitas Indonesia</div>
                                            <div class="text-white/40 text-[11px]">Akademik</div>
                                        </div>
                                    </div>
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">🎓</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">UGM Yogyakarta</div>
                                            <div class="text-white/40 text-[11px]">Akademik</div>
                                        </div>
                                    </div>
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">🤝</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">BNPB</div>
                                            <div class="text-white/40 text-[11px]">NGO / Lembaga</div>
                                        </div>
                                    </div>
                                    <div class="group flex items-center gap-3 px-5 py-4 rounded-2xl bg-white/[0.06] border border-white/10 hover:bg-white/[0.12] hover:border-white/25 hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                                        <span class="text-xl flex-shrink-0">🌐</span>
                                        <div>
                                            <div class="text-white font-bold text-[13px] leading-tight">UNDP Indonesia</div>
                                            <div class="text-white/40 text-[11px]">NGO / Lembaga</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8 flex flex-wrap gap-3">
                                    <div class="flex items-center gap-2 px-4 py-2.5 rounded-full bg-white/[0.08] border border-white/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-emerald-400"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                        <span class="text-white/70 text-xs font-semibold">Legalitas Resmi</span>
                                    </div>
                                    <div class="flex items-center gap-2 px-4 py-2.5 rounded-full bg-white/[0.08] border border-white/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark w-4 h-4 text-emerald-400"><line x1="3" x2="21" y1="22" y2="22"></line><line x1="6" x2="6" y1="18" y2="11"></line><line x1="10" x2="10" y1="18" y2="11"></line><line x1="14" x2="14" y1="18" y2="11"></line><line x1="18" x2="18" y1="18" y2="11"></line><polygon points="12 2 20 7 4 7"></polygon></svg>
                                        <span class="text-white/70 text-xs font-semibold">Terdaftar Kemenkumham</span>
                                    </div>
                                    <div class="flex items-center gap-2 px-4 py-2.5 rounded-full bg-white/[0.08] border border-white/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-4 h-4 text-emerald-400"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg>
                                        <span class="text-white/70 text-xs font-semibold">ISO 9001:2015</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-[#FBFAF7] py-24">
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="flex items-end justify-between mb-12">
                            <div>
                                <span class="inline-flex items-center gap-2.5 mb-5 ">
                                    <span class="h-px w-7" style="background: rgb(214, 40, 40);"></span>
                                    <span class="text-[11px] font-extrabold tracking-[0.22em] uppercase" style="color: rgb(214, 40, 40);">Berita &amp; Cerita</span>
                                </span>
                                <h2 class="text-4xl lg:text-[52px] font-extrabold text-[#12355B] tracking-[-0.02em]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dari Lapangan</h2>
                            </div>
                            <button onclick="window.location.href='/artikel'" class="hidden md:flex items-center gap-2 text-[13px] font-bold text-[#12355B] hover:text-[#D62828] transition-colors">
                                Semua Artikel <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                            </button>
                        </div>
                        <div class="grid md:grid-cols-3 gap-6">
                            <article onclick="window.location.href='/berita/beasiswa-ntt'" class="group bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.05] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 cursor-pointer" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=720&h=440&fit=crop&auto=format" alt="Anak-anak tersenyum lebar menunjukkan semangat belajar mereka" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4"><span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold text-white backdrop-blur-sm" style="background: rgb(214, 40, 40);">Program</span></div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-3 text-[11px] text-[#aaa] font-semibold mb-3">
                                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-3 h-3"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg> 15 Juli 2026</span>
                                        <span>·</span>
                                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-3 h-3"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 4 menit baca</span>
                                    </div>
                                    <h3 class="font-extrabold text-[#12355B] text-[15px] leading-snug mb-3 group-hover:text-[#D62828] transition-colors" style="font-family: 'Plus Jakarta Sans', sans-serif;">500 Anak NTT Terima Beasiswa Bakti Merah Putih 2026</h3>
                                    <p class="text-[13px] text-[#777] leading-relaxed mb-4">Program beasiswa tahunan kami kembali menyentuh ratusan kehidupan di ujung timur Indonesia.</p>
                                    <button class="flex items-center gap-1 text-[13px] font-bold text-[#D62828] group-hover:gap-2 transition-all duration-200">Baca Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-3.5 h-3.5"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                                </div>
                            </article>
                            <article onclick="window.location.href='/berita/relawan-banjir'" class="group bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.05] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 cursor-pointer" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1617494532674-67d22df2addb?w=720&h=440&fit=crop&auto=format" alt="Seorang anak bertahan di genangan banjir yang melanda kampungnya" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4"><span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold text-white backdrop-blur-sm" style="background: rgb(29, 78, 216);">Kebencanaan</span></div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-3 text-[11px] text-[#aaa] font-semibold mb-3">
                                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-3 h-3"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg> 8 Juli 2026</span>
                                        <span>·</span>
                                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-3 h-3"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 6 menit baca</span>
                                    </div>
                                    <h3 class="font-extrabold text-[#12355B] text-[15px] leading-snug mb-3 group-hover:text-[#D62828] transition-colors" style="font-family: 'Plus Jakarta Sans', sans-serif;">Sigap di Lapangan: Tim Relawan Bakti Pulihkan 3 Desa Pasca Banjir</h3>
                                    <p class="text-[13px] text-[#777] leading-relaxed mb-4">Dalam 48 jam pertama, 120 relawan kami bergerak cepat mendistribusikan logistik.</p>
                                    <button class="flex items-center gap-1 text-[13px] font-bold text-[#D62828] group-hover:gap-2 transition-all duration-200">Baca Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-3.5 h-3.5"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                                </div>
                            </article>
                            <article onclick="window.location.href='/berita/gerakan-pohon'" class="group bg-white rounded-[24px] overflow-hidden ring-1 ring-black/[0.05] shadow-[0_10px_30px_-18px_rgba(13,33,55,0.3)] hover:shadow-[0_28px_50px_-24px_rgba(13,33,55,0.45)] hover:-translate-y-1.5 transition-all duration-400 cursor-pointer" style="opacity: 1; transform: none;">
                                <div class="relative h-52 bg-gray-200 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1763856957026-a74ab4f05891?w=720&h=440&fit=crop&auto=format" alt="Tangan menanam bibit pohon sebagai simbol harapan dan keberlanjutan alam" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                                    <div class="absolute bottom-4 left-4"><span class="px-3 py-1.5 rounded-full text-[11px] font-extrabold text-white backdrop-blur-sm" style="background: rgb(22, 163, 74);">Lingkungan</span></div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-3 text-[11px] text-[#aaa] font-semibold mb-3">
                                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-3 h-3"><path d="M8 2v4"></path><path d="M16 2v4"></path><rect width="18" height="18" x="3" y="4" rx="2"></rect><path d="M3 10h18"></path></svg> 1 Juli 2026</span>
                                        <span>·</span>
                                        <span class="flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-3 h-3"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 5 menit baca</span>
                                    </div>
                                    <h3 class="font-extrabold text-[#12355B] text-[15px] leading-snug mb-3 group-hover:text-[#D62828] transition-colors" style="font-family: 'Plus Jakarta Sans', sans-serif;">Gerakan 10.000 Pohon: Pulihkan Ekosistem Hutan Sulawesi</h3>
                                    <p class="text-[13px] text-[#777] leading-relaxed mb-4">Bersama komunitas adat dan 700 donatur setia, kami menghijaukan 45 hektar lahan kritis.</p>
                                    <button class="flex items-center gap-1 text-[13px] font-bold text-[#D62828] group-hover:gap-2 transition-all duration-200">Baca Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-3.5 h-3.5"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>

                <section class="bg-[#FBFAF7] pb-24">
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="relative bg-[#D62828] rounded-[32px] px-8 py-16 text-center overflow-hidden shadow-[0_40px_80px_-30px_rgba(214,40,40,0.6)]">
                            <div class="absolute -top-20 -right-20 w-72 h-72 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
                            <div class="absolute -bottom-16 -left-16 w-56 h-56 rounded-full bg-black/10 blur-xl pointer-events-none"></div>
                            <div class="absolute inset-0 opacity-[0.07]" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 28px 28px;"></div>
                            <div class="relative z-10 max-w-xl mx-auto">
                                <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center mx-auto mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-7 h-7 text-white"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                                </div>
                                <h2 class="text-3xl lg:text-[40px] font-extrabold text-white mb-3 tracking-[-0.01em]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dapatkan Update Kegiatan Kami</h2>
                                <p class="text-white/80 mb-8 text-base">Ikuti perkembangan program dan dampak donasi Anda langsung di inbox. Tanpa spam, selamanya.</p>
                                
                                @if(session('newsletter_success'))
                                    <div class="bg-green-500/20 border border-green-500 text-white px-4 py-3 rounded-lg mb-6 text-sm font-medium">
                                        {{ session('newsletter_success') }}
                                    </div>
                                @endif

                                @if($errors->newsletter->has('email'))
                                    <div class="bg-red-500/20 border border-red-500 text-white px-4 py-3 rounded-lg mb-6 text-sm font-medium">
                                        {{ $errors->newsletter->first('email') }}
                                    </div>
                                @endif

                                <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" method="POST" action="{{ route('newsletter.subscribe') }}">
                                    @csrf
                                    <input type="email" name="email" required="" placeholder="nama@email.com" class="flex-1 px-5 py-4 rounded-full bg-white text-[#1B1B1B] placeholder-gray-400 text-sm font-medium outline-none focus:ring-4 focus:ring-white/40 shadow-lg" value="{{ old('email') }}">
                                    <button type="submit" class="px-7 py-4 bg-[#12355B] text-white rounded-full text-sm font-extrabold hover:bg-[#0f2a4a] transition-all whitespace-nowrap shadow-lg hover:-translate-y-0.5">Daftar Sekarang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

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
                                    <button class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-4 h-4"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></button>
                                    <a href="https://youtube.com/@yayasanbaktimerahputih?si=2HPfET3fJpl2I-t2" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-4 h-4"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></a>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Navigasi</h4>
                                <ul class="space-y-3">
                                    <li><a href="#" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Beranda</a></li>
                                    <li><a href="/tentang-kami" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Tentang Kami</a></li>
                                    <li><a href="/program" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Program</a></li>
                                    <li><a href="/donasi" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Donasi</a></li>
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
                                        <a href="https://maps.app.goo.gl/bVA5qdGNFRjgWd2d9" target="_blank" class="hover:text-white transition-colors">Jl. RS. Fatmawati Raya No.28 AA 1, RT.1/RW.5, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12420</a>
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
        (() => {
            const header = document.querySelector('header');
            const logo = document.querySelector('header img');
            const navLinks = document.querySelectorAll('header nav button');
            const mobileMenuBtn = document.querySelector('header .xl\\:hidden');

            // Prevent adding multiple listeners on htmx navigation
            if (!window.hasWelcomeScrollListener) {
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
                window.hasWelcomeScrollListener = true;
            }
        })();
    </script>
    <script>
        (() => {
            const searchInput = document.getElementById('welcomeSearchInput');
            const filterBtns = document.querySelectorAll('.welcome-category-btn');
            const allBtn = document.getElementById('welcomeAllBtn');
            const programContainer = document.getElementById('programContainer');
            
            if (programContainer && searchInput) {
                const cards = programContainer.querySelectorAll('.group.bg-white');
                let currentSearch = '';
                let currentCategory = 'all';

                const categoryMap = {
                    'pendidikan': ['pendidikan', 'beasiswa'],
                    'sosial & kemanusiaan': ['sosial', 'kemanusiaan', 'pangan', 'bencana'],
                    'lingkungan': ['lingkungan'],
                    'kesehatan': ['kesehatan'],
                    'fasilitas ibadah': ['ibadah', 'fasilitas']
                };

                function filterWelcomeCards() {
                    cards.forEach(card => {
                        const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
                        const categorySpan = card.querySelector('.absolute.top-4.left-4 span')?.textContent.toLowerCase() || '';
                        
                        const matchSearch = title.includes(currentSearch);
                        
                        let matchCategory = false;
                        if (currentCategory === 'all') {
                            matchCategory = true;
                        } else {
                            const allowedTags = categoryMap[currentCategory.toLowerCase()] || [currentCategory.toLowerCase()];
                            matchCategory = allowedTags.some(tag => categorySpan.includes(tag));
                        }
                        
                        if (matchSearch && matchCategory) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }

                searchInput.addEventListener('input', (e) => {
                    currentSearch = e.target.value.toLowerCase();
                    filterWelcomeCards();
                });

                function setActiveBtn(btnToActive) {
                    [allBtn, ...filterBtns].forEach(btn => {
                        if (btn === btnToActive) {
                            btn.classList.add('bg-[#D62828]', 'text-white');
                            btn.classList.remove('text-[#12355B]', 'hover:bg-[#12355B]/5', 'border-[#12355B]/15');
                            btn.classList.add('border-[#D62828]');
                        } else {
                            btn.classList.remove('bg-[#D62828]', 'text-white', 'border-[#D62828]');
                            btn.classList.add('text-[#12355B]', 'hover:bg-[#12355B]/5', 'border-[#12355B]/15');
                        }
                    });
                }

                allBtn.addEventListener('click', () => {
                    currentCategory = 'all';
                    setActiveBtn(allBtn);
                    filterWelcomeCards();
                });

                filterBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        currentCategory = btn.getAttribute('data-category');
                        setActiveBtn(btn);
                        filterWelcomeCards();
                    });
                });
            }
        })();
    </script>
    <script>
        (() => {
            const slides = document.querySelectorAll('.hero-bg-slide');
            const indicators = document.querySelectorAll('.hero-indicator');
            if (slides.length > 0) {
                let currentSlide = 0;
                
                function showSlide(index) {
                    slides.forEach(slide => {
                        slide.style.opacity = '0';
                    });
                    indicators.forEach(ind => {
                        ind.classList.remove('w-7', 'bg-white');
                        ind.classList.add('w-2', 'bg-white/40');
                    });
                    
                    slides[index].style.opacity = '0.62';
                    indicators[index].classList.remove('w-2', 'bg-white/40');
                    indicators[index].classList.add('w-7', 'bg-white');
                }
                
                indicators.forEach((ind, i) => {
                    ind.addEventListener('click', () => {
                        currentSlide = i;
                        showSlide(currentSlide);
                    });
                });
                
                setInterval(() => {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }, 5000);
            }
        })();
    </script>
</body>
</html>
