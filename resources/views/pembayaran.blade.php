<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Pembayaran - Bakti Merah Putih</title>
    
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
                        <h1 class="text-[16px] font-extrabold text-[#1B1B1B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Kelola Pembayaran</h1>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden animate-swipe-up">
                <div class="flex-1 flex flex-col overflow-hidden" style="opacity: 1; transform: none;">
                    <div class="flex-1 overflow-y-auto pb-24">
                        
                        <!-- Saldo E-Wallet -->
                        <div class="mx-4 mt-5">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Saldo Kebaikan</h3>
                            <div class="bg-white rounded-[20px] p-5 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-32 h-32 bg-rose-50 rounded-full blur-2xl -mr-10 -mt-10"></div>
                                <div class="relative z-10 flex items-center justify-between">
                                    <div>
                                        <p class="text-gray-500 text-[11px] font-bold mb-1">Saldo Tersedia</p>
                                        <p class="text-[#1B1B1B] text-[24px] font-extrabold leading-none" style="font-family: 'Plus Jakarta Sans', sans-serif;">Rp 125.000</p>
                                    </div>
                                    <button class="bg-[#D62828] text-white px-4 py-2 rounded-full text-[11px] font-bold active:scale-95 transition-transform flex items-center gap-1.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-3.5 h-3.5"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg> Top Up
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Metode Tersimpan -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Metode Tersimpan</h3>
                            
                            <div class="space-y-3">
                                <!-- OVO -->
                                <div class="bg-white rounded-[16px] p-3 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-center justify-between border border-emerald-50">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-10 rounded-xl bg-purple-50 flex items-center justify-center shrink-0 border border-gray-100">
                                            <span class="text-purple-600 font-extrabold text-[12px] italic">OVO</span>
                                        </div>
                                        <div>
                                            <p class="text-[13px] font-bold text-[#1B1B1B]">OVO - 0812****990</p>
                                            <span class="text-[10px] text-emerald-600 font-bold bg-emerald-50 px-2 py-0.5 rounded-full mt-1 inline-block">Utama</span>
                                        </div>
                                    </div>
                                    <button class="text-gray-400 p-2 active:scale-95">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    </button>
                                </div>
                                
                                <!-- GoPay -->
                                <div class="bg-white rounded-[16px] p-3 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-center justify-between border border-transparent">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-10 rounded-xl bg-blue-50 flex items-center justify-center shrink-0 border border-gray-100">
                                            <span class="text-blue-500 font-extrabold text-[11px]">GoPay</span>
                                        </div>
                                        <div>
                                            <p class="text-[13px] font-bold text-[#1B1B1B]">GoPay - 0812****990</p>
                                        </div>
                                    </div>
                                    <button class="text-gray-400 p-2 active:scale-95">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    </button>
                                </div>
                                
                                <!-- BCA -->
                                <div class="bg-white rounded-[16px] p-3 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-center justify-between border border-transparent">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-10 rounded-xl bg-gray-50 flex items-center justify-center shrink-0 border border-gray-100">
                                            <span class="text-blue-800 font-extrabold text-[12px] italic">BCA</span>
                                        </div>
                                        <div>
                                            <p class="text-[13px] font-bold text-[#1B1B1B]">Bank BCA</p>
                                            <p class="text-[11px] text-gray-500 mt-0.5">**** **** 8821</p>
                                        </div>
                                    </div>
                                    <button class="text-gray-400 p-2 active:scale-95">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                    </button>
                                </div>
                            </div>
                            
                            <button class="w-full mt-4 flex items-center justify-center gap-2 py-3.5 rounded-[16px] border border-dashed border-gray-300 bg-gray-50 text-[13px] font-bold text-gray-500 active:bg-gray-100 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus w-4 h-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                Tambah Metode Pembayaran
                            </button>
                        </div>
                        
                        <!-- Auto-Debet -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Donasi Rutin (Auto-Debet)</h3>
                            <div class="bg-white rounded-[16px] p-4 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-start justify-between">
                                <div>
                                    <p class="text-[13px] font-bold text-[#1B1B1B] mb-1">Sedekah Subuh Harian</p>
                                    <p class="text-[11px] text-gray-500 mb-2">Rp 10.000 / hari dari saldo OVO</p>
                                    <div class="flex items-center gap-1.5 text-[10px] text-emerald-600 font-bold">
                                        <span class="relative flex h-2 w-2">
                                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                          <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                        </span>
                                        Aktif
                                    </div>
                                </div>
                                <div class="relative inline-block w-10 mr-2 align-middle select-none">
                                    <input type="checkbox" checked name="toggle" id="toggle1" class="checked:bg-emerald-500 outline-none focus:outline-none right-0 duration-200 ease-in absolute block w-5 h-5 rounded-full bg-white border-4 border-emerald-500 appearance-none cursor-pointer" style="top: -2px; right: -2px; border-width: 5px;"/>
                                    <label for="toggle1" class="block overflow-hidden h-4 rounded-full bg-emerald-200 cursor-pointer"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
