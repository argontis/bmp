<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privasi & Keamanan - Bakti Merah Putih</title>
    
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
            animation: swipeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        
        /* Toggle Switch */
        .toggle-checkbox:checked {
            right: 0;
            border-color: #10B981;
        }
        .toggle-checkbox:checked + .toggle-label {
            background-color: #10B981;
        }
    </style>
</head>
<body class="bg-gray-50 antialiased">
    <div class="min-h-screen bg-[#F4F6F9] flex items-start justify-center" style="font-family: Inter, sans-serif;">
        <div class="relative w-full max-w-[430px] min-h-screen bg-[#F4F6F9] flex flex-col shadow-[0_0_80px_-20px_rgba(0,0,0,0.2)]">
            
            <!-- Header -->
            <div class="sticky top-0 z-20 bg-white border-b border-gray-100 px-4 pt-3 pb-3 shadow-sm">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button onclick="window.history.back()" class="w-9 h-9 flex items-center justify-center rounded-full bg-gray-50 text-[#1B1B1B] active:scale-95 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-5 h-5"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                        </button>
                        <h1 class="text-[16px] font-extrabold text-[#1B1B1B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Privasi & Keamanan</h1>
                    </div>
                </div>
            </div>
            
            <div class="flex-1 overflow-y-auto pb-24 animate-swipe-up">
                
                <!-- Status Keamanan -->
                <div class="bg-[#12355B] px-5 py-6 text-white text-center rounded-b-[24px] shadow-md relative overflow-hidden">
                    <div class="absolute inset-0 opacity-[0.05]" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 16px 16px;"></div>
                    <div class="relative z-10 flex flex-col items-center">
                        <div class="w-16 h-16 bg-emerald-500/20 rounded-full flex items-center justify-center mb-3">
                            <div class="w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center shadow-[0_0_15px_rgba(16,185,129,0.5)]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-6 h-6 text-white"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                            </div>
                        </div>
                        <h2 class="text-lg font-extrabold" style="font-family: 'Plus Jakarta Sans', sans-serif;">Akun Anda Aman</h2>
                        <p class="text-xs text-white/70 mt-1 max-w-[250px]">Kami menjaga privasi dan keamanan data donasi Anda dengan enkripsi end-to-end.</p>
                    </div>
                </div>

                <!-- Settings List -->
                <div class="px-4 mt-6 space-y-4">
                    
                    <!-- Keamanan Akun -->
                    <div>
                        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-3 px-1">Keamanan Akun</h3>
                        <div class="bg-white rounded-[20px] shadow-[0_2px_12px_-4px_rgba(0,0,0,0.05)] overflow-hidden">
                            <button class="w-full flex items-center justify-between p-4 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                <div class="flex items-center gap-3.5">
                                    <div class="w-9 h-9 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key-round w-4.5 h-4.5"><path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"></path><circle cx="16.5" cy="7.5" r=".5"></circle></svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-[13px] font-bold text-[#1B1B1B]">Ubah Kata Sandi</p>
                                        <p class="text-[11px] text-gray-400 mt-0.5">Terakhir diubah 3 bulan lalu</p>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                            
                            <div class="w-full flex items-center justify-between p-4 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                <div class="flex items-center gap-3.5">
                                    <div class="w-9 h-9 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone-nfc w-4.5 h-4.5"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path><path d="M8 8a2 2 0 0 1 3-1.5"></path><path d="M8 12a4 4 0 0 1 5.3-3.6"></path></svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-[13px] font-bold text-[#1B1B1B]">Autentikasi 2 Langkah (2FA)</p>
                                        <p class="text-[11px] text-emerald-500 font-semibold mt-0.5">Sudah Aktif</p>
                                    </div>
                                </div>
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle" id="toggle-2fa" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white border-4 appearance-none cursor-pointer border-emerald-500 checked:right-0 right-0 z-10" checked/>
                                    <label for="toggle-2fa" class="toggle-label block overflow-hidden h-5 rounded-full bg-emerald-500 cursor-pointer"></label>
                                </div>
                            </div>

                            <button class="w-full flex items-center justify-between p-4 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center gap-3.5">
                                    <div class="w-9 h-9 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history w-4.5 h-4.5"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-[13px] font-bold text-[#1B1B1B]">Riwayat Login</p>
                                        <p class="text-[11px] text-gray-400 mt-0.5">Lihat perangkat aktif</p>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Privasi Data -->
                    <div>
                        <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-3 px-1 mt-6">Privasi Data</h3>
                        <div class="bg-white rounded-[20px] shadow-[0_2px_12px_-4px_rgba(0,0,0,0.05)] overflow-hidden">
                            <div class="w-full flex items-center justify-between p-4 hover:bg-gray-50 transition-colors border-b border-gray-100">
                                <div class="flex items-center gap-3.5">
                                    <div class="w-9 h-9 rounded-xl bg-amber-50 flex items-center justify-center text-amber-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off w-4.5 h-4.5"><path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path><path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path><path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path><line x1="2" x2="22" y1="2" y2="22"></line></svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-[13px] font-bold text-[#1B1B1B]">Sembunyikan Identitas (Hamba Allah)</p>
                                        <p class="text-[11px] text-gray-400 mt-0.5">Donasi secara anonim secara default</p>
                                    </div>
                                </div>
                                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                                    <input type="checkbox" name="toggle" id="toggle-anon" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white border-4 appearance-none cursor-pointer border-gray-300 left-0 z-10"/>
                                    <label for="toggle-anon" class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 cursor-pointer"></label>
                                </div>
                            </div>
                            
                            <button class="w-full flex items-center justify-between p-4 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center gap-3.5">
                                    <div class="w-9 h-9 rounded-xl bg-gray-50 flex items-center justify-center text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-4.5 h-4.5"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-[13px] font-bold text-[#1B1B1B]">Kebijakan Privasi KAMI</p>
                                        <p class="text-[11px] text-gray-400 mt-0.5">Baca bagaimana kami mengelola data Anda</p>
                                    </div>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4 text-gray-300"><path d="m9 18 6-6-6-6"></path></svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Hapus Akun -->
                    <div class="pt-4 pb-6">
                        <button class="w-full py-4 rounded-[16px] bg-red-50 border border-red-100 text-[13px] font-bold text-red-600 hover:bg-red-100 transition-colors flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2 w-4 h-4"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg>
                            Ajukan Penghapusan Akun
                        </button>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
