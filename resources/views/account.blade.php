<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun - Bakti Merah Putih</title>
    
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
                        
                        <div class="relative">
                            <div class="h-28" style="background: linear-gradient(135deg, rgb(18, 53, 91), rgb(214, 40, 40));"></div>
                            <div class="px-4 pb-4 -mt-10">
                                <div class="bg-white rounded-[22px] p-4 shadow-[0_4px_20px_-6px_rgba(0,0,0,0.15)]">
                                    <div class="flex items-start gap-3 mb-4">
                                        <div class="relative">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&amp;h=120&amp;fit=crop&amp;auto=format" alt="Ahmad Fauzi" class="w-16 h-16 rounded-2xl object-cover ring-4 ring-white shadow-md">
                                            <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-emerald-500 rounded-full border-2 border-white"></div>
                                        </div>
                                        <div class="flex-1 pt-1">
                                            <p class="font-extrabold text-[16px] text-[#12355B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Ahmad Fauzi</p>
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200 mt-1">🏅 Donatur Setia</span>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 divide-x divide-gray-100">
                                        <div class="flex flex-col items-center py-2 px-1">
                                            <p class="text-[13px] font-extrabold text-[#12355B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Rp 2.750.000</p>
                                            <p class="text-[9px] text-gray-400 font-semibold text-center mt-0.5 leading-tight">Total Donasi</p>
                                        </div>
                                        <div class="flex flex-col items-center py-2 px-1">
                                            <p class="text-[13px] font-extrabold text-[#12355B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">14x</p>
                                            <p class="text-[9px] text-gray-400 font-semibold text-center mt-0.5 leading-tight">Jumlah Donasi</p>
                                        </div>
                                        <div class="flex flex-col items-center py-2 px-1">
                                            <p class="text-[13px] font-extrabold text-[#12355B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">8 program</p>
                                            <p class="text-[9px] text-gray-400 font-semibold text-center mt-0.5 leading-tight">Program Didukung</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="px-4 space-y-2.5">
                            <button onclick="window.location.href='/pembayaran'" class="w-full flex items-center gap-3.5 bg-white rounded-[16px] px-4 py-3.5 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)] hover:shadow-md transition-shadow text-left">
                                <div class="w-10 h-10 rounded-2xl bg-[#F4F6F9] flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet w-5 h-5 text-[#555]"><path d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1"></path><path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[13px] font-bold text-[#1B1B1B]">Kelola Pembayaran</p>
                                    <p class="text-[11px] text-gray-400">Kartu, rekening, e-wallet</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                            
                            <button onclick="window.location.href='/reward'" class="w-full flex items-center gap-3.5 bg-white rounded-[16px] px-4 py-3.5 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)] hover:shadow-md transition-shadow text-left">
                                <div class="w-10 h-10 rounded-2xl bg-[#F4F6F9] flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift w-5 h-5 text-[#555]"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[13px] font-bold text-[#1B1B1B]">Reward &amp; Badge</p>
                                    <p class="text-[11px] text-gray-400">3 badge didapatkan</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                            
                            <button onclick="window.location.href='/dampak'" class="w-full flex items-center gap-3.5 bg-white rounded-[16px] px-4 py-3.5 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)] hover:shadow-md transition-shadow text-left">
                                <div class="w-10 h-10 rounded-2xl bg-[#F4F6F9] flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-column w-5 h-5 text-[#555]"><line x1="18" x2="18" y1="20" y2="10"></line><line x1="12" x2="12" y1="20" y2="4"></line><line x1="6" x2="6" y1="20" y2="14"></line></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[13px] font-bold text-[#1B1B1B]">Dampak Donasi Saya</p>
                                    <p class="text-[11px] text-gray-400">38 orang terbantu</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                            
                            <button class="w-full flex items-center gap-3.5 bg-white rounded-[16px] px-4 py-3.5 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)] hover:shadow-md transition-shadow text-left">
                                <div class="w-10 h-10 rounded-2xl bg-[#F4F6F9] flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-5 h-5 text-[#555]"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[13px] font-bold text-[#1B1B1B]">Privasi &amp; Keamanan</p>
                                    <p class="text-[11px] text-gray-400">2FA aktif</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                            
                            <button class="w-full flex items-center gap-3.5 bg-white rounded-[16px] px-4 py-3.5 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)] hover:shadow-md transition-shadow text-left">
                                <div class="w-10 h-10 rounded-2xl bg-[#F4F6F9] flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card w-5 h-5 text-[#555]"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[13px] font-bold text-[#1B1B1B]">Riwayat Transaksi</p>
                                    <p class="text-[11px] text-gray-400">14 transaksi</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                            
                            <button onclick="window.location.href='/tentang-kami'" class="w-full flex items-center gap-3.5 bg-white rounded-[16px] px-4 py-3.5 shadow-[0_1px_6px_-2px_rgba(0,0,0,0.08)] hover:shadow-md transition-shadow text-left">
                                <div class="w-10 h-10 rounded-2xl bg-[#F4F6F9] flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-5 h-5 text-[#555]"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[13px] font-bold text-[#1B1B1B]">Tentang Kami</p>
                                    <p class="text-[11px] text-gray-400">Visi misi & info yayasan</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300 shrink-0"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                            
                            <form id="form-logout" onsubmit="event.preventDefault(); window.location.href='/';" class="mt-2 w-full">
                                <button type="submit" class="w-full flex items-center justify-center gap-2 py-3.5 rounded-[16px] border-2 text-[13px] font-bold transition-colors" style="border-color: rgb(214, 40, 40); color: rgb(214, 40, 40);">Keluar dari Akun</button>
                            </form>
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
                    <button class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5 transition-colors" style="color: rgb(214, 40, 40);"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="text-[9px] font-bold transition-colors" style="color: rgb(214, 40, 40);">Akun</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
