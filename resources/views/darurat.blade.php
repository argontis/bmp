<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darurat - Bakti Merah Putih</title>
    
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
        
        @keyframes pulseAlert {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }
        
        .animate-swipe-up {
            animation: swipeUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        
        .animate-pulse-alert {
            animation: pulseAlert 2s infinite;
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
                        <h1 class="text-[16px] font-extrabold text-[#1B1B1B] leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Aksi Darurat</h1>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <button class="relative w-9 h-9 rounded-2xl bg-rose-50 flex items-center justify-center text-rose-600 font-bold text-[11px] px-3 w-auto gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-3.5 h-3.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> 119
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden animate-swipe-up">
                <div class="flex-1 flex flex-col overflow-hidden" style="opacity: 1; transform: none;">
                    <div class="flex-1 overflow-y-auto pb-24">
                        
                        <!-- Lapor Bencana Button (SOS) -->
                        <div class="mx-4 mt-5">
                            <button class="w-full bg-rose-600 rounded-[20px] p-5 shadow-[0_8px_24px_-6px_rgba(225,29,72,0.6)] flex items-center justify-between active:scale-95 transition-transform animate-pulse-alert">
                                <div class="text-left">
                                    <h2 class="text-white text-[18px] font-extrabold mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Lapor Bencana</h2>
                                    <p class="text-white/80 text-[11px] font-medium">Butuh evakuasi atau bantuan medis segera?</p>
                                </div>
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert w-6 h-6 text-rose-600"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
                                </div>
                            </button>
                        </div>

                        <!-- Hotline Penting -->
                        <div class="mx-4 mt-6">
                            <h3 class="font-extrabold text-[14px] text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Hotline Penting</h3>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="bg-white rounded-[16px] p-3 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ambulance w-5 h-5 text-blue-600"><path d="M10 10H6"></path><path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path><path d="M19 18h2a1 1 0 0 0 1-1v-3.28a1 1 0 0 0-.684-.948l-1.923-.641a1 1 0 0 1-.578-.502l-1.539-3.076A1 1 0 0 0 16.382 8H14"></path><path d="M8 8v4"></path><path d="M9 18h6"></path><circle cx="17" cy="18" r="2"></circle><circle cx="7" cy="18" r="2"></circle></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-500 font-semibold mb-0.5">Ambulans</p>
                                        <p class="text-[13px] font-extrabold text-[#1B1B1B]">118 / 119</p>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[16px] p-3 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flame w-5 h-5 text-amber-500"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-500 font-semibold mb-0.5">Pemadam</p>
                                        <p class="text-[13px] font-extrabold text-[#1B1B1B]">113</p>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[16px] p-3 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-alert w-5 h-5 text-indigo-600"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-500 font-semibold mb-0.5">Polisi</p>
                                        <p class="text-[13px] font-extrabold text-[#1B1B1B]">110</p>
                                    </div>
                                </div>
                                <div class="bg-white rounded-[16px] p-3 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-emerald-50 flex items-center justify-center shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-life-buoy w-5 h-5 text-emerald-600"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" x2="9.17" y1="4.93" y2="9.17"></line><line x1="14.83" x2="19.07" y1="14.83" y2="19.07"></line><line x1="14.83" x2="19.07" y1="9.17" y2="4.93"></line><line x1="14.83" x2="18.36" y1="9.17" y2="5.64"></line><line x1="4.93" x2="9.17" y1="19.07" y2="14.83"></line></svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] text-gray-500 font-semibold mb-0.5">SAR/Basarnas</p>
                                        <p class="text-[13px] font-extrabold text-[#1B1B1B]">115</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Donasi Siaga Bencana -->
                        <div class="mx-4 mt-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-extrabold text-[14px] text-[#1B1B1B]" style="font-family: 'Plus Jakarta Sans', sans-serif;">Bantuan Mendesak</h3>
                            </div>
                            
                            <!-- Bencana Cards -->
                            @forelse($campaigns as $campaign)
                                @php
                                    $terkumpul = $campaign->donations->where('status', 'Berhasil')->sum('amount');
                                    $target = $campaign->nominal;
                                    $persentase = $target > 0 ? min(100, round(($terkumpul / $target) * 100)) : 0;
                                    $isUrgent = stripos($campaign->label, 'Darurat') !== false;
                                    $bgColor = $isUrgent ? 'rose-600' : 'amber-500';
                                @endphp
                                <div class="bg-white rounded-[16px] overflow-hidden shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] mb-4 cursor-pointer hover:scale-[1.02] transition-transform" onclick="window.location.href='/program/{{ $campaign->slug }}'">
                                    <div class="h-[130px] bg-gray-100 relative">
                                        <img src="{{ asset($campaign->image) }}" class="w-full h-full object-cover" alt="{{ $campaign->name }}">
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                        <div class="absolute top-3 left-3 bg-{{ $bgColor }} px-2.5 py-1 rounded-md text-[10px] font-extrabold text-white flex items-center gap-1">
                                            @if($isUrgent)
                                            <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping absolute"></span>
                                            <span class="w-1.5 h-1.5 rounded-full bg-white relative"></span>
                                            @endif
                                            {{ $campaign->label ?? 'Siaga' }}
                                        </div>
                                        <div class="absolute bottom-3 left-3 right-3 text-white">
                                            <h4 class="text-[13px] font-bold leading-snug mb-1 line-clamp-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">{{ $campaign->name }}</h4>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        @if(!empty($campaign->activity_date))
                                        <div class="mb-3 flex items-center gap-1.5 text-xs font-semibold text-gray-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                                            {{ \Carbon\Carbon::parse($campaign->activity_date)->translatedFormat('d F Y') }}
                                        </div>
                                        @endif
                                        <div class="h-1.5 rounded-full bg-gray-100 overflow-hidden mb-2">
                                            <div class="h-full rounded-full bg-{{ $bgColor }}" style="width: {{ $persentase }}%;"></div>
                                        </div>
                                        <div class="flex justify-between items-center mb-4">
                                            <span class="text-[11px] font-extrabold text-{{ $bgColor }}">Terkumpul Rp {{ number_format($terkumpul, 0, ',', '.') }}</span>
                                            <span class="text-[10px] text-gray-500 font-semibold">dari Rp {{ number_format($target, 0, ',', '.') }}</span>
                                        </div>
                                        <button onclick="window.location.href='/donasi'" class="w-full py-2.5 rounded-full text-[12px] font-extrabold text-white transition-all active:scale-95 bg-{{ $bgColor }}">
                                            Donasi Sekarang
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <div class="bg-white rounded-[16px] p-6 text-center shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] mb-4">
                                    <p class="text-gray-500 text-sm font-medium">Saat ini tidak ada kondisi darurat.</p>
                                </div>
                            @endforelse

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
