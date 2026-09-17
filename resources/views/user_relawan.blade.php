<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat - Bakti Merah Putih</title>
    
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
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="bg-gray-50 antialiased" hx-boost="true">
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
                    <div class="flex-1 overflow-y-auto pb-24 px-4 pt-4">
                        <h2 class="font-extrabold text-[16px] text-[#1B1B1B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Riwayat Relawan</h2>
                        
                        <div class="space-y-2.5">
                            @forelse($volunteers as $volunteer)
                            <div class="bg-white rounded-[16px] flex items-center gap-3 p-3.5 shadow-[0_1px_8px_-2px_rgba(0,0,0,0.08)]">
                                <div class="w-12 h-12 rounded-2xl overflow-hidden shrink-0 bg-gray-100 relative">
                                    <img src="{{ asset($volunteer->campaign->image ?? 'images/donasi-bencana.webp') }}" alt="{{ $volunteer->campaign->name ?? 'Program Donasi' }}" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-[13px] font-bold text-[#1B1B1B] truncate" style="font-family: 'Plus Jakarta Sans', sans-serif;">{{ $volunteer->campaign->name ?? 'Program Donasi' }}</p>
                                    @if($volunteer->campaign && $volunteer->campaign->activity_date)
                                        <p class="text-[11px] text-gray-500 mt-0.5 flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line><path d="M8 14h.01"></path><path d="M12 14h.01"></path><path d="M16 14h.01"></path><path d="M8 18h.01"></path><path d="M12 18h.01"></path><path d="M16 18h.01"></path></svg>
                                            {{ \Carbon\Carbon::parse($volunteer->campaign->activity_date)->translatedFormat('d M Y') }}
                                        </p>
                                    @else
                                        <p class="text-[11px] text-gray-400 mt-0.5">Daftar: {{ $volunteer->created_at->translatedFormat('d M Y') }}</p>
                                    @endif
                                </div>
                                <div class="shrink-0 text-right">
                                    <p class="text-[13px] font-extrabold" style="color: rgb(214, 40, 40);">{{ $volunteer->role }}</p>
                                    
                                    @php
                                        $displayStatus = $volunteer->status;
                                        $statusClass = 'text-amber-500';
                                        
                                        if ($volunteer->campaign && $volunteer->campaign->activity_date) {
                                            $activityDate = \Carbon\Carbon::parse($volunteer->campaign->activity_date)->startOfDay();
                                            $today = \Carbon\Carbon::today();
                                            
                                            if ($displayStatus == 'Menunggu' || $displayStatus == 'Aktif') {
                                                if ($activityDate->isToday()) {
                                                    $displayStatus = 'Berlangsung';
                                                    $statusClass = 'text-blue-600';
                                                } elseif ($activityDate->isPast()) {
                                                    $displayStatus = 'Selesai';
                                                    $statusClass = 'text-emerald-600';
                                                }
                                            }
                                        }
                                        
                                        if ($displayStatus == 'Berhasil' || $displayStatus == 'Selesai') {
                                            $displayStatus = 'Selesai';
                                            $statusClass = 'text-emerald-600';
                                        }
                                    @endphp
                                    
                                    <span class="text-[10px] {{ $statusClass }} font-bold flex items-center gap-0.5 justify-end mt-0.5">
                                        @if($displayStatus == 'Selesai')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> 
                                        @elseif($displayStatus == 'Berlangsung')
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle w-2.5 h-2.5 animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-2.5 h-2.5"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                        @endif
                                        {{ $displayStatus }}
                                    </span>
                                </div>
                            </div>
                            @if($volunteer->status == 'Hadir')
                            <div class="mt-3 pt-3 border-t border-gray-100 flex justify-end">
                                <button class="flex items-center justify-center px-4 py-1.5 bg-emerald-100 text-emerald-700 border border-emerald-200 text-[11px] font-bold rounded-lg cursor-default" disabled>
                                    <svg class="w-3.5 h-3.5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Hadir
                                </button>
                            </div>
                            @elseif($displayStatus == 'Berlangsung' || $displayStatus == 'Selesai')
                            <div class="mt-3 pt-3 border-t border-gray-100 flex justify-end">
                                <form hx-post="/user/relawan/{{ $volunteer->id }}/konfirmasi" hx-target="this" hx-swap="outerHTML">
                                    @csrf
                                    <button type="submit" class="flex items-center justify-center px-4 py-1.5 bg-[#12355B] text-white hover:bg-[#0D2137] text-[11px] font-bold rounded-lg transition-colors active:scale-95">
                                        Konfirmasi Kehadiran
                                    </button>
                                </form>
                            </div>
                            @endif
                            @empty
                            <div class="text-center py-10">
                                <p class="text-[13px] text-gray-500">Belum ada riwayat kerelawanan.</p>
                            </div>
                            @endforelse
                            
                            @if($volunteers->hasPages())
                            <div class="mt-4 pb-4">
                                {{ $volunteers->links() }}
                            </div>
                            @endif
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
                    <button class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history w-5 h-5 transition-colors" style="color: rgb(214, 40, 40);"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg>
                        <span class="text-[9px] font-bold transition-colors " style="color: rgb(214, 40, 40);">Riwayat</span>
                    </button>
                    <button onclick="window.location.href='/account'" class="flex flex-col items-center gap-1 px-3 py-1 rounded-2xl transition-all active:scale-90">
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
                        <button class="flex items-center gap-2"><img src="{{ asset('images/logo2.webp') }}" alt="Bakti Merah Putih" class="h-9 w-auto"></button>
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
                        <div hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex items-center gap-3 border-l border-[#12355B]/10 pl-4 cursor-pointer hover:bg-black/5 p-1.5 -mr-1.5 rounded-xl transition">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs font-bold text-[#12355B]">{{ auth()->user()->name }}</p>
                                <p class="text-[10px] text-[#62758A]">Donatur Dermawan</p>
                            </div>
                            <button class="grid h-9 w-9 place-items-center rounded-full bg-[#12355B] text-xs font-bold text-white shadow">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
                <div class="grid gap-8 lg:grid-cols-[260px_1fr]">
                    <aside class="hidden lg:block space-y-6">
                        <div class="rounded-2xl border border-[#12355B]/10 bg-white p-5 shadow-sm">
                            <div class="flex items-center gap-3 pb-4 border-b border-[#12355B]/10">
                                <div class="grid h-12 w-12 place-items-center rounded-full bg-[#12355B] font-bold text-white text-base">{{ strtoupper(substr(auth()->user()->name, 0, 2)) }}</div>
                                <div>
                                    <p class="font-['Plus_Jakarta_Sans'] font-bold text-sm text-[#12355B]">{{ auth()->user()->name }}</p>
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
                                <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition text-[#62758A] hover:bg-[#F1EEE8] hover:text-[#12355B]">
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
                                <button class="flex w-full items-center justify-start text-left gap-3 rounded-xl px-4 py-3 text-xs font-bold transition bg-[#12355B] text-white shadow-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    Riwayat Relawan
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
                        <div class="rounded-2xl bg-[#12355B] p-5 text-white shadow-md">
                            <p class="text-[10px] font-extrabold uppercase tracking-widest text-white/80">Panggilan Relawan</p>
                            <h3 class="mt-1 font-['Plus_Jakarta_Sans'] text-lg font-bold">Mari Beraksi Bersama</h3>
                            <p class="mt-2 text-xs text-white/80 leading-relaxed">Bergabunglah dengan ribuan relawan lainnya untuk membantu mereka yang membutuhkan.</p>
                            <button onclick="window.location.href='/explore'" class="mt-4 flex w-full items-center justify-center gap-2 rounded-xl bg-white py-2.5 text-xs font-bold text-[#12355B] transition hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg> Daftar Relawan
                            </button>
                        </div>
                    </aside>
                    <section class="space-y-6">
                        <div class="space-y-6 pb-8">
                            <div>
                                <h2 class="font-['Plus_Jakarta_Sans'] text-2xl font-extrabold text-[#12355B]">Riwayat Relawan</h2>
                                <p class="mt-1 text-xs text-[#62758A]">Daftar kegiatan kerelawanan yang Anda ikuti.</p>
                            </div>
                            <div class="space-y-4">
                                @forelse($volunteers as $volunteer)
                                @php
                                    $displayStatus = $volunteer->status;
                                    $statusClass = 'text-amber-500';
                                    
                                    if ($volunteer->campaign && $volunteer->campaign->activity_date) {
                                        $activityDate = \Carbon\Carbon::parse($volunteer->campaign->activity_date)->startOfDay();
                                        
                                        if ($displayStatus == 'Menunggu' || $displayStatus == 'Aktif') {
                                            if ($activityDate->isToday()) {
                                                $displayStatus = 'Berlangsung';
                                                $statusClass = 'text-blue-600';
                                            } elseif ($activityDate->isPast()) {
                                                $displayStatus = 'Selesai';
                                                $statusClass = 'text-emerald-600';
                                            }
                                        }
                                    }
                                    
                                    if ($displayStatus == 'Berhasil' || $displayStatus == 'Selesai') {
                                        $displayStatus = 'Selesai';
                                        $statusClass = 'text-emerald-600';
                                    }
                                @endphp
                                <div class="rounded-2xl border border-[#12355B]/10 bg-white p-5 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                    <div class="space-y-1">
                                        <span class="inline-block rounded-md bg-[#F1EEE8] px-2.5 py-0.5 text-[10px] font-bold text-[#12355B]">{{ $volunteer->campaign->category ?? 'Donasi' }}</span>
                                        <h3 class="font-['Plus_Jakarta_Sans'] text-base font-bold text-[#12355B]">{{ $volunteer->campaign->name ?? 'Program Donasi' }}</h3>
                                        <p class="text-xs text-[#62758A]">
                                            @if($volunteer->campaign && $volunteer->campaign->activity_date)
                                                {{ \Carbon\Carbon::parse($volunteer->campaign->activity_date)->translatedFormat('d F Y') }}
                                            @else
                                                Daftar: {{ $volunteer->created_at->translatedFormat('d F Y') }}
                                            @endif
                                            • Peran: {{ $volunteer->role }}
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between sm:flex-col sm:items-end gap-2 border-t border-[#12355B]/10 sm:border-0 pt-3 sm:pt-0">
                                        <div class="flex flex-col sm:items-end gap-1">
                                            <span class="font-['Plus_Jakarta_Sans'] text-lg font-extrabold text-[#D62828]">{{ $volunteer->role }}</span>
                                            <span class="inline-flex items-center gap-1 text-xs font-bold {{ $statusClass }}">
                                                @if($displayStatus == 'Selesai')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> 
                                                @elseif($displayStatus == 'Berlangsung')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-loader-circle animate-spin"><path d="M21 12a9 9 0 1 1-6.219-8.56"></path></svg>
                                                @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                @endif
                                                {{ $displayStatus }}
                                            </span>
                                        </div>
                                        
                                        @if($volunteer->status == 'Hadir')
                                        <div class="mt-2">
                                            <button class="flex items-center justify-center px-4 py-2 bg-emerald-100 text-emerald-700 border border-emerald-200 text-xs font-bold rounded-xl cursor-default shadow-sm" disabled>
                                                <svg class="w-3.5 h-3.5 mr-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Hadir
                                            </button>
                                        </div>
                                        @elseif($displayStatus == 'Berlangsung' || $displayStatus == 'Selesai')
                                        <div class="mt-2">
                                            <form hx-post="/user/relawan/{{ $volunteer->id }}/konfirmasi" hx-target="this" hx-swap="outerHTML">
                                                @csrf
                                                <button type="submit" class="flex items-center justify-center px-4 py-2 bg-[#12355B] text-white hover:bg-[#0D2137] text-xs font-bold rounded-xl transition-colors active:scale-95 shadow-sm">
                                                    Konfirmasi Kehadiran
                                                </button>
                                            </form>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                @empty
                                <div class="text-center py-10">
                                    <p class="text-sm text-[#62758A]">Anda belum memiliki riwayat kegiatan relawan.</p>
                                    <button onclick="window.location.href='/explore'" class="mt-4 px-4 py-2 bg-[#D62828] text-white rounded-lg text-sm font-bold shadow hover:bg-[#b91e26] transition">Daftar Relawan</button>
                                </div>
                                @endforelse
                            </div>
                            
                            @if($volunteers->hasPages())
                            <div class="mt-4">
                                {{ $volunteers->links() }}
                            </div>
                            @endif
                            
                            <div class="mt-6">
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
            <nav class="sticky bottom-0 z-40 flex border-t border-[#12355B]/10 bg-[#FBFAF7]/95 px-3 pb-safe pt-2 backdrop-blur lg:hidden shadow-lg">
                <button hx-get="/dashboard" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path></svg>Beranda</button>
                <button hx-get="/explore" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>Jelajah</button>
                <button hx-get="/donate" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="-mt-5 grid h-13 w-13 place-items-center rounded-full border-4 border-[#FBFAF7] bg-[#D62828] text-white shadow-lg active:scale-95 transition-transform" aria-label="Donasi Cepat"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg></button>
                <button hx-get="/history" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path><path d="M14 8H8"></path><path d="M16 12H8"></path><path d="M13 16H8"></path></svg>Riwayat</button>
                                                
                                <button hx-get="/account" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" class="flex flex-1 flex-col items-center gap-1 text-[10px] font-bold text-[#8192A3] hover:text-[#D62828]"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round"><circle cx="12" cy="8" r="5"></circle><path d="M20 21a8 8 0 0 0-16 0"></path></svg>Akun</button>
            </nav>
        </main>
    </div>


    @include('components.desktop-donation-modal')
</body>
</html>
