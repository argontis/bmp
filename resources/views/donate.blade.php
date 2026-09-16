<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi - Bakti Merah Putih</title>
    
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
<body class="bg-gray-50 antialiased overflow-hidden">
    <!-- Background Content (Dashboard View) -->
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
                        <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=120&amp;h=120&amp;fit=crop&amp;auto=format" alt="Ahmad Fauzi" class="w-9 h-9 rounded-2xl object-cover ring-2" style="--tw-ring-color: #D6282833;">
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-center mt-2 pt-2 border-t border-gray-100">
                    <img src="/images/logo.webp" alt="Bakti Merah Putih" class="h-7 w-auto object-contain" style="filter: invert(1) sepia(1) saturate(3) hue-rotate(330deg) brightness(0.6);">
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
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(255, 251, 235);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gift w-6 h-6" style="color: rgb(217, 119, 6);"><rect x="3" y="8" width="18" height="4" rx="1"></rect><path d="M12 8v13"></path><path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path><path d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Reward</span>
                                </button>
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(240, 253, 244);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-column w-6 h-6" style="color: rgb(22, 163, 74);"><line x1="18" x2="18" y1="20" y2="10"></line><line x1="12" x2="12" y1="20" y2="4"></line><line x1="6" x2="6" y1="20" y2="14"></line></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Dampak</span>
                                </button>
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(236, 254, 255);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 w-6 h-6" style="color: rgb(8, 145, 178);"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Zakat</span>
                                </button>
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(254, 242, 242);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-6 h-6" style="color: rgb(220, 38, 38);"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Darurat</span>
                                </button>
                                <button class="flex flex-col items-center gap-1.5">
                                    <div class="w-14 h-14 rounded-2xl flex items-center justify-center active:scale-90 transition-transform" style="background: rgb(249, 250, 251);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-6 h-6" style="color: rgb(55, 65, 81);"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
                                    </div>
                                    <span class="text-[10px] font-semibold text-gray-500">Asuransi</span>
                                </button>
                            </div>
                        </div>
                        
                        <!-- More Dashboard content removed for brevity, as it is partially hidden by modal -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Overlay untuk Donasi -->
    <div class="fixed inset-0 z-50 flex items-end justify-center">
        <!-- Backdrop -->
        <div onclick="window.location.href='/dashboard'" class="absolute inset-0 bg-black/50 backdrop-blur-sm cursor-pointer"></div>
        
        <!-- Bottom Sheet Modal -->
        <div class="relative bg-white rounded-t-[28px] w-full max-w-[430px] overflow-hidden shadow-2xl" style="max-height: 90vh; transform: none;">
            
            <div class="flex justify-center pt-3 pb-1">
                <div class="w-10 h-1 rounded-full bg-gray-200"></div>
            </div>
            
            <div class="flex items-center gap-3 px-5 py-3 border-b border-gray-100">
                <div class="w-12 h-12 rounded-2xl overflow-hidden shrink-0 bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1641886000798-41c1adbebb3b?w=600&amp;h=360&amp;fit=crop&amp;auto=format" alt="Beasiswa untuk 100 Anak Berprestasi di NTT" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-[12px] font-extrabold text-[#1B1B1B] line-clamp-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Beasiswa untuk 100 Anak Berprestasi di NTT</p>
                    <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden mt-1 mb-1">
                        <div class="h-full rounded-full" style="width: 75%; background: linear-gradient(90deg, rgb(185, 28, 28), rgb(214, 40, 40));"></div>
                    </div>
                    <p class="text-[10px] text-gray-400 mt-0.5">Rp 112.500.000 terkumpul · 75%</p>
                </div>
                <button onclick="window.location.href='/dashboard'" class="w-7 h-7 rounded-full bg-gray-100 flex items-center justify-center shrink-0 hover:bg-gray-200 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x w-3.5 h-3.5 text-gray-500"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                </button>
            </div>
            
            <div class="px-5 py-4 overflow-y-auto" style="max-height: calc(-120px + 90vh); opacity: 1; transform: none;">
                <p class="text-[12px] font-extrabold text-gray-500 uppercase tracking-widest mb-3">Pilih Nominal</p>
                
                <div class="grid grid-cols-3 gap-2.5 mb-4">
                    <button data-value="25000" class="nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all bg-gray-50 border-gray-200 text-gray-600 hover:border-gray-300">Rp25.000</button>
                    <button data-value="50000" class="nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all bg-gray-50 border-gray-200 text-gray-600 hover:border-gray-300">Rp50.000</button>
                    <button data-value="100000" class="nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all text-white border-transparent shadow-md" style="background: rgb(214, 40, 40); border-color: rgb(214, 40, 40);">Rp100.000</button>
                    <button data-value="250000" class="nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all bg-gray-50 border-gray-200 text-gray-600 hover:border-gray-300">Rp250.000</button>
                    <button data-value="500000" class="nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all bg-gray-50 border-gray-200 text-gray-600 hover:border-gray-300">Rp500.000</button>
                    <button data-value="1000000" class="nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all bg-gray-50 border-gray-200 text-gray-600 hover:border-gray-300">Rp1.000.000</button>
                </div>
                
                <div class="relative mb-4">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-[13px] font-bold text-gray-400">Rp</span>
                    <input type="number" id="custom-nominal" placeholder="Nominal lain" class="w-full pl-10 pr-4 py-3.5 rounded-2xl border border-gray-200 bg-gray-50 text-[13px] placeholder-gray-400 outline-none focus:border-transparent focus:ring-2 transition-all" value="" style="--tw-ring-color: #D62828;">
                </div>
                
                <div class="flex items-center gap-2.5 bg-red-50 rounded-2xl p-3 mb-5 border border-red-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 shrink-0" style="color: rgb(214, 40, 40);"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path><path d="M20 3v4"></path><path d="M22 5h-4"></path><path d="M4 17v2"></path><path d="M5 18H3"></path></svg>
                    <p class="text-[12px] font-semibold text-gray-700">Menyediakan buku &amp; alat tulis untuk 2 anak</p>
                </div>
                
                <p class="text-[12px] font-extrabold text-gray-500 uppercase tracking-widest mb-3">Metode Pembayaran</p>
                <div class="space-y-2.5 mb-6">
                    <button data-value="BCA" class="payment-btn w-full flex items-center justify-between p-3 rounded-2xl border transition-all border-red-500 bg-red-50">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-8 rounded-lg bg-white flex items-center justify-center shrink-0 border border-gray-100">
                                <span class="text-blue-800 font-extrabold text-[10px] italic">BCA</span>
                            </div>
                            <span class="text-[13px] font-bold text-gray-700">Transfer BCA</span>
                        </div>
                        <div class="w-4 h-4 rounded-full border-4 border-red-500 bg-white check-indicator"></div>
                    </button>
                    <button data-value="OVO" class="payment-btn w-full flex items-center justify-between p-3 rounded-2xl border transition-all border-gray-200 bg-gray-50 hover:border-gray-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-8 rounded-lg bg-white flex items-center justify-center shrink-0 border border-gray-100">
                                <span class="text-purple-600 font-extrabold text-[10px] italic">OVO</span>
                            </div>
                            <span class="text-[13px] font-bold text-gray-700">OVO</span>
                        </div>
                        <div class="w-4 h-4 rounded-full border-2 border-gray-300 bg-white check-indicator"></div>
                    </button>
                    <button data-value="GoPay" class="payment-btn w-full flex items-center justify-between p-3 rounded-2xl border transition-all border-gray-200 bg-gray-50 hover:border-gray-300">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-8 rounded-lg bg-white flex items-center justify-center shrink-0 border border-gray-100">
                                <span class="text-blue-500 font-extrabold text-[10px]">GoPay</span>
                            </div>
                            <span class="text-[13px] font-bold text-gray-700">GoPay</span>
                        </div>
                        <div class="w-4 h-4 rounded-full border-2 border-gray-300 bg-white check-indicator"></div>
                    </button>
                </div>

                <button id="lanjutkan-btn" onclick="window.location.href='/dashboard'" class="w-full py-4 rounded-2xl text-[15px] font-extrabold text-white transition-all disabled:opacity-40 flex items-center justify-center gap-2" style="background: rgb(214, 40, 40);">
                    Lanjutkan · Rp 100.000
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                </button>
            </div>
            
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nominalButtons = document.querySelectorAll('.nominal-btn');
            const customNominalInput = document.getElementById('custom-nominal');
            const lanjutkanBtn = document.getElementById('lanjutkan-btn');
            const paymentMethods = document.querySelectorAll('.payment-btn');
            let selectedNominal = 100000;
            let selectedPayment = 'BCA';
            
            function formatRupiah(number) {
                return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(number);
            }
            
            function updateUI() {
                nominalButtons.forEach(btn => {
                    const val = parseInt(btn.dataset.value);
                    if (val === selectedNominal && !customNominalInput.value) {
                        btn.className = "nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all text-white border-transparent shadow-md";
                        btn.style.background = "rgb(214, 40, 40)";
                        btn.style.borderColor = "rgb(214, 40, 40)";
                    } else {
                        btn.className = "nominal-btn py-3 rounded-2xl text-[12px] font-extrabold border transition-all bg-gray-50 border-gray-200 text-gray-600 hover:border-gray-300";
                        btn.style.background = "";
                        btn.style.borderColor = "";
                    }
                });
                
                paymentMethods.forEach(btn => {
                    const val = btn.dataset.value;
                    const indicator = btn.querySelector('.check-indicator');
                    if (val === selectedPayment) {
                        btn.classList.add('border-red-500', 'bg-red-50');
                        btn.classList.remove('border-gray-200', 'bg-gray-50', 'hover:border-gray-300');
                        indicator.classList.remove('border-2', 'border-gray-300');
                        indicator.classList.add('border-4', 'border-red-500');
                    } else {
                        btn.classList.remove('border-red-500', 'bg-red-50');
                        btn.classList.add('border-gray-200', 'bg-gray-50', 'hover:border-gray-300');
                        indicator.classList.remove('border-4', 'border-red-500');
                        indicator.classList.add('border-2', 'border-gray-300');
                    }
                });
                
                lanjutkanBtn.innerHTML = \`Lanjutkan · \${formatRupiah(selectedNominal)} <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>\`;
            }
            
            nominalButtons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    selectedNominal = parseInt(e.currentTarget.dataset.value);
                    customNominalInput.value = '';
                    updateUI();
                });
            });
            
            customNominalInput.addEventListener('input', (e) => {
                const val = parseInt(e.target.value);
                if (!isNaN(val) && val > 0) {
                    selectedNominal = val;
                } else {
                    selectedNominal = 0;
                }
                updateUI();
            });
            
            paymentMethods.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const targetBtn = e.currentTarget;
                    selectedPayment = targetBtn.dataset.value;
                    updateUI();
                });
            });
            
            updateUI();
        });
    </script>
</body>
</html>
