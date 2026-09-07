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
</head>
<body class="bg-gray-50 antialiased">
    <div class="min-h-screen bg-[#F4F6F9] flex items-start justify-center" style="font-family: Inter, sans-serif;">
        <div class="relative w-full max-w-[430px] min-h-screen bg-[#F4F6F9] flex flex-col shadow-[0_0_80px_-20px_rgba(0,0,0,0.2)]">
            
            <div class="sticky top-0 z-20 bg-white border-b border-gray-100 px-4 pt-3 pb-3">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-[11px] text-gray-400 font-medium">Selamat pagi 👋</p>
                        <p class="text-[15px] font-extrabold text-[#12355B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Ahmad Fauzi</p>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <button onclick="window.location.href='/donasi'" class="relative w-9 h-9 rounded-2xl bg-[#F4F6F9] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell w-4.5 h-4.5 text-[#555]"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                            <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 rounded-full" style="background: rgb(214, 40, 40);"></span>
                        </button>
                        <button>
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
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>78 program aktif
                                </span>
                                <div>
                                    <p class="text-white font-extrabold text-[17px] leading-snug mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bersama Menebar<br>Kebaikan untuk Indonesia</p>
                                    <button class="flex items-center gap-1.5 px-4 py-2 bg-white rounded-full text-[11px] font-extrabold" style="color: rgb(214, 40, 40);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-3 h-3 fill-current"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg> Donasi Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 mt-5">
                            <div class="grid grid-cols-4 gap-3">
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
                                <button onclick="window.location.href='/reward'" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(255, 251, 235);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift w-6 h-6" style="color: rgb(217, 119, 6);"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Reward</span>
                                </button>
                                <button onclick="window.location.href='/dampak'" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(240, 253, 244);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-column w-6 h-6" style="color: rgb(22, 163, 74);"><line x1="18" x2="18" y1="20" y2="10"></line><line x1="12" x2="12" y1="20" y2="4"></line><line x1="6" x2="6" y1="20" y2="14"></line></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Dampak</span>
                                </button>
                                <button onclick="window.location.href='/zakat'" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(236, 254, 255);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 w-6 h-6" style="color: rgb(8, 145, 178);"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Zakat</span>
                                </button>
                                <button onclick="window.location.href='/darurat'" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(254, 242, 242);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-6 h-6" style="color: rgb(220, 38, 38);"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Darurat</span>
                                </button>
                                <button onclick="window.location.href='/asuransi'" class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(249, 250, 251);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-6 h-6" style="color: rgb(55, 65, 81);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Asuransi</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mx-4 mt-5 rounded-[16px] overflow-hidden" style="background: linear-gradient(135deg, rgb(18, 53, 91), rgb(29, 78, 216));">
                            <div class="flex items-center justify-between p-4">
                                <div>
                                    <p class="text-white/60 text-[10px] font-bold uppercase tracking-widest mb-0.5">Total donasi Anda</p>
                                    <p class="text-white font-extrabold text-[20px]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Rp 2.750.000</p>
                                    <p class="text-white/60 text-[10px] mt-0.5">14 kali donasi · Donatur Setia</p>
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
                    <button onclick="window.location.href='/explore'" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Jelajahi</span>
                    </button>
                    <button onclick="window.location.href='/donate'" class="flex flex-col items-center gap-0.5 -mt-5">
                        <div class="w-14 h-14 rounded-full flex items-center justify-center shadow-[0_8px_24px_-6px_rgba(214,40,40,0.7)] active:scale-95 transition-transform" style="background: rgb(214, 40, 40);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-6 h-6 text-white fill-white"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                        </div>
                        <span class="text-[9px] font-bold mt-0.5" style="color: rgb(214, 40, 40);">Donasi</span>
                    </button>
                    <button onclick="window.location.href='/history'" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Riwayat</span>
                    </button>
                    <button onclick="window.location.href='/account'" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Akun</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
