<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <title>Relawan - Bakti Merah Putih</title>

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
        .css-uwf2km {position: relative; flex: 1 0 0; display: block;}
        .css-fou3uo {min-height: 1px; width: 100%; height: 100dvh;}
    </style>
</head>
<body>
    <div id="container">
        <div class="css-uwf2km css-fou3uo tailwind">
            <div class="min-h-screen bg-[#FBFAF7] text-[#1B1B1B] antialiased selection:bg-[#D62828] selection:text-white" style="font-family: Inter, sans-serif;">
                
                <header class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-transparent" style="height: 88px;">
                    <div class="absolute top-0 inset-x-0 h-[3px] transition-opacity duration-300 opacity-100" style="background: linear-gradient(90deg, rgb(214, 40, 40), rgb(214, 40, 40) 50%, rgb(255, 255, 255) 50%);"></div>
                    <div class="max-w-[1280px] mx-auto px-6 h-full flex items-center justify-between gap-6">
                        <a href="#" class="shrink-0 block">
                            <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-14 w-auto object-contain transition-opacity duration-300">
                        </a>
                        <nav class="hidden xl:flex items-center gap-0.5">
                            <button onclick="window.location.href='/'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Beranda
                            </button>
                            <button onclick="window.location.href='/tentang-kami'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Tentang Kami
                            </button>
                            <button onclick="window.location.href='/program'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Program
                            </button>
                            <button onclick="window.location.href='/donasi'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Donasi
                            </button>
                            <button onclick="window.location.href='/laporan'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Laporan
                            </button>
                            <button onclick="window.location.href='/artikel'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Artikel
                            </button>
                            <button onclick="window.location.href='/galeri'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">
                                Galeri
                            </button>
                            <button class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#D62828] text-white/80 hover:text-white">
                                Relawan
                                <span class="absolute left-1/2 -translate-x-1/2 -bottom-0.5 w-1.5 h-1.5 rounded-full bg-[#D62828]"></span>
                            </button>
                            <button onclick="window.location.href='/kontak'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] text-white/80 hover:text-white">Kontak</button>
                        </nav>
                        <div class="flex items-center gap-3">
                            <button class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-[#D62828] text-white rounded-full text-[13px] font-bold hover:bg-[#B91C1C] transition-all duration-200 shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)] hover:shadow-[0_10px_26px_-8px_rgba(214,40,40,0.85)] hover:-translate-y-0.5" onclick="window.location.href='/login'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in w-4 h-4 shrink-0"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
                                Daftar Sekarang
                            </button>
                            <button onclick="window.location.href='/donasi'" class="xl:hidden p-2.5 rounded-xl hover:bg-black/5 transition-colors" style="color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-5 h-5"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                </header>

                <main class="min-h-screen bg-[#FBFAF7]">
                    <!-- Hero Section -->
                    <div class="bg-[#12355B] text-white pt-[140px] pb-32 relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20">
                            <img src="https://images.unsplash.com/photo-1593113565694-c6f140124316?w=1920&h=600&fit=crop" class="w-full h-full object-cover" alt="Volunteer Background">
                            <div class="absolute inset-0 bg-[#12355B]/80 mix-blend-multiply"></div>
                        </div>
                        <div class="max-w-[1280px] mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
                            <div>
                                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 text-white/90 text-sm font-semibold mb-6">
                                    <span class="w-2 h-2 rounded-full bg-[#D62828] animate-pulse"></span>
                                    Rekrutmen Terbuka
                                </div>
                                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Jadilah Bagian Dari <span class="text-[#D62828]">Perubahan</span></h1>
                                <p class="text-white/80 text-lg leading-relaxed mb-8 max-w-lg">Bukan sekadar waktu yang Anda berikan, melainkan harapan baru bagi mereka yang membutuhkan. Bergabunglah dengan 5.000+ relawan Bakti Merah Putih lainnya.</p>
                                <div class="flex flex-wrap items-center gap-4">
                                    @auth
                                        <button onclick="window.location.href='/relawan/daftar'" class="px-8 py-4 rounded-full bg-[#D62828] hover:bg-[#B91C1C] text-white font-bold transition-all shadow-[0_8px_25px_-8px_rgba(214,40,40,0.6)] hover:-translate-y-1">Daftar Sekarang</button>
                                    @else
                                        <button onclick="window.location.href='/login'" class="px-8 py-4 rounded-full bg-[#D62828] hover:bg-[#B91C1C] text-white font-bold transition-all shadow-[0_8px_25px_-8px_rgba(214,40,40,0.6)] hover:-translate-y-1">Login untuk Mendaftar</button>
                                    @endauth
                                    <button onclick="window.location.href='/relawan/video'" class="px-8 py-4 rounded-full bg-white/10 hover:bg-white/20 text-white font-bold transition-all backdrop-blur-sm border border-white/20 flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-4 h-4 fill-white"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg>
                                        Tonton Video
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Testimonial/Stats Card in Hero -->
                            <div class="hidden lg:block relative">
                                <div class="absolute inset-0 bg-gradient-to-tr from-[#D62828]/20 to-transparent blur-3xl rounded-full"></div>
                                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-[32px] relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote w-10 h-10 text-white/20 mb-4"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"></path><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"></path></svg>
                                    <p class="text-white text-lg font-medium leading-relaxed mb-6">"Menjadi relawan mengajar di pelosok membuka mata saya. Senyum anak-anak saat berhasil mengeja kata pertama mereka adalah bayaran yang tidak ternilai harganya."</p>
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop" class="w-12 h-12 rounded-full border-2 border-white/30 object-cover" alt="Volunteer">
                                        <div>
                                            <h4 class="text-white font-bold">Rina Gunawan</h4>
                                            <p class="text-white/60 text-sm">Relawan Pendidikan, Angkatan 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Why Join Us Section -->
                    <div class="max-w-[1280px] mx-auto px-6 py-24">
                        <div class="text-center max-w-2xl mx-auto mb-16">
                            <h2 class="text-3xl font-extrabold text-[#1B1B1B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Mengapa Menjadi Relawan?</h2>
                            <p class="text-gray-500 text-lg">Selain memberikan dampak sosial secara langsung, menjadi relawan juga memberikan berbagai manfaat positif bagi pengembangan diri Anda.</p>
                        </div>
                        
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                                <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-7 h-7 text-[#D62828]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <h3 class="text-xl font-extrabold text-[#1B1B1B] mb-3">Jejaring Positif</h3>
                                <p class="text-gray-500 leading-relaxed">Berkenalan dengan ribuan orang berjiwa sosial dari berbagai latar belakang profesi dan usia di seluruh Indonesia.</p>
                            </div>
                            
                            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                                <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-7 h-7 text-blue-600"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg>
                                </div>
                                <h3 class="text-xl font-extrabold text-[#1B1B1B] mb-3">Pengembangan Diri</h3>
                                <p class="text-gray-500 leading-relaxed">Dapatkan pelatihan kepemimpinan, manajemen krisis, dan P3K sebelum diterjunkan langsung ke lapangan.</p>
                            </div>
                            
                            <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-lg transition-all hover:-translate-y-1">
                                <div class="w-14 h-14 rounded-2xl bg-teal-50 flex items-center justify-center mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake w-7 h-7 text-teal-600"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path><path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08v0c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"></path><path d="m18 15-2-2"></path><path d="m15 18-2-2"></path></svg>
                                </div>
                                <h3 class="text-xl font-extrabold text-[#1B1B1B] mb-3">Dampak Nyata</h3>
                                <p class="text-gray-500 leading-relaxed">Saksikan langsung perubahan dan senyum kebahagiaan dari mereka yang terbantu oleh tenaga dan pikiran Anda.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Active Programs to Join -->
                    <div class="bg-white py-24 border-y border-gray-100">
                        <div class="max-w-[1280px] mx-auto px-6">
                            <div class="flex items-end justify-between mb-12">
                                <div>
                                    <h2 class="text-3xl font-extrabold text-[#1B1B1B] mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Panggilan Kemanusiaan Terkini</h2>
                                    <p class="text-gray-500 text-lg">Pilih bidang kerelawanan yang sesuai dengan panggilan hati dan keahlian Anda.</p>
                                </div>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-8">
                                @forelse($campaigns as $campaign)
                                <div class="bg-[#FBFAF7] rounded-3xl p-8 border border-gray-100 flex flex-col md:flex-row gap-6 items-center">
                                    <div class="w-full md:w-40 h-40 rounded-2xl overflow-hidden shrink-0 relative">
                                        <img src="{{ $campaign->image ? asset('storage/'.$campaign->image) : 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800&h=600&fit=crop' }}" class="w-full h-full object-cover" alt="{{ $campaign->name }}">
                                        @if($campaign->status == 'Berjalan')
                                            <span class="absolute top-2 left-2 bg-amber-500 text-white text-[10px] font-bold px-2 py-1 rounded-md uppercase tracking-wider">Sedang Berjalan</span>
                                        @else
                                            <span class="absolute top-2 left-2 bg-red-600 text-white text-[10px] font-bold px-2 py-1 rounded-md uppercase tracking-wider">Mendesak</span>
                                        @endif
                                    </div>
                                    <div class="flex-1 w-full">
                                        <h3 class="text-xl font-extrabold text-[#1B1B1B] mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">{{ $campaign->name }}</h3>
                                        <p class="text-sm text-gray-500 mb-4 line-clamp-2">{{ $campaign->description ?? 'Mari bergabung menjadi relawan untuk menyukseskan kegiatan ini.' }}</p>
                                        
                                        <!-- Progress Bar -->
                                        @php
                                            $progress = $campaign->volunteer_target > 0 ? min(100, round(($campaign->volunteers->count() / $campaign->volunteer_target) * 100)) : 0;
                                        @endphp
                                        <div class="mb-4">
                                            <div class="flex justify-between items-center mb-1 text-xs font-bold">
                                                <span class="text-[#D62828]">{{ $progress }}% Terpenuhi</span>
                                                <span class="text-gray-500">{{ $campaign->volunteers->count() }} / {{ $campaign->volunteer_target }} SDM</span>
                                            </div>
                                            <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                                                <div class="bg-[#D62828] h-2 rounded-full" style="width: {{ $progress }}%"></div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col sm:flex-row items-center gap-4 justify-between mt-4">
                                            <div class="flex items-center gap-1.5 text-xs font-semibold text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg> {{ $campaign->location }}
                                            </div>
                                            @auth
                                                <button onclick="window.location.href='/relawan/daftar?campaign_id={{ $campaign->id }}'" class="w-full sm:w-auto px-5 py-2.5 rounded-full bg-white border-2 border-gray-200 hover:border-[#D62828] hover:text-[#D62828] text-[#1B1B1B] font-bold text-sm transition-colors">Daftar Relawan</button>
                                            @else
                                                <button onclick="window.location.href='/login'" class="w-full sm:w-auto px-5 py-2.5 rounded-full bg-white border-2 border-gray-200 hover:border-[#D62828] hover:text-[#D62828] text-[#1B1B1B] font-bold text-sm transition-colors">Login untuk Mendaftar</button>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-span-1 md:col-span-2 text-center py-12">
                                    <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400 w-8 h-8"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><line x1="19" y1="8" x2="19" y2="14"></line><line x1="22" y1="11" x2="16" y2="11"></line></svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-[#1B1B1B] mb-2">Belum ada panggilan relawan saat ini</h3>
                                    <p class="text-gray-500 text-sm">Terima kasih atas antusiasme Anda. Silakan daftar sebagai Relawan Umum melalui tautan di bawah ini.</p>
                                    @auth
                                        <button onclick="window.location.href='/relawan/daftar'" class="mt-4 px-5 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-[#1B1B1B] font-bold text-sm transition-colors">Daftar Relawan Umum</button>
                                    @else
                                        <button onclick="window.location.href='/login'" class="mt-4 px-5 py-2 rounded-full bg-gray-100 hover:bg-gray-200 text-[#1B1B1B] font-bold text-sm transition-colors">Login untuk Mendaftar</button>
                                    @endauth
                                </div>
                                @endforelse
                            </div>
                            
                            <div class="mt-12">
                                {{ $campaigns->links() }}
                            </div>
                        </div>
                    </div>
                </main>

                <footer class="relative bg-[#0D1F35] text-white pt-16 pb-8 overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-[3px]" style="background: linear-gradient(90deg, rgb(214, 40, 40), rgb(214, 40, 40) 50%, rgb(255, 255, 255) 50%);"></div>
                    <div class="max-w-[1280px] mx-auto px-6">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-12 pb-12 border-b border-white/[0.08]">
                            <div>
                                <div class="mb-5">
                                    <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-14 w-auto object-contain">
                                </div>
                                <p class="text-white/50 text-[13px] leading-relaxed mb-6">Bergerak bersama untuk Indonesia yang lebih baik. Sejak 2015, kami telah menyentuh jutaan kehidupan di 28 provinsi.</p>
                                <div class="flex items-center gap-2.5">
                                    <a href="https://www.facebook.com/BaktiMerahPutih/" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-4 h-4"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                                    <a href="https://www.instagram.com/baktimerahputih?stkn=d3JqeTlka2FzNnFv" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-4 h-4"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                                    <button class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-4 h-4"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></button>
                                    <a href="https://youtube.com/@yayasanbaktimerahputih?si=2HPfET3fJpl2I-t2" target="_blank" class="w-9 h-9 rounded-xl bg-white/[0.08] hover:bg-[#D62828] hover:-translate-y-0.5 flex items-center justify-center transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-4 h-4"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></a>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Navigasi</h4>
                                <ul class="space-y-3">
                                    <li><a href="#" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Beranda</a></li>
                                    <li><a href="/tentang-kami" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Tentang Kami</a></li>
                                    <li><a href="#" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Program</a></li>
                                    <li><a href="#" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Donasi</a></li>
                                    <li><a href="/laporan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Laporan &amp; Keuangan</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Program</h4>
                                <ul class="space-y-3">
                                    <li><a href="/program/bakti-guru" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Guru</a></li>
                                    <li><a href="/program/bakti-pendidikan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Pendidikan</a></li>
                                    <li><a href="/program/bakti-lingkungan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Lingkungan</a></li>
                                    <li><a href="/program/bakti-kesehatan" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Kesehatan</a></li>
                                    <li><a href="/program/bakti-pangan-gizi" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Pangan &amp; Gizi</a></li>
                                    <li><a href="/program/bakti-bencana" class="text-white/55 text-[13px] font-medium hover:text-white transition-colors flex items-center gap-1.5 group"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-3 h-3 opacity-0 group-hover:opacity-100 -ml-4 group-hover:ml-0 transition-all"><path d="m9 18 6-6-6-6"></path></svg> Bakti Bencana</a></li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-[11px] font-extrabold text-white/40 uppercase tracking-[0.22em] mb-5">Kontak</h4>
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3 text-white/55 text-[13px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-4 h-4 shrink-0 mt-0.5 text-white/30"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        <a href="https://maps.app.goo.gl/UVL5JZcLoiSfMHMb6" target="_blank" class="hover:text-white transition-colors">Jl. Sudirman No. 45, Kel. Karet Semanggi, Jakarta Pusat 10220</a>
                                    </li>
                                    <li class="flex items-center gap-3 text-white/55 text-[13px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 text-white/30"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        0856-104-2026
                                    </li>
                                    <li class="flex items-center gap-3 text-white/55 text-[13px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 text-white/30"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                                        info@baktimerahputih.org
                                    </li>
                                </ul>
                                <button class="mt-6 inline-flex items-center gap-2 px-4 py-2.5 bg-white/[0.08] hover:bg-white/[0.14] border border-white/10 rounded-full text-[13px] font-semibold transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-4 h-4 text-white/60"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
                                    <span class="text-white/70">Unduh Laporan 2025</span>
                                </button>
                            </div>
                        </div>
                        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <p class="text-white/30 text-xs">© 2026 Yayasan Bakti Merah Putih. Seluruh hak cipta dilindungi undang-undang.</p>
                            <div class="flex items-center gap-4 text-white/30 text-xs">
                                <span class="flex items-center gap-4"><a href="#" class="hover:text-white/60 transition-colors">Kebijakan Privasi</a><span>·</span></span>
                                <span class="flex items-center gap-4"><a href="#" class="hover:text-white/60 transition-colors">Syarat &amp; Ketentuan</a><span>·</span></span>
                                <span class="flex items-center gap-4"><a href="/laporan" class="hover:text-white/60 transition-colors">Laporan Keuangan</a></span>
                            </div>
                        </div>
                    </div>
                </footer>

                <div class="fixed bottom-6 left-1/2 -translate-x-1/2 z-40 sm:hidden">
                    <button onclick="window.location.href='/login'" class="flex items-center gap-2 px-7 py-4 bg-[#D62828] text-white rounded-full font-extrabold text-sm shadow-[0_18px_40px_-10px_rgba(214,40,40,0.8)] hover:scale-105 transition-transform active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in w-4 h-4"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg> Daftar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('header');
            const logo = document.querySelector('header img');
            const navLinks = document.querySelectorAll('header nav button');
            const mobileMenuBtn = document.querySelector('header .xl\\:hidden');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 20) {
                    header.classList.remove('bg-transparent');
                    header.classList.add('bg-white', 'shadow-sm');
                    logo.src = '/images/logo2.png';
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = '#1B1B1B';
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.remove('text-white/80', 'hover:text-white');
                    });
                } else {
                    header.classList.add('bg-transparent');
                    header.classList.remove('bg-white', 'shadow-sm');
                    logo.src = '/images/logo.png';
                    
                    if (mobileMenuBtn) {
                        mobileMenuBtn.style.color = 'white';
                    }
                    
                    navLinks.forEach(link => {
                        link.classList.add('text-white/80', 'hover:text-white');
                    });
                }
            });
        });
    </script>
</body>
</html>
