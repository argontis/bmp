<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reward - Bakti Merah Putih</title>
    
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
                    <div class="flex items-center gap-3">
                        <button onclick="window.history.back()" class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-50 text-[#1B1B1B]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-5 h-5"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                        </button>
                        <h1 class="text-[16px] font-extrabold text-[#1B1B1B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Reward Saya</h1>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <button class="relative w-9 h-9 rounded-2xl bg-[#F4F6F9] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell w-4.5 h-4.5 text-[#555]"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                            <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 rounded-full" style="background: rgb(214, 40, 40);"></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="flex-1 flex flex-col overflow-hidden animate-swipe-up">
                <div class="flex-1 flex flex-col overflow-hidden" style="opacity: 1; transform: none;">
                    <div class="flex-1 overflow-y-auto pb-24">
                        
                        <!-- Poin Card -->
                        <div class="mx-4 mt-5 rounded-[20px] p-5 relative overflow-hidden" style="background: linear-gradient(135deg, rgb(217, 119, 6), rgb(245, 158, 11));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift absolute -right-6 -bottom-6 w-32 h-32 text-white opacity-10"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg>
                            <div class="relative z-10">
                                <div class="flex items-center justify-between mb-4">
                                    <p class="text-white/80 text-[12px] font-bold">Total Poin Kebaikan</p>
                                    <div class="bg-white/20 backdrop-blur-sm px-2.5 py-1 rounded-full text-white text-[10px] font-extrabold flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info w-3 h-3"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4"></path><path d="M12 8h.01"></path></svg> Cara dapat poin
                                    </div>
                                </div>
                                <h2 class="text-white text-4xl font-extrabold mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">2,450 <span class="text-lg font-semibold text-white/80">pts</span></h2>
                                <p class="text-white/80 text-[11px] mb-4">Poin akan hangus pada 31 Des 2026</p>
                                
                                <button class="w-full py-3 bg-white text-amber-600 rounded-full font-extrabold text-[13px] shadow-lg active:scale-95 transition-transform">
                                    Tukar Poin Sekarang
                                </button>
                            </div>
                        </div>

                        <!-- Menu Tabs -->
                        <div class="mt-6 border-b border-gray-200">
                            <div class="flex px-4 gap-6">
                                <button class="pb-3 border-b-2 border-[#D62828] text-[#D62828] text-[13px] font-bold">Semua Voucher</button>
                                <button class="pb-3 border-b-2 border-transparent text-gray-400 text-[13px] font-bold">Voucher Saya</button>
                            </div>
                        </div>

                        <!-- Voucher List -->
                        <div class="px-4 mt-5 space-y-4">
                            <!-- Card 1 -->
                            <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex">
                                <div class="w-24 bg-amber-50 flex flex-col items-center justify-center p-3 border-r border-dashed border-gray-200 relative">
                                    <div class="absolute -top-3 -right-3 w-6 h-6 bg-[#F4F6F9] rounded-full"></div>
                                    <div class="absolute -bottom-3 -right-3 w-6 h-6 bg-[#F4F6F9] rounded-full"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket w-8 h-8 text-amber-500 mb-1"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path><path d="M13 5v2"></path><path d="M13 17v2"></path><path d="M13 11v2"></path></svg>
                                    <span class="text-amber-600 text-[10px] font-bold text-center">Merchandise</span>
                                </div>
                                <div class="p-3.5 flex-1">
                                    <h3 class="text-[#1B1B1B] text-[13px] font-bold leading-snug mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Kaos Relawan Eksklusif</h3>
                                    <p class="text-gray-400 text-[10px] mb-3">Stok tersisa: 12 buah</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1.5 text-amber-500 font-extrabold text-[14px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins w-4 h-4"><circle cx="8" cy="8" r="6"></circle><path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path><path d="M7 6h1v4"></path><path d="m16.71 13.88.7.71-2.82 2.82"></path></svg> 1,500
                                        </div>
                                        <button class="bg-[#D62828] text-white px-3 py-1.5 rounded-full text-[11px] font-bold active:scale-95 transition-transform">Tukar</button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Card 2 -->
                            <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex">
                                <div class="w-24 bg-blue-50 flex flex-col items-center justify-center p-3 border-r border-dashed border-gray-200 relative">
                                    <div class="absolute -top-3 -right-3 w-6 h-6 bg-[#F4F6F9] rounded-full"></div>
                                    <div class="absolute -bottom-3 -right-3 w-6 h-6 bg-[#F4F6F9] rounded-full"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck w-8 h-8 text-blue-500 mb-1"><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path><path d="M15 18H9"></path><path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path><circle cx="17" cy="18" r="2"></circle><circle cx="7" cy="18" r="2"></circle></svg>
                                    <span class="text-blue-600 text-[10px] font-bold text-center">Layanan</span>
                                </div>
                                <div class="p-3.5 flex-1">
                                    <h3 class="text-[#1B1B1B] text-[13px] font-bold leading-snug mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Gratis Ongkir Penjemputan Donasi Barang</h3>
                                    <p class="text-gray-400 text-[10px] mb-3">Maks. jarak 15km</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1.5 text-amber-500 font-extrabold text-[14px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins w-4 h-4"><circle cx="8" cy="8" r="6"></circle><path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path><path d="M7 6h1v4"></path><path d="m16.71 13.88.7.71-2.82 2.82"></path></svg> 500
                                        </div>
                                        <button class="bg-[#D62828] text-white px-3 py-1.5 rounded-full text-[11px] font-bold active:scale-95 transition-transform">Tukar</button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Card 3 -->
                            <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex">
                                <div class="w-24 bg-emerald-50 flex flex-col items-center justify-center p-3 border-r border-dashed border-gray-200 relative">
                                    <div class="absolute -top-3 -right-3 w-6 h-6 bg-[#F4F6F9] rounded-full"></div>
                                    <div class="absolute -bottom-3 -right-3 w-6 h-6 bg-[#F4F6F9] rounded-full"></div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-8 h-8 text-emerald-500 mb-1"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg>
                                    <span class="text-emerald-600 text-[10px] font-bold text-center">Eksklusif</span>
                                </div>
                                <div class="p-3.5 flex-1">
                                    <h3 class="text-[#1B1B1B] text-[13px] font-bold leading-snug mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Sertifikat & Laporan Khusus</h3>
                                    <p class="text-gray-400 text-[10px] mb-3">Dikirim ke alamat Anda</p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1.5 text-amber-500 font-extrabold text-[14px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins w-4 h-4"><circle cx="8" cy="8" r="6"></circle><path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path><path d="M7 6h1v4"></path><path d="m16.71 13.88.7.71-2.82 2.82"></path></svg> 2,500
                                        </div>
                                        <button class="bg-gray-100 text-gray-400 px-3 py-1.5 rounded-full text-[11px] font-bold cursor-not-allowed">Poin Kurang</button>
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
