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
            <a href="/" class="shrink-0 block"><img src="/images/logo2.webp" alt="Bakti Merah Putih" class="h-10 w-auto object-contain"></a>
            <a href="javascript:void(0)" onclick="window.history.length > 1 ? window.history.back() : window.location.href='/relawan'" class="text-sm font-bold text-gray-500 hover:text-[#D62828] transition-colors flex items-center gap-2">
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
            
            @if(session('success'))
            <div class="mb-6 bg-emerald-50 text-emerald-700 px-6 py-4 rounded-2xl border border-emerald-100 flex items-center gap-3 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><path d="M22 4L12 14.01l-3-3"></path></svg>
                {{ session('success') }}
            </div>
            @endif

            <form action="/relawan/daftar" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" readonly class="w-full py-3.5 px-4 rounded-xl bg-gray-100 border border-gray-200 text-gray-500 text-sm outline-none cursor-not-allowed">
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Alamat Email</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" readonly class="w-full py-3.5 px-4 rounded-xl bg-gray-100 border border-gray-200 text-gray-500 text-sm outline-none cursor-not-allowed">
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Nomor Telepon/WhatsApp</label>
                    <input type="tel" name="phone" placeholder="08xxxxxxxxxx" class="w-full py-3.5 px-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Pilihan Kegiatan (Opsional)</label>
                    <div class="relative">
                        <select id="campaignSelect" name="campaign_id" class="w-full py-3.5 pl-4 pr-10 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] font-bold text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors appearance-none cursor-pointer">
                            <option value="">Relawan Umum (Tidak terikat kegiatan khusus)</option>
                            @foreach($campaigns as $campaign)
                                <option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500"><path d="m6 9 6 6 6-6"></path></svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Pilihan Peran Relawan</label>
                    <div class="relative">
                        <select id="roleSelect" name="role" class="w-full py-3.5 pl-4 pr-10 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] font-bold text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors appearance-none cursor-pointer">
                            <option value="Umum">Relawan Umum</option>
                            <option value="Pengajar">Pengajar / Edukator</option>
                            <option value="Medis">Tim Medis</option>
                            <option value="Logistik">Tim Logistik & Dapur Umum</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gray-500"><path d="m6 9 6 6 6-6"></path></svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-[#1B1B1B] mb-2">Motivasi Bergabung</label>
                    <textarea name="motivation" rows="4" placeholder="Ceritakan singkat mengapa Anda ingin bergabung..." class="w-full py-3.5 px-4 rounded-xl bg-gray-50 border border-gray-200 text-[#1B1B1B] text-sm outline-none focus:border-[#D62828] focus:bg-white transition-colors resize-none" required></textarea>
                </div>
                
                <button type="submit" class="w-full py-4 mt-4 rounded-2xl bg-[#D62828] text-white font-extrabold text-sm hover:bg-[#B91C1C] transition-colors shadow-[0_8px_20px_-8px_rgba(214,40,40,0.7)] hover:-translate-y-0.5">Kirim Pendaftaran</button>
            </form>
        </div>
    </main>
    
    <script>
        // Pre-select role and campaign if passed in URL
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

            const campaignId = urlParams.get('campaign_id');
            if(campaignId) {
                const select = document.getElementById('campaignSelect');
                if(select) {
                    for(let i=0; i<select.options.length; i++) {
                        if(select.options[i].value === campaignId) {
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
