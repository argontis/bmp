<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakat - Bakti Merah Putih</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
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
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .pb-safe { padding-bottom: env(safe-area-inset-bottom, 16px); }
        
        @keyframes swipeUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        .animate-swipe-up {
            animation: swipeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</head>
<body class="bg-gray-50 antialiased">
    <div class="min-h-screen bg-[#F4F6F9] flex items-start justify-center" style="font-family: Inter, sans-serif;">
        <div class="relative w-full max-w-[430px] min-h-screen bg-[#F4F6F9] flex flex-col shadow-[0_0_80px_-20px_rgba(0,0,0,0.2)]">
            
            <!-- Header -->
            <div class="sticky top-0 z-20 bg-white border-b border-gray-100 px-4 pt-3 pb-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button onclick="window.history.back()" class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-50 text-[#1B1B1B]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-5 h-5"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                        </button>
                        <h1 class="text-[16px] font-extrabold text-[#1B1B1B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Tunaikan Zakat</h1>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <button class="relative w-9 h-9 rounded-2xl bg-[#F4F6F9] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell w-4.5 h-4.5 text-[#555]"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                            <span class="absolute top-1.5 right-1.5 w-1.5 h-1.5 rounded-full" style="background: rgb(214, 40, 40);"></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden animate-swipe-up">
                <div class="flex-1 flex flex-col overflow-hidden" style="opacity: 1; transform: none;">
                    <div class="flex-1 overflow-y-auto pb-24">
                        
                        <!-- Hero Zakat -->
                        <div class="mx-4 mt-5 rounded-[20px] p-5 relative overflow-hidden" style="background: linear-gradient(135deg, rgb(8, 145, 178), rgb(3, 105, 161));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet absolute -right-6 -bottom-6 w-36 h-36 text-white opacity-10"><path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path></svg>
                            <div class="relative z-10">
                                <p class="text-white/80 text-[12px] font-bold mb-1">Bersihkan Harta, Sucikan Jiwa</p>
                                <h2 class="text-white text-xl font-extrabold mb-4 leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">Ambilah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan mensucikan mereka.</h2>
                                <p class="text-white/60 text-[10px] font-medium">- QS. At-Taubah: 103</p>
                            </div>
                        </div>

                        <!-- Pilih Jenis Zakat -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Pilih Jenis Zakat</h3>
                            <div class="grid grid-cols-2 gap-3">
                                <!-- Zakat Penghasilan -->
                                <button class="bg-white rounded-[16px] p-3.5 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex flex-col items-start gap-2 border-2 border-transparent focus:border-cyan-500 active:scale-95 transition-all text-left">
                                    <div class="w-10 h-10 rounded-xl bg-cyan-50 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins w-5 h-5 text-cyan-600"><circle cx="8" cy="8" r="6"></circle><path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path><path d="M7 6h1v4"></path><path d="m16.71 13.88.7.71-2.82 2.82"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-[13px] font-extrabold text-[#1B1B1B]">Zakat Penghasilan</h4>
                                        <p class="text-[10px] text-gray-400 mt-0.5">2.5% dari gaji per bulan</p>
                                    </div>
                                </button>
                                
                                <!-- Zakat Maal -->
                                <button class="bg-white rounded-[16px] p-3.5 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex flex-col items-start gap-2 border-2 border-transparent focus:border-cyan-500 active:scale-95 transition-all text-left">
                                    <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark w-5 h-5 text-amber-500"><line x1="3" x2="21" y1="22" y2="22"></line><line x1="6" x2="6" y1="18" y2="11"></line><line x1="10" x2="10" y1="18" y2="11"></line><line x1="14" x2="14" y1="18" y2="11"></line><line x1="18" x2="18" y1="18" y2="11"></line><polygon points="12 2 20 7 4 7"></polygon></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-[13px] font-extrabold text-[#1B1B1B]">Zakat Maal (Harta)</h4>
                                        <p class="text-[10px] text-gray-400 mt-0.5">Tabungan, emas, dsb</p>
                                    </div>
                                </button>
                                
                                <!-- Zakat Fitrah -->
                                <button class="bg-white rounded-[16px] p-3.5 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex flex-col items-start gap-2 border-2 border-transparent focus:border-cyan-500 active:scale-95 transition-all text-left">
                                    <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wheat w-5 h-5 text-emerald-600"><path d="M2 22 22 2"></path><path d="M3.4 16.2 5.5 14c2.8-2.8 7.3-3.1 10.4-1.2l-2.4 2.4c-2.3-2.3-6-.7-6 2.5v1.2l-4.1 4.1c-1.3-2-.3-5 0-6.8"></path><path d="M7.8 20.6 10 18.5c2.8-2.8 3.1-7.3 1.2-10.4l-2.4 2.4c2.3 2.3.7 6-2.5 6h-1.2l-4.1 4.1c2-1.3 5-.3 6.8 0"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-[13px] font-extrabold text-[#1B1B1B]">Zakat Fitrah</h4>
                                        <p class="text-[10px] text-gray-400 mt-0.5">Diwajibkan di bulan Ramadhan</p>
                                    </div>
                                </button>
                                
                                <!-- Fidyah -->
                                <button class="bg-white rounded-[16px] p-3.5 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex flex-col items-start gap-2 border-2 border-transparent focus:border-cyan-500 active:scale-95 transition-all text-left">
                                    <div class="w-10 h-10 rounded-xl bg-rose-50 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake w-5 h-5 text-rose-500"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path><path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08v0c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"></path><path d="m18 15-2-2"></path><path d="m15 18-2-2"></path></svg>
                                    </div>
                                    <div>
                                        <h4 class="text-[13px] font-extrabold text-[#1B1B1B]">Fidyah Puasa</h4>
                                        <p class="text-[10px] text-gray-400 mt-0.5">Pengganti puasa yang ditinggalkan</p>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <!-- Kalkulator Zakat Cepat -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Kalkulator Zakat Penghasilan</h3>
                            <div class="bg-white rounded-[16px] p-4 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] border border-gray-100">
                                <label class="block text-[11px] font-bold text-gray-500 mb-1.5">Penghasilan Per Bulan (Rp)</label>
                                <div class="relative mb-3">
                                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 font-bold text-[13px]">Rp</span>
                                    <input type="text" placeholder="0" class="w-full pl-9 pr-4 py-2.5 bg-gray-50 rounded-xl text-[14px] font-bold text-[#1B1B1B] outline-none border border-gray-200 focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-all">
                                </div>
                                
                                <div class="bg-cyan-50 rounded-xl p-3 mb-4">
                                    <p class="text-[10px] text-cyan-800 font-medium mb-1">Zakat yang harus dibayar (2.5%):</p>
                                    <p class="text-[18px] font-extrabold text-cyan-600" style="font-family: 'Plus Jakarta Sans', sans-serif;">Rp 0</p>
                                </div>

                                <button class="w-full py-2.5 rounded-full text-[13px] font-extrabold text-white transition-all active:scale-95 bg-cyan-600 shadow-[0_4px_12px_-4px_rgba(8,145,178,0.5)]">
                                    Bayar Zakat Sekarang
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <!-- Bottom Navigation -->
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
