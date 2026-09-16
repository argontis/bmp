<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <title>Artikel - Bakti Merah Putih</title>

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
        .css-uwf2km {position: relative; flex: 1 0 0; display: flex; flex-direction: column;}
        .css-fou3uo {min-height: 100vh; width: 100%;}
    </style>
</head>
<body>
    <div id="container">
        <div class="css-uwf2km css-fou3uo tailwind">
            <div class="min-h-screen bg-[#FBFAF7] text-[#1B1B1B] antialiased selection:bg-[#D62828] selection:text-white" style="font-family: Inter, sans-serif;">
                
                <header class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-white shadow-sm" style="height: 88px;">
                    <div class="absolute top-0 inset-x-0 h-[3px] transition-opacity duration-300 opacity-100" style="background: linear-gradient(90deg, rgb(214, 40, 40), rgb(214, 40, 40) 50%, rgb(255, 255, 255) 50%);"></div>
                    <div class="max-w-[1280px] mx-auto px-6 h-full flex items-center justify-between gap-6">
                        <a href="#" class="shrink-0 block">
                            <img src="/images/logo2.webp" alt="Bakti Merah Putih" class="h-14 w-auto object-contain transition-opacity duration-300">
                        </a>
                        <nav class="hidden xl:flex items-center gap-0.5">
                            <button onclick="window.location.href='/'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">
                                Beranda
                            </button>
                            <button onclick="window.location.href='/tentang-kami'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">
                                Tentang Kami
                            </button>
                            <button onclick="window.location.href='/program'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">
                                Program
                            </button>
                            <button onclick="window.location.href='/donasi'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">
                                Donasi
                            </button>
                            <button onclick="window.location.href='/laporan'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">
                                Laporan
                            </button>
                            <button class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#D62828] ">
                                Artikel
                                <span class="absolute left-1/2 -translate-x-1/2 -bottom-0.5 w-1.5 h-1.5 rounded-full bg-[#D62828]"></span>
                            </button>
                            <button onclick="window.location.href='/galeri'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">Galeri</button>
                            <button onclick="window.location.href='/relawan'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">Relawan</button>
                            <button onclick="window.location.href='/kontak'" class="relative px-3 py-2 text-[13px] font-semibold transition-colors duration-150 text-[#5B5B5B] hover:text-[#12355B] ">Kontak</button>
                        </nav>
                        <div class="flex items-center gap-3">
                            <button class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-[#D62828] text-white rounded-full text-[13px] font-bold hover:bg-[#B91C1C] transition-all duration-200 shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)] hover:shadow-[0_10px_26px_-8px_rgba(214,40,40,0.85)] hover:-translate-y-0.5" onclick="window.location.href='/login'">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-in w-4 h-4 shrink-0"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
                                Daftar Sekarang
                            </button>
                            <button onclick="window.location.href='/donasi'" class="xl:hidden p-2.5 rounded-xl hover:bg-black/5 transition-colors" style="color: #1B1B1B;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-5 h-5"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                            </button>
                        </div>
                    </div>
                </header>

                <main class="min-h-screen bg-[#FBFAF7] pt-[120px]">
        <div class="max-w-[800px] mx-auto px-6 py-12 md:py-16">
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-4 py-1.5 rounded-full text-xs font-bold text-white" style="background: rgb(22, 163, 74);">Lingkungan</span>
                    <span class="text-sm font-semibold text-gray-500">1 Juli 2026</span>
                    <span class="text-gray-300">•</span>
                    <span class="text-sm font-semibold text-gray-500">5 menit baca</span>
                </div>
                <h1 class="text-4xl md:text-[42px] font-extrabold text-[#12355B] leading-[1.2] mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">Gerakan 10.000 Pohon: Pulihkan Ekosistem Hutan Sulawesi</h1>
            </div>
            
            <div class="w-full h-[400px] md:h-[500px] rounded-[24px] overflow-hidden mb-12 shadow-lg">
                <img src="https://images.unsplash.com/photo-1763856957026-a74ab4f05891?w=1200&h=600&fit=crop&auto=format" alt="Gerakan 10.000 Pohon: Pulihkan Ekosistem Hutan Sulawesi" class="w-full h-full object-cover">
            </div>
            
            <div class="prose prose-lg max-w-none text-[#555] leading-relaxed">
                
            <p class="mb-6">Dalam upaya melawan degradasi hutan dan perubahan iklim, Bakti Merah Putih bersama komunitas adat setempat baru saja menyelesaikan fase pertama dari 'Gerakan 10.000 Pohon' di area hutan kritis Sulawesi. Program ini merupakan inisiatif besar kami tahun ini untuk pelestarian lingkungan.</p>
            <p class="mb-6">Didukung oleh 700 donatur setia dan puluhan perusahaan mitra, gerakan ini tidak sekadar menanam, tetapi juga merawat. Masyarakat sekitar hutan dilibatkan langsung sebagai pengawas dan perawat bibit pohon, memberikan mereka sumber pendapatan tambahan sekaligus kesadaran menjaga hutan.</p>
            <h3 class="text-2xl font-bold text-[#12355B] mt-8 mb-4">Dampak Jangka Panjang</h3>
            <p class="mb-6">Seluas 45 hektar lahan kritis kini mulai dihijaukan dengan bibit pohon keras bernilai ekologis tinggi seperti mahoni, jabon, dan berbagai tanaman buah lokal. Reboisasi ini diharapkan dapat memulihkan sumber air tanah yang sempat mengering dalam lima tahun terakhir.</p>
            <p class="mb-6">Kami terus membuka kesempatan bagi siapa saja yang ingin berpartisipasi dalam fase penanaman berikutnya. Satu bibit pohon yang Anda donasikan hari ini, akan memberikan napas kehidupan bagi bumi selama puluhan tahun ke depan.</p>
        
            </div>
            
            <div class="mt-16 pt-8 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <h4 class="font-bold text-[#12355B]">Bagikan cerita ini:</h4>
                    <div class="flex gap-3">
                        <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#D62828] hover:text-white transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></button>
                        <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#D62828] hover:text-white transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></button>
                        <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#D62828] hover:text-white transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg></button>
                    </div>
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
                                    <img src="/images/logo2.webp" alt="Bakti Merah Putih" class="h-14 w-auto object-contain">
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
                                        <a href="https://maps.app.goo.gl/bVA5qdGNFRjgWd2d9" target="_blank" class="hover:text-white transition-colors">Jl. RS. Fatmawati Raya No.28 AA 1, RT.1/RW.5, Cipete Sel., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12420</a>
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
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            });
                } else {
                    header.classList.add('bg-transparent');
                    header.classList.remove('bg-white', 'shadow-sm');
                    logo.src = '/images/logo.webp';
                    
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
