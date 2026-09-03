<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelajahi - Bakti Merah Putih</title>
    
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
                        <button class="relative w-9 h-9 rounded-2xl bg-[#F4F6F9] flex items-center justify-center">
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
                        <div class="p-4">
                            
                            <div class="relative mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                <input placeholder="Cari program donasi…" class="w-full pl-10 pr-4 py-3 bg-white rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none shadow-[0_1px_6px_-2px_rgba(0,0,0,0.1)] focus:ring-2 transition-all" value="" style="--tw-ring-color: #D6282833;">
                            </div>
                            
                            <div class="space-y-3">
                                
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.1)] flex gap-3 p-3">
                                    <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1641886000798-41c1adbebb3b?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Beasiswa untuk 100 Anak Berprestasi di NTT" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 min-w-0 flex flex-col justify-between">
                                        <div>
                                            <span class="text-[10px] font-bold" style="color: rgb(29, 78, 216);">Pendidikan</span>
                                            <p class="text-[12px] font-bold text-[#1B1B1B] leading-snug mt-0.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Beasiswa untuk 100 Anak Berprestasi di NTT</p>
                                        </div>
                                        <div>
                                            <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                                <div class="h-full rounded-full" style="width: 75%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                            </div>
                                            <div class="flex justify-between mt-1 mb-2">
                                                <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 112.500.000</span>
                                                <span class="text-[10px] text-gray-400">75%</span>
                                            </div>
                                            <button class="w-full py-1.5 rounded-full text-[11px] font-extrabold text-white" style="background: rgb(214, 40, 40);">Donasi</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.1)] flex gap-3 p-3">
                                    <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1625236601674-8702e197b5b4?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Dapur Umum untuk 500 Keluarga Miskin Ekstrem" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 min-w-0 flex flex-col justify-between">
                                        <div>
                                            <span class="text-[10px] font-bold" style="color: rgb(217, 119, 6);">Pangan</span>
                                            <p class="text-[12px] font-bold text-[#1B1B1B] leading-snug mt-0.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dapur Umum untuk 500 Keluarga Miskin Ekstrem</p>
                                        </div>
                                        <div>
                                            <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                                <div class="h-full rounded-full" style="width: 82%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                            </div>
                                            <div class="flex justify-between mt-1 mb-2">
                                                <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 163.000.000</span>
                                                <span class="text-[10px] text-gray-400">82%</span>
                                            </div>
                                            <button class="w-full py-1.5 rounded-full text-[11px] font-extrabold text-white" style="background: rgb(214, 40, 40);">Donasi</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.1)] flex gap-3 p-3">
                                    <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1728320771441-17a19df0fe4c?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Pulihkan 120 Rumah Korban Banjir Kalimantan" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 min-w-0 flex flex-col justify-between">
                                        <div>
                                            <span class="text-[10px] font-bold" style="color: rgb(214, 40, 40);">Bencana</span>
                                            <p class="text-[12px] font-bold text-[#1B1B1B] leading-snug mt-0.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Pulihkan 120 Rumah Korban Banjir Kalimantan</p>
                                        </div>
                                        <div>
                                            <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                                <div class="h-full rounded-full" style="width: 43%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                            </div>
                                            <div class="flex justify-between mt-1 mb-2">
                                                <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 344.000.000</span>
                                                <span class="text-[10px] text-gray-400">43%</span>
                                            </div>
                                            <button class="w-full py-1.5 rounded-full text-[11px] font-extrabold text-white" style="background: rgb(214, 40, 40);">Donasi</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="bg-white rounded-[18px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.1)] flex gap-3 p-3">
                                    <div class="w-20 h-20 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                                        <img src="https://images.unsplash.com/photo-1621353880071-4752fa42cbc7?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Klinik Keliling Gratis untuk 10 Desa Terpencil" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 min-w-0 flex flex-col justify-between">
                                        <div>
                                            <span class="text-[10px] font-bold" style="color: rgb(22, 163, 74);">Kesehatan</span>
                                            <p class="text-[12px] font-bold text-[#1B1B1B] leading-snug mt-0.5 line-clamp-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Klinik Keliling Gratis untuk 10 Desa Terpencil</p>
                                        </div>
                                        <div>
                                            <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden">
                                                <div class="h-full rounded-full" style="width: 65%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                                            </div>
                                            <div class="flex justify-between mt-1 mb-2">
                                                <span class="text-[11px] font-bold" style="color: rgb(214, 40, 40);">Rp 78.000.000</span>
                                                <span class="text-[10px] text-gray-400">65%</span>
                                            </div>
                                            <button class="w-full py-1.5 rounded-full text-[11px] font-extrabold text-white" style="background: rgb(214, 40, 40);">Donasi</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[430px] bg-white border-t border-gray-100 px-2 pt-2 pb-safe shadow-[0_-4px_20px_-8px_rgba(0,0,0,0.1)] z-20">
                <div class="flex items-center justify-around pb-2">
                    <button onclick="window.location.href='/dashboard'" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Beranda</span>
                    </button>
                    <button class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search w-5 h-5 transition-colors" style="color: rgb(214, 40, 40);"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        <span class="text-[9px] font-bold transition-colors " style="color: rgb(214, 40, 40);">Jelajahi</span>
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
