<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asuransi - Bakti Merah Putih</title>
    
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
                        <h1 class="text-[16px] font-extrabold text-[#1B1B1B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Asuransi Berkah</h1>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <button class="relative w-9 h-9 rounded-2xl bg-[#F4F6F9] flex items-center justify-center text-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-question w-4.5 h-4.5"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden animate-swipe-up">
                <div class="flex-1 flex flex-col overflow-hidden" style="opacity: 1; transform: none;">
                    <div class="flex-1 overflow-y-auto pb-24">
                        
                        <!-- Hero Asuransi -->
                        <div class="mx-4 mt-5 rounded-[20px] p-5 relative overflow-hidden" style="background: linear-gradient(135deg, rgb(18, 53, 91), rgb(71, 85, 105));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check absolute -right-6 -bottom-6 w-36 h-36 text-white opacity-10"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                            <div class="relative z-10">
                                <p class="text-white/80 text-[12px] font-bold mb-1">Perlindungan Penuh Berkah</p>
                                <h2 class="text-white text-[22px] font-extrabold mb-4 leading-snug" style="font-family: 'Plus Jakarta Sans', sans-serif;">Lindungi diri dan keluarga dengan Asuransi Syariah yang amanah.</h2>
                                
                                <div class="flex items-center gap-2">
                                    <div class="bg-white/20 backdrop-blur-sm px-2 py-1 rounded-md flex items-center gap-1.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle-2 w-3 h-3 text-emerald-300"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                        <span class="text-white text-[9px] font-bold">Sesuai Syariah</span>
                                    </div>
                                    <div class="bg-white/20 backdrop-blur-sm px-2 py-1 rounded-md flex items-center gap-1.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle-2 w-3 h-3 text-emerald-300"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
                                        <span class="text-white text-[9px] font-bold">Klaim Cepat</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Status Polis -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Polis Aktif Anda</h3>
                            <div class="bg-white rounded-[16px] p-4 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] border border-gray-100 flex flex-col items-center justify-center py-6">
                                <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-3 text-slate-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-x-2 w-8 h-8"><path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="m3 12 4 4"></path><path d="m7 12-4 4"></path></svg>
                                </div>
                                <h4 class="text-[13px] font-bold text-[#1B1B1B] mb-1">Belum ada polis aktif</h4>
                                <p class="text-[11px] text-gray-500 text-center max-w-[250px]">Anda belum terdaftar dalam program asuransi apapun. Pilih perlindungan di bawah ini.</p>
                            </div>
                        </div>

                        <!-- Pilihan Perlindungan -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Pilihan Perlindungan</h3>
                            
                            <!-- Asuransi Kesehatan -->
                            <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex mb-3 border border-gray-100">
                                <div class="w-24 bg-emerald-50 flex flex-col items-center justify-center p-3 border-r border-gray-100 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse w-8 h-8 text-emerald-500 mb-1"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path><path d="M3.22 12H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"></path></svg>
                                    <span class="text-emerald-600 text-[10px] font-bold text-center">Kesehatan</span>
                                </div>
                                <div class="p-3.5 flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="text-[#1B1B1B] text-[13px] font-bold leading-snug mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Asuransi Kesehatan Syariah</h3>
                                        <p class="text-gray-500 text-[10px] line-clamp-2">Rawat inap, rawat jalan, dan santunan harian di jaringan RS Syariah.</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-50">
                                        <div class="text-[#12355B] font-extrabold text-[12px]">Mulai Rp 50rb<span class="text-[9px] text-gray-400 font-normal">/bln</span></div>
                                        <button class="bg-[#12355B] text-white px-3 py-1.5 rounded-full text-[11px] font-bold active:scale-95 transition-transform">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Asuransi Jiwa -->
                            <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex mb-3 border border-gray-100">
                                <div class="w-24 bg-indigo-50 flex flex-col items-center justify-center p-3 border-r border-gray-100 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-indigo-500 mb-1"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    <span class="text-indigo-600 text-[10px] font-bold text-center">Jiwa Keluarga</span>
                                </div>
                                <div class="p-3.5 flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="text-[#1B1B1B] text-[13px] font-bold leading-snug mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Santunan Jiwa & Kematian</h3>
                                        <p class="text-gray-500 text-[10px] line-clamp-2">Santunan tutup usia untuk ahli waris agar keluarga tetap berdaya.</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-50">
                                        <div class="text-[#12355B] font-extrabold text-[12px]">Mulai Rp 35rb<span class="text-[9px] text-gray-400 font-normal">/bln</span></div>
                                        <button class="bg-[#12355B] text-white px-3 py-1.5 rounded-full text-[11px] font-bold active:scale-95 transition-transform">Lihat Detail</button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Asuransi Pendidikan -->
                            <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex border border-gray-100">
                                <div class="w-24 bg-amber-50 flex flex-col items-center justify-center p-3 border-r border-gray-100 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap w-8 h-8 text-amber-500 mb-1"><path d="M21.42 10.922a2 2 0 0 1-.019 3.138l-8.5 8.54a2 2 0 0 1-2.802 0l-8.5-8.54a2 2 0 0 1-.02-3.137l8.5-8.54a2 2 0 0 1 2.842 0z"></path><path d="M12 12v9"></path><path d="M15.42 16.92 21 11.4"></path></svg>
                                    <span class="text-amber-600 text-[10px] font-bold text-center">Pendidikan</span>
                                </div>
                                <div class="p-3.5 flex-1 flex flex-col justify-between">
                                    <div>
                                        <h3 class="text-[#1B1B1B] text-[13px] font-bold leading-snug mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dana Pendidikan Anak</h3>
                                        <p class="text-gray-500 text-[10px] line-clamp-2">Jaminan dana pendidikan hingga perguruan tinggi dengan prinsip bagi hasil.</p>
                                    </div>
                                    <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-50">
                                        <div class="text-[#12355B] font-extrabold text-[12px]">Mulai Rp 100rb<span class="text-[9px] text-gray-400 font-normal">/bln</span></div>
                                        <button class="bg-[#12355B] text-white px-3 py-1.5 rounded-full text-[11px] font-bold active:scale-95 transition-transform">Lihat Detail</button>
                                    </div>
                                </div>
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
