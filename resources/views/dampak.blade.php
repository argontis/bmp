<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dampak - Bakti Merah Putih</title>
    
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
                        <h1 class="text-[16px] font-extrabold text-[#1B1B1B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Laporan Dampak</h1>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <button class="relative w-9 h-9 rounded-2xl bg-[#F4F6F9] flex items-center justify-center text-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share-2 w-4.5 h-4.5"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line><line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line></svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden animate-swipe-up">
                <div class="flex-1 flex flex-col overflow-hidden" style="opacity: 1; transform: none;">
                    <div class="flex-1 overflow-y-auto pb-24">
                        
                        <!-- Hero Impact -->
                        <div class="mx-4 mt-5 rounded-[20px] p-5 relative overflow-hidden" style="background: linear-gradient(135deg, rgb(16, 185, 129), rgb(5, 150, 105));">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-leaf absolute -right-4 -bottom-4 w-32 h-32 text-white opacity-10"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path></svg>
                            <div class="relative z-10">
                                <p class="text-white/80 text-[12px] font-bold mb-1">Dampak Bersama di Tahun 2026</p>
                                <h2 class="text-white text-3xl font-extrabold mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">1,2 Juta Jiwa<br><span class="text-[15px] font-semibold text-white/80">Telah Terbantu Oleh Donasi Anda</span></h2>
                                
                                <div class="grid grid-cols-2 gap-3 mt-5">
                                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5 text-white mb-1.5"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 15 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        <p class="text-white text-[16px] font-extrabold">34 Provinsi</p>
                                        <p class="text-white/70 text-[10px]">Wilayah Jangkauan</p>
                                    </div>
                                    <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2 w-5 h-5 text-white mb-1.5"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                                        <p class="text-white text-[16px] font-extrabold">840+ Fasilitas</p>
                                        <p class="text-white/70 text-[10px]">Dibangun/Direnovasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kategori Dampak -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Penyaluran Berdasarkan Kategori</h3>
                            <div class="bg-white rounded-[16px] p-4 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)]">
                                
                                <!-- Progress Item -->
                                <div class="mb-4">
                                    <div class="flex justify-between text-[11px] font-bold mb-1.5">
                                        <span class="flex items-center gap-1.5 text-blue-600">
                                            <div class="w-2 h-2 rounded-full bg-blue-600"></div> Pendidikan (40%)
                                        </span>
                                        <span class="text-gray-500">Rp 12.5 Miliar</span>
                                    </div>
                                    <div class="h-2 rounded-full bg-gray-100 overflow-hidden">
                                        <div class="h-full rounded-full bg-blue-600" style="width: 40%;"></div>
                                    </div>
                                </div>
                                
                                <!-- Progress Item -->
                                <div class="mb-4">
                                    <div class="flex justify-between text-[11px] font-bold mb-1.5">
                                        <span class="flex items-center gap-1.5 text-emerald-600">
                                            <div class="w-2 h-2 rounded-full bg-emerald-600"></div> Kesehatan (30%)
                                        </span>
                                        <span class="text-gray-500">Rp 9.2 Miliar</span>
                                    </div>
                                    <div class="h-2 rounded-full bg-gray-100 overflow-hidden">
                                        <div class="h-full rounded-full bg-emerald-600" style="width: 30%;"></div>
                                    </div>
                                </div>
                                
                                <!-- Progress Item -->
                                <div class="mb-4">
                                    <div class="flex justify-between text-[11px] font-bold mb-1.5">
                                        <span class="flex items-center gap-1.5 text-rose-600">
                                            <div class="w-2 h-2 rounded-full bg-rose-600"></div> Bencana (20%)
                                        </span>
                                        <span class="text-gray-500">Rp 6.1 Miliar</span>
                                    </div>
                                    <div class="h-2 rounded-full bg-gray-100 overflow-hidden">
                                        <div class="h-full rounded-full bg-rose-600" style="width: 20%;"></div>
                                    </div>
                                </div>

                                <!-- Progress Item -->
                                <div>
                                    <div class="flex justify-between text-[11px] font-bold mb-1.5">
                                        <span class="flex items-center gap-1.5 text-amber-500">
                                            <div class="w-2 h-2 rounded-full bg-amber-500"></div> Pangan (10%)
                                        </span>
                                        <span class="text-gray-500">Rp 3.1 Miliar</span>
                                    </div>
                                    <div class="h-2 rounded-full bg-gray-100 overflow-hidden">
                                        <div class="h-full rounded-full bg-amber-500" style="width: 10%;"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Cerita Dampak (Stories) -->
                        <div class="mt-6 px-4">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Cerita Dampak Terkini</h3>
                            
                            <div class="space-y-4">
                                <!-- Story Card -->
                                <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)]">
                                    <div class="h-[140px] bg-gray-100 relative">
                                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600&h=300&fit=crop" class="w-full h-full object-cover" alt="Anak-anak belajar">
                                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded-md text-[10px] font-bold text-blue-600">
                                            Update Pendidikan
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h4 class="text-[13px] font-bold text-[#1B1B1B] leading-snug mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">SDN 04 pelosok NTT kini miliki perpustakaan baru</h4>
                                        <p class="text-[11px] text-gray-500 mb-3 line-clamp-2">Berkat donasi Anda, 250 siswa SDN 04 kini dapat membaca buku pelajaran dan cerita dengan fasilitas yang layak dan nyaman.</p>
                                        <button class="text-[11px] font-extrabold text-emerald-600 flex items-center gap-1">Baca selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-3 h-3"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
                                    </div>
                                </div>
                                
                                <!-- Story Card -->
                                <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)]">
                                    <div class="h-[140px] bg-gray-100 relative">
                                        <img src="https://images.unsplash.com/photo-1625236601674-8702e197b5b4?w=600&h=300&fit=crop" class="w-full h-full object-cover" alt="Dapur Umum">
                                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded-md text-[10px] font-bold text-rose-600">
                                            Update Bencana
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h4 class="text-[13px] font-bold text-[#1B1B1B] leading-snug mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">Penyaluran 5,000 paket sembako untuk korban banjir Demak</h4>
                                        <p class="text-[11px] text-gray-500 mb-3 line-clamp-2">Relawan Bakti Merah Putih telah berhasil mendistribusikan kebutuhan pangan darurat untuk 3 desa terisolir.</p>
                                        <button class="text-[11px] font-extrabold text-emerald-600 flex items-center gap-1">Baca selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-3 h-3"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></button>
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
