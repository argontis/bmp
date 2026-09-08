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
        .htmx-added { transition: all 0.2s ease-in; }

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
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="bg-gray-50 antialiased">
    <!-- MOBILE VIEW (Hidden on Tablet and Desktop) -->
    <div class="block md:hidden">

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
                    <button hx-get="/dashboard" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Beranda</span>
                    </button>
                    <button class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search w-5 h-5 transition-colors" style="color: rgb(214, 40, 40);"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        <span class="text-[9px] font-bold transition-colors " style="color: rgb(214, 40, 40);">Jelajahi</span>
                    </button>
                    <button hx-get="/donate" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-0.5 -mt-5">
                        <div class="w-14 h-14 rounded-full flex items-center justify-center shadow-[0_8px_24px_-6px_rgba(214,40,40,0.7)] active:scale-95 transition-transform" style="background: rgb(214, 40, 40);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart w-6 h-6 text-white fill-white"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                        </div>
                        <span class="text-[9px] font-bold mt-0.5" style="color: rgb(214, 40, 40);">Donasi</span>
                    </button>
                    <button hx-get="/history" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Riwayat</span>
                    </button>
                    <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-5 h-5 transition-colors" style="color: rgb(156, 163, 175);"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="text-[9px] font-bold transition-colors text-gray-400">Akun</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>

    </div>

    <!-- TABLET & DESKTOP VIEW (Hidden on Mobile) -->
    <div class="hidden md:block">
        <main class="min-h-screen bg-[#FBFAF7] font-['Inter'] text-[#12355B] selection:bg-[#D62828] selection:text-white">
            <header class="sticky top-0 z-40 border-b border-[#12355B]/10 bg-[#FBFAF7]/95 backdrop-blur-md">
                <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-6">
                        <button class="flex items-center gap-2"><img src="{{ asset('images/logo.png') }}" alt="Bakti Merah Putih" class="h-9 w-auto"></button>
                        <span class="hidden h-5 w-px bg-[#12355B]/15 sm:inline-block"></span>
                        <span class="hidden text-xs font-bold uppercase tracking-wider text-[#D62828] sm:inline-block">Portal Donatur Terverifikasi</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <button class="relative rounded-full bg-[#F1EEE8] p-2 hover:bg-[#E5E0D8] transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell text-[#12355B]">
                                <path d="M10.268 21a2 2 0 0 0 3.464 0"></path>
                                <path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path>
                            </svg>
                            <span class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-[#D62828]"></span>
                        </button>
                        <div class="flex items-center gap-3 border-l border-[#12355B]/10 pl-4">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs font-bold text-[#12355B]">Nabila Arimbi</p>
                                <p class="text-[10px] text-[#62758A]">Donatur Dermawan</p>
                            </div>
                            <button class="grid h-9 w-9 place-items-center rounded-full bg-[#12355B] text-xs font-bold text-white shadow">NA</button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
                <div class="grid gap-8 lg:grid-cols-[260px_1fr]">
                    <aside class="hidden lg:block space-y-6">
                        <div class="rounded-2xl border border-[#12355B]/10 bg-white p-5 shadow-sm">
                            <div class="flex items-center gap-3 pb-4 border-b border-[#12355B]/10">
                                <div class="grid h-12 w-12 place-items-center rounded-full bg-[#12355B] font-bold text-white text-base">NA</div>
                                <div>
                                    <p class="font-['Plus_Jakarta_Sans'] font-bold text-sm text-[#12355B]">Nabila Arimbi</p>
                                    <span class="inline-block rounded-full bg-[#16A34A]/10 px-2 py-0.5 text-[10px] font-bold text-[#16A34A]">✓ Akun Terverifikasi</span>
                                </div>
                            </div>
                            <nav class="mt-4 space-y-1">
                                <button hx-get="/dashboard" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house">
                                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                        <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    </svg>
                                    Beranda Dashboard
                                </button>
                                <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition bg-[#12355B] text-white shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                    Jelajah 5 Kategori
                                </button>
                                <button hx-get="/history" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text">
                                        <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path>
                                        <path d="M14 8H8"></path>
                                        <path d="M16 12H8"></path>
                                        <path d="M13 16H8"></path>
                                    </svg>
                                    Riwayat &amp; Bukti Donasi
                                </button>
                                <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round">
                                        <circle cx="12" cy="8" r="5"></circle>
                                        <path d="M20 21a8 8 0 0 0-16 0"></path>
                                    </svg>
                                    Pengaturan Akun
                                </button>
                            </nav>
                        </div>
                        <div class="rounded-2xl bg-[#D62828] p-5 text-white shadow-md">
                            <p class="text-[10px] font-extrabold uppercase tracking-widest text-white/80">Donasi Cepat</p>
                            <h3 class="mt-1 font-['Plus_Jakarta_Sans'] text-lg font-bold">Salurkan Kepedulian Hari Ini</h3>
                            <p class="mt-2 text-xs text-white/80 leading-relaxed">Pilih program terkurasi dan pantau perkembangan dampaknya secara transparan.</p>
                            <button onclick="openDesktopDonationModal(); event.preventDefault();" class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-white py-2.5 text-xs font-bold text-[#D62828] transition hover:bg-[#fff1f1]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart">
                                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                                </svg> Donasi Sekarang
                            </button>
                        </div>
                    </aside>
                    <section class="space-y-6">
                        <div class="space-y-6 pb-8">
                            <div>
                                <h2 class="font-['Plus_Jakarta_Sans'] text-2xl font-extrabold text-[#12355B]">Jelajah Program Donasi</h2>
                                <p class="mt-1 text-xs text-[#62758A]">Cari berdasarkan kata kunci atau pilih dari 5 kategori utama Bakti Merah Putih.</p>
                            </div>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-4 top-1/2 -translate-y-1/2 text-[#8192A3]">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                                <input type="text" placeholder="Cari program (contoh: terapi, air bersih, guru, takjil, sajadah)..." class="w-full rounded-2xl border border-[#12355B]/15 bg-white py-3.5 pl-11 pr-4 text-sm outline-none focus:border-[#D62828] focus:ring-1 focus:ring-[#D62828] shadow-sm" value="">
                            </div>
                            <div class="grid grid-cols-2 gap-3 sm:grid-cols-5">
                                <button hx-get="/program/bakti-kesehatan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope text-[#12355B]"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg>
                                    <span class="mt-2 text-xs font-semibold leading-tight">Kesehatan</span>
                                </button>
                                <button hx-get="/program/bakti-pendidikan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap text-[#12355B]"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
                                    <span class="mt-2 text-xs font-semibold leading-tight">Pendidikan</span>
                                </button>
                                <button hx-get="/program/bakti-bencana" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-[#12355B]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    <span class="mt-2 text-xs font-semibold leading-tight">Sosial &amp; Kemanusiaan</span>
                                </button>
                                <button hx-get="/program/bakti-lingkungan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-droplets text-[#12355B]"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"></path><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"></path></svg>
                                    <span class="mt-2 text-xs font-semibold leading-tight">Lingkungan</span>
                                </button>
                                <button hx-get="/program/bakti-kesehatan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#12355B]"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                                    <span class="mt-2 text-xs font-semibold leading-tight">Fasilitas Ibadah</span>
                                </button>
                            </div>
                            <div class="space-y-4">
                                <p class="text-xs font-bold text-[#62758A]">Menampilkan 5 Program</p>
                                <div class="grid gap-6 sm:grid-cols-2">
                                    <article class="flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer" hx-get="/program/bakti-kesehatan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true">
                                        <div>
                                            <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                <img src="{{ asset('images/program-kesehatan.png') }}" alt="Terapi Medis Gratis" class="h-full w-full object-cover">
                                                <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope text-[#F4AAAA]"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg> Kesehatan
                                                </span>
                                                <span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">Darurat Medis</span>
                                            </div>
                                            <div class="p-5">
                                                <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2">Terapi Medis Gratis (Listrik &amp; Laser) &amp; Pengobatan Pasien Bawaan</h3>
                                                <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">Memfasilitasi terapi laser &amp; elektro-medis gratis bagi penderita pasca-stroke, kelumpuhan, serta balita penyakit bawaan di pelosok.</p>
                                                <div class="mt-4">
                                                    <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">74%</span></div>
                                                    <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: 74%;"></div></div>
                                                    <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp 185.400.000</span><span class="text-[#62758A]">dari Rp 250.000.000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 pt-0"><button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                    </article>
                                    <article class="flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer" hx-get="/program/bakti-pendidikan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true">
                                        <div>
                                            <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                <img src="{{ asset('images/program-guru.png') }}" alt="Dukungan Insentif Guru" class="h-full w-full object-cover">
                                                <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap text-[#F4AAAA]"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg> Pendidikan</span><span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">Pendidikan Bersama</span>
                                            </div>
                                            <div class="p-5">
                                                <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2">Dukungan Insentif Guru Honor &amp; Bantuan Operasional Sekolah Terpencil</h3>
                                                <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">Apresiasi pahlawan tanpa tanda jasa dan pemenuhan sarana belajar bagi 200 murid di wilayah pelosok Indonesia Timur.</p>
                                                <div class="mt-4">
                                                    <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">75%</span></div>
                                                    <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: 75%;"></div></div>
                                                    <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp 135.000.000</span><span class="text-[#62758A]">dari Rp 180.000.000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 pt-0"><button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                    </article>
                                    <article class="flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer" hx-get="/program/bakti-bencana" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true">
                                        <div>
                                            <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                <img src="{{ asset('images/donasi-bencana.png') }}" alt="Berbagi Takjil" class="h-full w-full object-cover">
                                                <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-[#F4AAAA]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> Sosial &amp; Kemanusiaan</span><span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">Tanggap Darurat</span>
                                            </div>
                                            <div class="p-5">
                                                <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2">Berbagi Takjil Gratis, Dapur Umum Bencana &amp; Santunan Lansia-Duafa</h3>
                                                <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">Distribusi makanan siap saji, kebutuhan pokok lansia sebatang kara, serta dapur darurat untuk korban bencana alam.</p>
                                                <div class="mt-4">
                                                    <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">87%</span></div>
                                                    <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: 87%;"></div></div>
                                                    <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp 280.000.000</span><span class="text-[#62758A]">dari Rp 320.000.000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 pt-0"><button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                    </article>
                                    <article class="flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer" hx-get="/program/bakti-lingkungan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true">
                                        <div>
                                            <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                <img src="{{ asset('images/program-lingkungan.png') }}" alt="Sumur Bor" class="h-full w-full object-cover">
                                                <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-droplets text-[#F4AAAA]"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"></path><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"></path></svg> Lingkungan</span><span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">Infrastruktur Air</span>
                                            </div>
                                            <div class="p-5">
                                                <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2">Sumur Bor &amp; Instalasi Air Bersih untuk Daerah Rawan Kekeringan</h3>
                                                <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">Pembangunan sistem filtrasi dan pemipaan air bersih untuk 3 desa di Nusa Tenggara Timur yang mengalami krisis air tahunan.</p>
                                                <div class="mt-4">
                                                    <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">65%</span></div>
                                                    <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: 65%;"></div></div>
                                                    <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp 98.000.000</span><span class="text-[#62758A]">dari Rp 150.000.000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 pt-0"><button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                    </article>
                                    <article class="flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer" hx-get="/program/bakti-kesehatan" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true">
                                        <div>
                                            <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                <img src="{{ asset('images/donasi-pendidikan.png') }}" alt="Pengadaan Karpet &amp; Sajadah" class="h-full w-full object-cover">
                                                <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 lucide-building-2 text-[#F4AAAA]"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg> Fasilitas Ibadah</span><span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">Terkurasi Amanah</span>
                                            </div>
                                            <div class="p-5">
                                                <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2">Pengadaan Karpet &amp; Sajadah Musala Terkurasi Non-Komersial</h3>
                                                <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">Penyediaan karpet dan sajadah berkualitas untuk musala pedesaan yang membutuhkan, dikurasi secara akuntabel tanpa komersialisasi.</p>
                                                <div class="mt-4">
                                                    <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">90%</span></div>
                                                    <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: 90%;"></div></div>
                                                    <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp 81.000.000</span><span class="text-[#62758A]">dari Rp 90.000.000</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 pt-0"><button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
            <nav class="sticky bottom-0 z-40 flex border-t border-[#12355B]/10 bg-[#FBFAF7]/95 px-3 pb-safe pt-2 backdrop-blur lg:hidden shadow-lg">
                <button hx-get="/dashboard" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>Beranda</button>
                <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>Jelajah</button>
                <button hx-get="/donate" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="-mt-5 grid h-13 w-13 place-items-center rounded-full border-4 border-[#FBFAF7] bg-[#D62828] text-white shadow-lg active:scale-95 transition-transform" aria-label="Donasi Cepat"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg></button>
                <button hx-get="/history" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path><path d="M14 8H8"></path><path d="M16 12H8"></path><path d="M13 16H8"></path></svg>Riwayat</button>
                <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>Akun</button>
            </nav>
        </main>
    </div>


    @include('components.desktop-donation-modal')
</body>
</html>
