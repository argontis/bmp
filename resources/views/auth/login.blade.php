<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - Bakti Merah Putih</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-[#F4F6F9]" style="font-family: Inter, sans-serif;">
        <div class="relative w-full max-w-[430px] min-h-screen bg-white flex flex-col shadow-[0_0_80px_-20px_rgba(0,0,0,0.18)] overflow-hidden">
            <div class="relative overflow-hidden flex-shrink-0" style="height: 300px;">
                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=800&amp;h=600&amp;fit=crop&amp;auto=format" alt="Anak-anak ceria" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0" style="background: linear-gradient(160deg, rgba(18, 53, 91, 0.933) 0%, rgba(214, 40, 40, 0.8) 100%);"></div>
                <div class="absolute inset-0 opacity-[0.08] pointer-events-none" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 20px 20px;"></div>
                <button onclick="window.location.href='/'" class="absolute top-12 left-5 flex items-center gap-1.5 text-white/80 hover:text-white transition-colors text-[13px] font-semibold z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left w-4 h-4"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg> Kembali
                </button>
                <div class="absolute inset-0 flex flex-col items-center justify-center gap-3">
                    <img src="/images/logo.png" alt="Bakti Merah Putih" class="h-16 w-auto object-contain drop-shadow-lg">
                    <p class="text-white/75 text-[13px] font-medium tracking-wide">Bersama Menebar Kebaikan untuk Indonesia</p>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="flex items-center gap-1 px-3 py-1 rounded-full bg-white/15 border border-white/25 text-white text-[10px] font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5 text-emerald-400"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> Terverifikasi
                        </span>
                        <span class="flex items-center gap-1 px-3 py-1 rounded-full bg-white/15 border border-white/25 text-white text-[10px] font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-2.5 h-2.5 text-emerald-400"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> 78 Program Aktif
                        </span>
                    </div>
                </div>
                <svg class="absolute bottom-0 left-0 w-full" viewBox="0 0 430 32" preserveAspectRatio="none"><path d="M0 32 Q215 0 430 32 L430 32 L0 32Z" fill="white"></path></svg>
            </div>
            
            <div class="flex-1 flex flex-col px-6 pt-2 pb-8 overflow-y-auto">
                <div class="mb-6 text-center">
                    <h2 id="welcome-title" class="text-[22px] font-extrabold text-[#12355B] tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Selamat Datang</h2>
                    <p id="welcome-subtitle" class="text-[13px] text-gray-400 mt-1">Masuk untuk mulai berdonasi</p>
                </div>
                
                <div class="flex bg-[#F4F6F9] rounded-2xl p-1 mb-5">
                    <button id="tab-login" class="flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 bg-white shadow-sm text-[#12355B]">Masuk</button>
                    <button id="tab-register" class="flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 text-gray-400 hover:text-gray-600">Daftar</button>
                </div>
                
                <button class="w-full flex items-center justify-center gap-3 py-3.5 bg-white border border-gray-200 rounded-2xl text-[14px] font-bold text-[#1B1B1B] hover:bg-gray-50 hover:border-gray-300 active:scale-[0.98] transition-all duration-150 shadow-sm mb-5 disabled:opacity-60">
                    <svg viewBox="0 0 24 24" class="w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"></path>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
                    </svg>
                    Lanjutkan dengan Google
                </button>
                
                <div class="flex items-center gap-3 mb-5">
                    <div class="flex-1 h-px bg-gray-200"></div>
                    <span class="text-[11px] text-gray-400 font-semibold">atau dengan email</span>
                    <div class="flex-1 h-px bg-gray-200"></div>
                </div>
                
                <form id="form-login" class="space-y-3" onsubmit="event.preventDefault(); window.location.href='/dashboard';" style="opacity: 1; transform: none; display: block;">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                        <input type="email" placeholder="Alamat email" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" value="" style="--tw-ring-color: #D6282840;">
                    </div>
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <input type="password" placeholder="Kata sandi" required="" class="w-full pl-11 pr-12 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" value="" style="--tw-ring-color: #D6282840;">
                        <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></button>
                    </div>
                    <div class="text-right">
                        <button type="button" class="text-[12px] font-bold" style="color: rgb(214, 40, 40);">Lupa kata sandi?</button>
                    </div>
                    <div class="pt-1">
                        <button type="submit" class="w-full py-4 rounded-2xl text-[15px] font-extrabold text-white active:scale-[0.98] transition-all disabled:opacity-50 flex items-center justify-center gap-2 shadow-lg" style="background: rgb(214, 40, 40); box-shadow: rgba(214, 40, 40, 0.6) 0px 12px 28px -8px;">
                            Masuk Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                        </button>
                    </div>
                </form>

                <form id="form-register" class="space-y-3" onsubmit="event.preventDefault(); window.location.href='/dashboard';" style="opacity: 1; transform: none; display: none;">
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <input type="text" placeholder="Nama lengkap" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                    </div>
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                        <input type="email" placeholder="Alamat email" required="" class="w-full pl-11 pr-4 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                    </div>
                    <div class="relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <input type="password" placeholder="Kata sandi" required="" class="w-full pl-11 pr-12 py-3.5 bg-[#F4F6F9] rounded-2xl text-[13px] text-[#1B1B1B] placeholder-gray-400 outline-none focus:ring-2 transition-all border border-transparent" style="--tw-ring-color: #D6282840;">
                        <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-4 h-4"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></button>
                    </div>
                    <div class="pt-1">
                        <button type="submit" class="w-full py-4 rounded-2xl text-[15px] font-extrabold text-white active:scale-[0.98] transition-all disabled:opacity-50 flex items-center justify-center gap-2 shadow-lg" style="background: rgb(214, 40, 40); box-shadow: rgba(214, 40, 40, 0.6) 0px 12px 28px -8px;">
                            Buat Akun
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right w-4 h-4"><path d="m9 18 6-6-6-6"></path></svg>
                        </button>
                    </div>
                </form>
                
                <div class="mt-6 flex items-center justify-center gap-4">
                    <div class="flex items-center gap-1.5 text-[11px] text-gray-400 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-3.5 h-3.5 text-emerald-500"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg> Data aman &amp; terenkripsi
                    </div>
                    <div class="w-1 h-1 rounded-full bg-gray-300"></div>
                    <div class="flex items-center gap-1.5 text-[11px] text-gray-400 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 text-emerald-500"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg> Terverifikasi resmi
                    </div>
                </div>
                
                <p class="text-center text-[10px] text-gray-400 mt-3 leading-relaxed px-4">
                    Dengan masuk, Anda menyetujui <a href="#" class="font-bold" style="color: rgb(214, 40, 40);">Syarat &amp; Ketentuan</a> dan <a href="#" class="font-bold" style="color: rgb(214, 40, 40);">Kebijakan Privasi</a> Bakti Merah Putih
                </p>
            </div>
        </div>
    </div>
    

    <script>
        const tabLogin = document.getElementById('tab-login');
        const tabRegister = document.getElementById('tab-register');
        const formLogin = document.getElementById('form-login');
        const formRegister = document.getElementById('form-register');
        const welcomeTitle = document.getElementById('welcome-title');
        const welcomeSubtitle = document.getElementById('welcome-subtitle');

        const activeClass = "flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 bg-white shadow-sm text-[#12355B]";
        const inactiveClass = "flex-1 py-2.5 rounded-xl text-[13px] font-bold transition-all duration-200 text-gray-400 hover:text-gray-600";

        tabLogin.addEventListener('click', () => {
            tabLogin.className = activeClass;
            tabRegister.className = inactiveClass;
            
            formLogin.style.display = 'block';
            formRegister.style.display = 'none';
            
            welcomeTitle.innerText = "Selamat Datang";
            welcomeSubtitle.innerText = "Masuk untuk mulai berdonasi";
        });

        tabRegister.addEventListener('click', () => {
            tabRegister.className = activeClass;
            tabLogin.className = inactiveClass;
            
            formRegister.style.display = 'block';
            formLogin.style.display = 'none';
            
            welcomeTitle.innerText = "Buat Akun Baru";
            welcomeSubtitle.innerText = "Bergabung dan buat perubahan nyata";
        });
    </script>
</body>
</html>
