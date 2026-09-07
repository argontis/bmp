<!DOCTYPE html>
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
