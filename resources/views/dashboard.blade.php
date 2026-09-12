<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Bakti Merah Putih</title>
    
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
        .htmx-added { transition: all 0.2s ease-in; }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        .pb-safe {
            padding-bottom: env(safe-area-inset-bottom, 16px);
        }
        
        @keyframes swipeUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-swipe-up {
            animation: swipeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="bg-gray-50 antialiased">
    <!-- MOBILE VIEW (Hidden on Tablet and Desktop) -->
    <div class="block md:hidden">

    <div class="min-h-screen bg-[#F4F6F9] flex items-start justify-center" style="font-family: Inter, sans-serif;">
        <div class="relative w-full max-w-[430px] min-h-screen bg-[#F4F6F9] flex flex-col shadow-[0_0_80px_-20px_rgba(0,0,0,0.2)]">
            
            <div class="sticky top-0 z-20 bg-white border-b border-gray-100 px-4 pt-3 pb-3">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[11px] text-gray-400 font-medium">Selamat pagi 👋</p>
                        <p class="text-[15px] font-extrabold text-[#12355B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">{{ auth()->user()->name }}</p>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <button hx-get="/login" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="relative w-9 h-9 rounded-2xl bg-[#F4F6F9] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell w-4.5 h-4.5 text-[#555]"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                            <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 rounded-full" style="background: rgb(214, 40, 40);"></span>
                        </button>
                        <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&amp;h=120&amp;fit=crop&amp;auto=format" alt="Ahmad Fauzi" class="w-9 h-9 rounded-2xl object-cover ring-2" style="--tw-ring-color: #D6282833;">
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-center mt-2 pt-2 border-t border-gray-100">
                    <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-7 w-auto object-contain" style="filter: invert(1) sepia(1) saturate(3) hue-rotate(330deg) brightness(0.6);">
                </div>
            </div>
            
            <div class="flex-1 flex flex-col overflow-hidden animate-swipe-up">
                <div class="flex-1 flex flex-col overflow-hidden" style="opacity: 1; transform: none;">
                    <div class="flex-1 overflow-y-auto pb-24">
                        
                        <div class="relative mx-4 mt-4 rounded-[20px] overflow-hidden h-[160px] bg-[#12355B]">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&amp;h=400&amp;fit=crop&amp;auto=format" alt="Relawan bersama anak-anak" class="absolute inset-0 w-full h-full object-cover opacity-40">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#12355B]/90 to-[#D62828]/60"></div>
                            <div class="relative p-5 h-full flex flex-col justify-between">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/15 border border-white/25 text-white text-[10px] font-bold w-fit">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>{{ $programAktifCount }} program aktif
                                </span>
                                <div>
                                    <p class="text-white font-extrabold text-[17px] leading-snug mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bersama Menebar<br>Kebaikan untuk Indonesia</p>
                                    <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex items-center gap-1.5 px-4 py-2 bg-white rounded-full text-[11px] font-extrabold" style="color: rgb(214, 40, 40);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-3 h-3 fill-current"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg> Donasi Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 mt-5">
                            <div class="grid grid-cols-3 gap-3">
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(254, 242, 242);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-6 h-6" style="color: rgb(214, 40, 40);"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Donasi</span>
                                </button>
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(245, 243, 255);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-qr-code w-6 h-6" style="color: rgb(124, 58, 237);"><rect width="5" height="5" x="3" y="3" rx="1"></rect><rect width="5" height="5" x="16" y="3" rx="1"></rect><rect width="5" height="5" x="3" y="16" rx="1"></rect><path d="M21 16h-3a2 2 0 0 0-2 2v3"></path><path d="M21 21v.01"></path><path d="M12 7v3a2 2 0 0 1-2 2H7"></path><path d="M3 12h.01"></path><path d="M12 3h.01"></path><path d="M12 16v.01"></path><path d="M16 12h1"></path><path d="M21 12v.01"></path><path d="M12 21v-1"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">QRIS</span>
                                </button>
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(239, 246, 255);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history w-6 h-6" style="color: rgb(29, 78, 216);"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Riwayat</span>
                                </button>
                                <button hx-get="/reward" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(255, 251, 235);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift w-6 h-6" style="color: rgb(217, 119, 6);"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Reward</span>
                                </button>
                                <button hx-get="/dampak" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(240, 253, 244);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-column w-6 h-6" style="color: rgb(22, 163, 74);"><line x1="18" x2="18" y1="20" y2="10"></line><line x1="12" x2="12" y1="20" y2="4"></line><line x1="6" x2="6" y1="20" y2="14"></line></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Dampak</span>
                                </button>
                                <button hx-get="/darurat" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(254, 242, 242);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-6 h-6" style="color: rgb(220, 38, 38);"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Darurat</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mx-4 mt-5 rounded-[16px] overflow-hidden" style="background: linear-gradient(135deg, rgb(18, 53, 91), rgb(29, 78, 216));">
                            <div class="flex items-center justify-between p-4">
                                <div>
                                    <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest mb-0.5">Total donasi Anda</p>
                                    <p class="text-white font-extrabold text-[20px]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Rp {{ number_format($totalDonasi, 0, ',', '.') }}</p>
                                    <p class="text-white/60 text-[10px] mt-0.5">{{ $donasiCount }} kali donasi · Donatur Setia</p>
                                </div>
                                <div class="w-12 h-12 rounded-2xl bg-white/15 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-6 h-6 text-amber-300"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path><path d="M20 3v4"></path><path d="M22 5h-4"></path><path d="M4 17v2"></path><path d="M5 18H3"></path></svg>
                                </div>
                            </div>
                            <div class="mx-4 mb-4 h-1 rounded-full bg-white/20 overflow-hidden">
                                <div class="h-full w-[55%] rounded-full bg-amber-400"></div>
                            </div>
                            <p class="px-4 pb-3 text-white/50 text-[10px]">Donasi 3x lagi → naik ke Donatur Emas 🏅</p>
                        </div>
                        
                        <div class="mt-5 pl-4">
                            <div class="flex gap-2 overflow-x-auto no-scrollbar pb-1">
                                <button class="flex-shrink-0 px-4 py-2 rounded-full text-[12px] font-bold border transition-all text-white border-transparent" style="background: rgb(214, 40, 40); border-color: rgb(214, 40, 40);">Semua</button>
                                <button class="flex-shrink-0 px-4 py-2 rounded-full text-[12px] font-bold border transition-all bg-white text-gray-500 border-gray-200 hover:border-gray-300">Pendidikan</button>
                                <button class="flex-shrink-0 px-4 py-2 rounded-full text-[12px] font-bold border transition-all bg-white text-gray-500 border-gray-200 hover:border-gray-300">Kesehatan</button>
                                <button class="flex-shrink-0 px-4 py-2 rounded-full text-[12px] font-bold border transition-all bg-white text-gray-500 border-gray-200 hover:border-gray-300">Bencana</button>
                                <button class="flex-shrink-0 px-4 py-2 rounded-full text-[12px] font-bold border transition-all bg-white text-gray-500 border-gray-200 hover:border-gray-300">Pangan</button>
                                <button class="flex-shrink-0 px-4 py-2 rounded-full text-[12px] font-bold border transition-all bg-white text-gray-500 border-gray-200 hover:border-gray-300">Lingkungan</button>
                                <button class="flex-shrink-0 px-4 py-2 rounded-full text-[12px] font-bold border transition-all bg-white text-gray-500 border-gray-200 hover:border-gray-300">Sosial</button>
                            </div>
                        </div>
                        
                        <div class="mt-4 pl-4">
                            <div class="flex items-center justify-between pr-4 mb-3">
                                <h2 class="font-extrabold text-[14px] text-[#1B1B1B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Program Terbaru</h2>
                                <button class="text-[12px] font-semibold flex items-center gap-0.5" style="color: rgb(214, 40, 40);">Lihat semua <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5"><path d="m9 18 6-6-6-6"></path></svg></button>
                            </div>
                            <div class="flex gap-3 overflow-x-auto no-scrollbar pb-2 pr-4">
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.12)] flex-shrink-0 w-[260px]">
                                    <div class="relative h-[140px] bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1641886000798-41c1adbebb3b?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Beasiswa untuk 100 Anak Berprestasi di NTT" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        <span class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-[10px] font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-2.5 h-2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 18h</span>
                                    </div>
                                    <div class="p-3.5">
                                        <p class="text-[10px] font-bold mb-1" style="color: rgb(29, 78, 216);">Bakti Merah Putih</p>
                                        <h3 class="text-[12px] font-bold text-[#1B1B1B] leading-snug mb-2.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Beasiswa untuk 100 Anak Berprestasi di NTT</h3>
                                        <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                            <div class="h-full rounded-full" style="width: 75%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1.5 mb-3">
                                            <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 112.500.000</span>
                                            <span class="text-[10px] text-gray-400">75%</span>
                                        </div>
                                        <button class="w-full py-2 rounded-full text-[12px] font-extrabold text-white transition-all active:scale-95" style="background: rgb(214, 40, 40);">Donasi</button>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.12)] flex-shrink-0 w-[260px]">
                                    <div class="relative h-[140px] bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1625236601674-8702e197b5b4?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Dapur Umum untuk 500 Keluarga Miskin Ekstrem" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        <span class="absolute top-2.5 left-2.5 flex items-center gap-1 px-2 py-1 rounded-full bg-amber-400 text-white text-[10px] font-extrabold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert w-2.5 h-2.5"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg> Mendesak</span>
                                        <span class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-[10px] font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-2.5 h-2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 9h</span>
                                    </div>
                                    <div class="p-3.5">
                                        <p class="text-[10px] font-bold mb-1" style="color: rgb(217, 119, 6);">Relawan Pangan Nusantara</p>
                                        <h3 class="text-[12px] font-bold text-[#1B1B1B] leading-snug mb-2.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dapur Umum untuk 500 Keluarga Miskin Ekstrem</h3>
                                        <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                            <div class="h-full rounded-full" style="width: 82%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1.5 mb-3">
                                            <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 163.000.000</span>
                                            <span class="text-[10px] text-gray-400">82%</span>
                                        </div>
                                        <button class="w-full py-2 rounded-full text-[12px] font-extrabold text-white transition-all active:scale-95" style="background: rgb(214, 40, 40);">Donasi</button>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.12)] flex-shrink-0 w-[260px]">
                                    <div class="relative h-[140px] bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1728320771441-17a19df0fe4c?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Pulihkan 120 Rumah Korban Banjir Kalimantan" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        <span class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-[10px] font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-2.5 h-2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 30h</span>
                                    </div>
                                    <div class="p-3.5">
                                        <p class="text-[10px] font-bold mb-1" style="color: rgb(214, 40, 40);">Bakti Merah Putih</p>
                                        <h3 class="text-[12px] font-bold text-[#1B1B1B] leading-snug mb-2.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Pulihkan 120 Rumah Korban Banjir Kalimantan</h3>
                                        <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                            <div class="h-full rounded-full" style="width: 43%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1.5 mb-3">
                                            <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 344.000.000</span>
                                            <span class="text-[10px] text-gray-400">43%</span>
                                        </div>
                                        <button class="w-full py-2 rounded-full text-[12px] font-extrabold text-white transition-all active:scale-95" style="background: rgb(214, 40, 40);">Donasi</button>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.12)] flex-shrink-0 w-[260px]">
                                    <div class="relative h-[140px] bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1621353880071-4752fa42cbc7?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Klinik Keliling Gratis untuk 10 Desa Terpencil" class="w-full h-full object-cover">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                                        <span class="absolute top-2.5 right-2.5 flex items-center gap-1 px-2 py-1 rounded-full bg-white/20 backdrop-blur-sm border border-white/30 text-white text-[10px] font-bold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-2.5 h-2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 22h</span>
                                    </div>
                                    <div class="p-3.5">
                                        <p class="text-[10px] font-bold mb-1" style="color: rgb(22, 163, 74);">Klinik Desa Sehat</p>
                                        <h3 class="text-[12px] font-bold text-[#1B1B1B] leading-snug mb-2.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Klinik Keliling Gratis untuk 10 Desa Terpencil</h3>
                                        <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                            <div class="h-full rounded-full" style="width: 65%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                        </div>
                                        <div class="flex justify-between items-center mt-1.5 mb-3">
                                            <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 78.000.000</span>
                                            <span class="text-[10px] text-gray-400">65%</span>
                                        </div>
                                        <button class="w-full py-2 rounded-full text-[12px] font-extrabold text-white transition-all active:scale-95" style="background: rgb(214, 40, 40);">Donasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mx-4 mt-5">
                            <div class="flex items-center gap-2 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert w-4 h-4 text-amber-500"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                                <h2 class="font-extrabold text-[14px] text-[#1B1B1B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Butuh Bantuan Segera</h2>
                            </div>
                            <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.12)] flex gap-3 p-3 mb-3">
                                <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1625236601674-8702e197b5b4?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Dapur Umum untuk 500 Keluarga Miskin Ekstrem" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0 flex flex-col justify-between">
                                    <div>
                                        <span class="text-[10px] font-bold" style="color: rgb(217, 119, 6);">Relawan Pangan Nusantara</span>
                                        <p class="text-[12px] font-bold text-[#1B1B1B] leading-snug line-clamp-2 mt-0.5" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dapur Umum untuk 500 Keluarga Miskin Ekstrem</p>
                                    </div>
                                    <div>
                                        <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                            <div class="h-full rounded-full" style="width: 82%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                        </div>
                                        <div class="flex justify-between mt-1">
                                            <span class="text-[10px] font-bold" style="color: rgb(214, 40, 40);">Rp 163.000.000</span>
                                            <span class="text-[10px] text-gray-400 flex items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-2.5 h-2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 9 hari</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mx-4 mt-5">
                            <div class="flex items-center justify-between mb-3">
                                <h2 class="font-extrabold text-[14px] text-[#1B1B1B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Donasi Terakhir</h2>
                                <button class="text-[12px] font-semibold flex items-center gap-0.5" style="color: rgb(214, 40, 40);">Semua <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3.5 h-3.5"><path d="m9 18 6-6-6-6"></path></svg></button>
                            </div>
                            <div class="space-y-2.5">
                                <div class="bg-white rounded-[16px] flex items-center gap-3 p-3 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)]">
                                    <div class="w-11 h-11 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1641886000798-41c1adbebb3b?w=80&amp;h=80&amp;fit=crop&amp;auto=format" alt="Beasiswa Anak NTT" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-[12px] font-bold text-[#1B1B1B] truncate" style="font-family: 'Plus Jakarta Sans', sans-serif;">Beasiswa Anak NTT</p>
                                        <p class="text-[10px] text-gray-400 mt-0.5">18 Jul</p>
                                    </div>
                                    <div class="shrink-0 text-right">
                                        <p class="text-[13px] font-extrabold" style="color: rgb(214, 40, 40);">Rp 250.000</p>
                                        <span class="text-[10px] text-emerald-600 font-bold flex items-center gap-0.5 justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> Berhasil</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[16px] flex items-center gap-3 p-3 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)]">
                                    <div class="w-11 h-11 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1625236601674-8702e197b5b4?w=80&amp;h=80&amp;fit=crop&amp;auto=format" alt="Dapur Umum Pangan" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-[12px] font-bold text-[#1B1B1B] truncate" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dapur Umum Pangan</p>
                                        <p class="text-[10px] text-gray-400 mt-0.5">10 Jul</p>
                                    </div>
                                    <div class="shrink-0 text-right">
                                        <p class="text-[13px] font-extrabold" style="color: rgb(214, 40, 40);">Rp 100.000</p>
                                        <span class="text-[10px] text-emerald-600 font-bold flex items-center gap-0.5 justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> Berhasil</span>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[16px] flex items-center gap-3 p-3 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)]">
                                    <div class="w-11 h-11 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1728320771441-17a19df0fe4c?w=80&amp;h=80&amp;fit=crop&amp;auto=format" alt="Banjir Kalimantan" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-[12px] font-bold text-[#1B1B1B] truncate" style="font-family: 'Plus Jakarta Sans', sans-serif;">Banjir Kalimantan</p>
                                        <p class="text-[10px] text-gray-400 mt-0.5">2 Jul</p>
                                    </div>
                                    <div class="shrink-0 text-right">
                                        <p class="text-[13px] font-extrabold" style="color: rgb(214, 40, 40);">Rp 500.000</p>
                                        <span class="text-[10px] text-emerald-600 font-bold flex items-center gap-0.5 justify-end"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> Berhasil</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[430px] bg-white border-t border-gray-100 px-2 pt-2 pb-safe shadow-[0_-4px_20px_-8px_rgba(0,0,0,0.1)] z-20">
                <div class="flex items-center justify-around pb-2">
                    <button class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-5 h-5 transition-colors" style="color: rgb(214, 40, 40);"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                        <span class="text-[9px] font-bold transition-colors " style="color: rgb(214, 40, 40);">Beranda</span>
                    </button>
                    <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Jelajahi</span>
                    </button>
                    <button hx-get="/donate" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-0.5 -mt-5">
                        <div class="w-14 h-14 rounded-full flex items-center justify-center shadow-[0_8px_24px_-6px_rgba(214,40,40,0.7)] active:scale-95 transition-transform" style="background: rgb(214, 40, 40);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-6 h-6 text-white fill-white"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                        </div>
                        <span class="text-[9px] font-bold mt-0.5" style="color: rgb(214, 40, 40);">Donasi</span>
                    </button>
                    <button hx-get="/history" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Riwayat</span>
                    </button>
                    <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Akun</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>

    </div>

    <!-- TABLET & DESKTOP VIEW (Hidden on Mobile) -->
    <div class="hidden md:block">
        <main class="min-h-screen bg-[#FBFAF7] font-['Inter'] text-[#12355B] selection:bg-[#D62828] selection:text-white">
            <header class="sticky top-0 z-40 border-b border-[#12355B]/10 bg-[#FBFAF7]/95 backdrop-blur-md">
                <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-6">
                        <button class="flex items-center gap-2"><img src="{{ asset('images/logo2.png') }}" alt="Bakti Merah Putih" class="h-9 w-auto"></button>
                        <span class="hidden h-5 w-px bg-[#12355B]/15 sm:inline-block"></span>
                        <span class="hidden text-xs font-bold uppercase tracking-wider text-[#D62828] sm:inline-block">Portal Donatur Terverifikasi</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="relative rounded-full bg-[#F1EEE8] p-2 hover:bg-[#E5E0D8] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell text-[#12355B]">
                                <path d="M10.268 21a2 2 0 0 0 3.464 0"></path>
                                <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path>
                            </svg>
                            <span class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-[#D62828]"></span>
                        </button>
                        <div hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex items-center gap-3 border-l border-[#12355B]/10 pl-4 cursor-pointer hover:bg-black/5 p-1.5 -mr-1.5 rounded-xl transition">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs font-bold text-[#12355B]">{{ auth()->user()->name }}</p>
                                <p class="text-[10px] text-[#62758A]">Donatur Dermawan</p>
                            </div>
                            <button class="grid h-9 w-9 place-items-center rounded-full bg-[#12355B] text-xs font-bold text-white shadow">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
                <div class="grid gap-8 lg:grid-cols-[260px_1fr]">
                    <aside class="hidden lg:block space-y-6">
                        <div class="rounded-2xl border border-[#12355B]/10 bg-white p-5 shadow-sm">
                            <div class="flex items-center gap-3 pb-4 border-b border-[#12355B]/10">
                                <div class="grid h-12 w-12 place-items-center rounded-full bg-[#12355B] font-bold text-white text-base">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
                                <div>
                                    <p class="font-['Plus_Jakarta_Sans'] font-bold text-sm text-[#12355B]">{{ auth()->user()->name }}</p>
                                    <span class="inline-block rounded-full bg-[#16A34A]/10 px-2 py-0.5 text-[10px] font-bold text-[#16A34A]">✓ Akun Terverifikasi</span>
                                </div>
                            </div>
                            <nav class="mt-4 space-y-1">
                                <button hx-get="/dashboard" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition bg-[#12355B] text-white shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house">
                                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    </svg>
                                    Beranda Dashboard
                                </button>
                                <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                    Jelajah 5 Kategori
                                </button>
                                <button hx-get="/history" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text">
                                        <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path>
                                        <path d="M14 8H8"></path>
                                        <path d="M16 12H8"></path>
                                        <path d="M13 16H8"></path>
                                    </svg>
                                    Riwayat &amp; Bukti Donasi
                                </button>
                                <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round">
                                        <circle cx="12" cy="8" r="5"></circle>
                                        <path d="M20 21a8 8 0 0 0-16 0"></path>
                                    </svg>
                                    Pengaturan Akun
                                </button>
                            </nav>
                        </div>
                        <div class="rounded-2xl bg-[#D62828] p-5 text-white shadow-md">
                            <p class="text-[10px] font-extrabold uppercase tracking-widest text-white/80">Donasi Cepat</p>
                            <h3 class="mt-1 font-['Plus_Jakarta_Sans'] text-lg font-bold">Salurkan Kepedulian Hari Ini</h3>
                            <p class="mt-2 text-xs text-white/80 leading-relaxed">Pilih program terkurasi dan pantau perkembangan dampaknya secara transparan.</p>
                            <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-white py-2.5 text-xs font-bold text-[#D62828] transition hover:bg-[#fff1f1]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                                </svg> Donasi Sekarang
                            </button>
                        </div>
                    </aside>
                    <section class="space-y-6">
                        <div class="space-y-6 pb-8">
                            <section class="relative overflow-hidden rounded-2xl bg-[#12355B] p-6 text-white shadow-md sm:p-8">
                                <img src="{{ asset('images/hero-bg.png') }}" alt="Kegiatan Bakti Merah Putih" class="absolute inset-0 h-full w-full object-cover opacity-20">
                                <div class="absolute inset-0 bg-gradient-to-r from-[#12355B] via-[#12355B]/90 to-transparent"></div>
                                <div class="relative z-10 max-w-2xl">
                                    <div class="flex items-center gap-2 text-xs font-extrabold uppercase tracking-wider text-[#F4AAAA]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles">
                                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                            <path d="M20 3v4"></path>
                                            <path d="M22 5h-4"></path>
                                            <path d="M4 17v2"></path>
                                            <path d="M5 18H3"></path>
                                        </svg> Jejak Kebaikan {{ explode(' ', auth()->user()->name)[0] }}
                                    </div>
                                    <p class="mt-4 text-xs text-white/70">Total Kontribusi Tersalurkan</p>
                                    <p class="font-['Plus_Jakarta_Sans'] text-3xl sm:text-4xl font-extrabold tracking-tight mt-1">Rp {{ number_format($totalDonasi, 0, ',', '.') }}</p>
                                    <div class="mt-6 flex flex-wrap items-center justify-between gap-4 border-t border-white/20 pt-4 text-xs text-white/90">
                                        <div class="flex items-center gap-4"><span><strong>{{ $donasiCount }}</strong> Program Didukung</span><span>•</span><span><strong>100%</strong> Tersalurkan Amanah</span></div>
                                        <button class="flex items-center gap-1 font-bold text-[#F4AAAA] hover:underline">Unduh Sertifikat Kebaikan <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg></button>
                                    </div>
                                </div>
                            </section>
                            <section class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <h2 class="font-['Plus_Jakarta_Sans'] text-lg font-extrabold text-[#12355B]">Pilih Kategori Program</h2>
                                    <span class="text-xs text-[#62758A]">5 Kategori Resmi</span>
                                </div>
                                <div class="flex gap-2 overflow-x-auto pb-2 no-scrollbar">
                                    <button data-category="all" class="dashboard-category-btn shrink-0 rounded-full px-4 py-2 text-xs font-bold transition bg-[#D62828] text-white border border-[#D62828]">Semua Program</button>
                                    <button data-category="kesehatan" class="dashboard-category-btn shrink-0 rounded-full px-4 py-2 text-xs font-bold transition bg-white border border-[#12355B]/10 text-[#12355B] hover:bg-[#F1EEE8]">🩺 Kesehatan</button>
                                    <button data-category="pendidikan" class="dashboard-category-btn shrink-0 rounded-full px-4 py-2 text-xs font-bold transition bg-white border border-[#12355B]/10 text-[#12355B] hover:bg-[#F1EEE8]">🎓 Pendidikan</button>
                                    <button data-category="sosial & kemanusiaan" class="dashboard-category-btn shrink-0 rounded-full px-4 py-2 text-xs font-bold transition bg-white border border-[#12355B]/10 text-[#12355B] hover:bg-[#F1EEE8]">🤝 Sosial &amp; Kemanusiaan</button>
                                    <button data-category="lingkungan" class="dashboard-category-btn shrink-0 rounded-full px-4 py-2 text-xs font-bold transition bg-white border border-[#12355B]/10 text-[#12355B] hover:bg-[#F1EEE8]">💧 Lingkungan</button>
                                    <button data-category="fasilitas ibadah" class="dashboard-category-btn shrink-0 rounded-full px-4 py-2 text-xs font-bold transition bg-white border border-[#12355B]/10 text-[#12355B] hover:bg-[#F1EEE8]">🕌 Fasilitas Ibadah</button>
                                </div>
                            </section>
                            <section class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <h2 class="font-['Plus_Jakarta_Sans'] text-xl font-extrabold text-[#12355B]">Program Pilihan</h2>
                                    <span class="text-xs font-semibold text-[#D62828]" id="dashboardProgramCount">{{ count($programTerbaru) }} Program Pilihan</span>
                                </div>
                                                                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-2" id="dashboardProgramContainer">
                                    @forelse($programTerbaru as $campaign)
                                        @php
                                            $percentage = $campaign->nominal > 0 ? min(100, round(($campaign->donations_sum_amount ?? 0) / $campaign->nominal * 100)) : 0;
                                        @endphp
                                        <article class="explore-item flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer group" hx-get="/program/{{ $campaign->slug ?? 'bakti-kesehatan' }}" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" data-category="{{ $campaign->category }}">
                                            <div>
                                                <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                    <img src="{{ asset($campaign->image ?? 'images/donasi-bencana.png') }}" alt="{{ $campaign->name }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                                    <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow category-badge">
                                                        @if(strtolower($campaign->category) == 'kesehatan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope text-[#F4AAAA]"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg>
                                                        @elseif(strtolower($campaign->category) == 'pendidikan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap text-[#F4AAAA]"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
                                                        @elseif(strtolower($campaign->category) == 'sosial & kemanusiaan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-[#F4AAAA]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                        @elseif(strtolower($campaign->category) == 'lingkungan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-droplets text-[#F4AAAA]"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"></path><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"></path></svg>
                                                        @else
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 text-[#F4AAAA]"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                                                        @endif
                                                        {{ $campaign->category ?? 'Program' }}
                                                    </span>
                                                    @if(!empty($campaign->label))
                                                    <span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">{{ $campaign->label }}</span>
                                                    @endif
                                                </div>
                                                <div class="p-5">
                                                    <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2 group-hover:text-[#D62828] transition-colors">{{ $campaign->name }}</h3>
                                                    <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">{{ !empty($campaign->description) ? $campaign->description : 'Mari bersama wujudkan kebaikan melalui program donasi ini. Salurkan kepedulian Anda untuk mereka yang membutuhkan.' }}</p>
                                                    <div class="mt-4">
                                                        <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">{{ $percentage }}%</span></div>
                                                        <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: {{ $percentage }}%;"></div></div>
                                                        <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</span><span class="text-[#62758A]">dari Rp {{ number_format($campaign->nominal, 0, ',', '.') }}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-5 pt-0"><button onclick="openDesktopDonationModal('{{ $campaign->category ?? 'Kebaikan' }}', '{{ addslashes($campaign->name) }}', '{{ $campaign->id }}'); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                        </article>
                                    @empty
                                        <p class="text-sm text-gray-500 col-span-2 text-center py-10">Belum ada program saat ini.</p>
                                    @endforelse
                                </div>
                            </section>
                            <section hx-get="/laporan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="group cursor-pointer overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white p-5 shadow-sm transition-all duration-300 hover:border-[#D62828]/40 hover:bg-[#FFF1F1]/30 hover:shadow-md sm:p-6">
                                <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                    <div class="space-y-1.5">
                                        <div class="flex items-center gap-2"><span class="inline-block rounded-md bg-[#D62828] px-2 py-0.5 text-[9px] font-extrabold uppercase tracking-wider text-white">Update Lapangan Terkini</span><span class="text-[10px] font-bold text-[#62758A]">Juli 2026</span></div>
                                        <p class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] transition-colors group-hover:text-[#D62828]">Laporan Penyaluran Juli 2026 Telah Terbit</p>
                                        <p class="text-xs text-[#62758A] leading-relaxed">Terapi medis gratis telah menjangkau 145 pasien baru di Jawa Tengah. Klik untuk lihat pencatatan keuangan donatur &amp; laporan lengkap.</p>
                                    </div>
                                    <div class="flex items-center gap-1.5 self-end text-xs font-bold text-[#D62828] transition-transform group-hover:translate-x-1 sm:self-center shrink-0">
                                        <span>Buka Laporan</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"></path></svg>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
            
            <nav class="sticky bottom-0 z-40 flex border-t border-[#12355B]/10 bg-[#FBFAF7]/95 px-3 pb-safe pt-2 backdrop-blur lg:hidden shadow-lg">
                <button hx-get="/dashboard" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>Beranda</button>
                <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>Jelajah</button>
                <button hx-get="/donate" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="-mt-5 grid h-13 w-13 place-items-center rounded-full border-4 border-[#FBFAF7] bg-[#D62828] text-white shadow-lg active:scale-95 transition-transform" aria-label="Donasi Cepat"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg></button>
                <button hx-get="/history" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path><path d="M14 8H8"></path><path d="M16 12H8"></path><path d="M13 16H8"></path></svg>Riwayat</button>
                <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>Akun</button>
            </nav>
        </main>
    </div>


    @include('components.desktop-donation-modal')
        <script>
        if (!window.dashboardFilterInitialized) {
            window.dashboardFilterInitialized = true;
            document.addEventListener('click', function(e) {
                const btn = e.target.closest('.dashboard-category-btn');
                if (!btn) return;
                
                const programContainer = document.getElementById('dashboardProgramContainer');
                if (!programContainer) return;
                
                const articles = programContainer.querySelectorAll('article');
                const countText = document.getElementById('dashboardProgramCount');
                const category = btn.getAttribute('data-category');
                
                // Update active state
                const allBtns = document.querySelectorAll('.dashboard-category-btn');
                allBtns.forEach(b => {
                    if (b === btn) {
                        b.classList.add('bg-[#D62828]', 'text-white', 'border-[#D62828]');
                        b.classList.remove('bg-white', 'text-[#12355B]', 'border-[#12355B]/10', 'hover:bg-[#F1EEE8]');
                    } else {
                        b.classList.remove('bg-[#D62828]', 'text-white', 'border-[#D62828]');
                        b.classList.add('bg-white', 'text-[#12355B]', 'border-[#12355B]/10', 'hover:bg-[#F1EEE8]');
                    }
                });
                
                let count = 0;
                articles.forEach(article => {
                    const categorySpan = article.querySelector('.absolute.left-3.top-3')?.textContent.toLowerCase() || '';
                    const matchCategory = category === 'all' || categorySpan.includes(category.toLowerCase());
                    
                    if (matchCategory) {
                        article.style.display = 'flex';
                        count++;
                    } else {
                        article.style.display = 'none';
                    }
                });
                if (countText) {
                    countText.textContent = `${count} Program Tersedia`;
                }
            });
        }
    </script>
</body>
</html>
