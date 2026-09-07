import os
import re

os.makedirs('resources/views/relawan_pages', exist_ok=True)

# 1. Create form page (relawan/daftar.blade.php)
# I'll base it loosely on the auth/login layout or just a standard centered form layout.
form_html = """<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Relawan - Bakti Merah Putih</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#D62828', secondary: '#12355B' },
                    fontFamily: { sans: ['Inter', 'sans-serif'], heading: ['Plus Jakarta Sans', 'sans-serif'] }
                }
            }
        }
    </script>
</head>
<body class="bg-[#FBFAF7] text-[#1B1B1B] font-sans antialiased min-h-screen flex flex-col">
    <!-- Simple Header -->
    <header class="bg-white shadow-sm py-4">
        <div class="max-w-[1280px] mx-auto px-6 flex items-center justify-between">
            <a href="/" class="shrink-0 block"><img src="/images/logo2.png" alt="Bakti Merah Putih" class="h-10 w-auto object-contain"></a>
            <a href="/relawan" class="text-sm font-bold text-gray-500 hover:text-[#D62828] transition-colors flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m15 18-6-6 6-6"/></svg> Kembali
            </a>
        </div>
    </header>

    <main class="flex-1 flex items-center justify-center py-12 px-6">
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 sm:p-10 w-full max-w-xl">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-extrabold text-[#1B1B1B] mb-3" style="font-family: 'Plus Jakarta Sans', sans-serif;">Formulir Pendaftaran Relawan</h1>
                <p class="text-gray-500 text-sm">Bergabunglah bersama kami untuk membawa perubahan positif bagi Indonesia.</p>
            </div>
            
            <form action="/relawan" method="GET" class="space-y-5">
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Nama Lengkap</label>
                    <input type="text" placeholder="Masukkan nama lengkap Anda" class="w-full py-3.5 px-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Alamat Email</label>
                    <input type="email" placeholder="contoh@email.com" class="w-full py-3.5 px-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Nomor Telepon/WhatsApp</label>
                    <input type="tel" placeholder="08xxxxxxxxxx" class="w-full py-3.5 px-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Pilihan Peran Relawan</label>
                    <div class="relative">
                        <select id="roleSelect" class="w-full py-3.5 pl-4 pr-10 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] font-bold text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors appearance-none cursor-pointer">
                            <option value="umum">Relawan Umum</option>
                            <option value="pengajar">Pengajar / Edukator</option>
                            <option value="medis">Tim Medis</option>
                            <option value="logistik">Tim Logistik & Dapur Umum</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500"><path d="m6 9 6 6 6-6"></path></svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Motivasi Bergabung</label>
                    <textarea rows="4" placeholder="Ceritakan singkat mengapa Anda ingin bergabung..." class="w-full py-3.5 px-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors resize-none" required></textarea>
                </div>
                
                <button type="submit" class="w-full py-4 mt-4 rounded-2xl bg-[#D62828] text-white font-extrabold text-sm hover:bg-[#B91C1C] transition-colors shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)] hover:-translate-y-0.5">Kirim Pendaftaran</button>
            </form>
        </div>
    </main>
    
    <script>
        // Pre-select role if passed in URL (e.g. ?role=pengajar)
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const role = urlParams.get('role');
            if(role) {
                const select = document.getElementById('roleSelect');
                if(select) {
                    for(let i=0; i<select.options.length; i++) {
                        if(select.options[i].value === role) {
                            select.selectedIndex = i;
                            break;
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
"""

# 2. Create Video Page
video_html = """<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Relawan - Bakti Merah Putih</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { primary: '#D62828', secondary: '#12355B' },
                    fontFamily: { sans: ['Inter', 'sans-serif'], heading: ['Plus Jakarta Sans', 'sans-serif'] }
                }
            }
        }
    </script>
</head>
<body class="bg-[#12355B] text-white font-sans antialiased min-h-screen flex flex-col items-center justify-center relative overflow-hidden">
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
    
    <a href="/relawan" class="absolute top-8 left-8 z-20 text-sm font-bold text-white/70 hover:text-white transition-colors flex items-center gap-2 bg-black/20 px-4 py-2 rounded-full backdrop-blur-md border border-white/10">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><path d="m15 18-6-6 6-6"/></svg> Kembali ke Halaman Relawan
    </a>

    <div class="relative z-10 w-full max-w-4xl px-6">
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-5xl font-extrabold mb-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Semangat Relawan Bakti Merah Putih</h1>
            <p class="text-white/70 text-lg">Lihat bagaimana para relawan kami membawa senyum dan harapan di berbagai pelosok nusantara.</p>
        </div>
        
        <!-- Video Player Container (16:9 aspect ratio) -->
        <div class="relative w-full rounded-2xl overflow-hidden shadow-2xl bg-black border border-white/10" style="padding-top: 56.25%;">
            <!-- Using a YouTube embed placeholder -->
            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        
        <div class="mt-10 text-center">
            <button onclick="window.location.href='/relawan/daftar'" class="px-8 py-4 rounded-full bg-[#D62828] hover:bg-[#B91C1C] text-white font-bold transition-all shadow-[0_8px_25px_-8px_rgba(214,40,40,0.6)] hover:-translate-y-1">Bergabung Menjadi Relawan Sekarang</button>
        </div>
    </div>
</body>
</html>
"""

with open('resources/views/relawan_pages/daftar.blade.php', 'w') as f:
    f.write(form_html)
    
with open('resources/views/relawan_pages/video.blade.php', 'w') as f:
    f.write(video_html)

# 3. Update routes in web.php
with open('routes/web.php', 'r') as f:
    web = f.read()
    
if '/relawan/daftar' not in web:
    routes_to_add = """
// Relawan Pages
Route::get('/relawan/daftar', function () { return view('relawan_pages.daftar'); });
Route::get('/relawan/video', function () { return view('relawan_pages.video'); });
"""
    web = web + routes_to_add
    with open('routes/web.php', 'w') as f:
        f.write(web)

# 4. Update buttons in relawan.blade.php
with open('resources/views/relawan.blade.php', 'r') as f:
    relawan = f.read()

# Replace Daftar Sekarang
relawan = relawan.replace(
    '<button class="px-8 py-4 rounded-full bg-[#D62828] hover:bg-[#B91C1C] text-white font-bold transition-all shadow-[0_8px_25px_-8px_rgba(214,40,40,0.6)] hover:-translate-y-1">Daftar Sekarang</button>',
    '<button onclick="window.location.href=\'/relawan/daftar\'" class="px-8 py-4 rounded-full bg-[#D62828] hover:bg-[#B91C1C] text-white font-bold transition-all shadow-[0_8px_25px_-8px_rgba(214,40,40,0.6)] hover:-translate-y-1">Daftar Sekarang</button>'
)

# Replace Tonton Video
relawan = relawan.replace(
    '<button class="px-8 py-4 rounded-full bg-white/10 hover:bg-white/20 text-white font-bold transition-all backdrop-blur-sm border border-white/20 flex items-center gap-2">',
    '<button onclick="window.location.href=\'/relawan/video\'" class="px-8 py-4 rounded-full bg-white/10 hover:bg-white/20 text-white font-bold transition-all backdrop-blur-sm border border-white/20 flex items-center gap-2">'
)

# Replace Daftar Pengajar
relawan = relawan.replace(
    '<button class="px-5 py-2.5 rounded-full bg-white border-2 border-gray-200 hover:border-[#D62828] hover:text-[#D62828] text-[#1B1B1B] font-bold text-sm transition-colors">Daftar Pengajar</button>',
    '<button onclick="window.location.href=\'/relawan/daftar?role=pengajar\'" class="px-5 py-2.5 rounded-full bg-white border-2 border-gray-200 hover:border-[#D62828] hover:text-[#D62828] text-[#1B1B1B] font-bold text-sm transition-colors">Daftar Pengajar</button>'
)

# Might as well fix Daftar Tim Medis if it's there
relawan = relawan.replace(
    '<button class="px-5 py-2.5 rounded-full bg-white border-2 border-gray-200 hover:border-[#D62828] hover:text-[#D62828] text-[#1B1B1B] font-bold text-sm transition-colors">Daftar Tim Medis</button>',
    '<button onclick="window.location.href=\'/relawan/daftar?role=medis\'" class="px-5 py-2.5 rounded-full bg-white border-2 border-gray-200 hover:border-[#D62828] hover:text-[#D62828] text-[#1B1B1B] font-bold text-sm transition-colors">Daftar Tim Medis</button>'
)

with open('resources/views/relawan.blade.php', 'w') as f:
    f.write(relawan)

print("Relawan pages created and linked successfully.")
