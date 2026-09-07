<!DOCTYPE html>
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
