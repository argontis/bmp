<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Donasi - Admin BMP</title>
    
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
                        secondary: '#12355B',
                        background: '#F4F7FE'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Plus Jakarta Sans', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-gray-800 antialiased font-sans flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-72 bg-white shadow-xl flex flex-col h-full border-r border-gray-100 relative z-20">
        <div class="p-8 border-b border-gray-100 flex items-center justify-center">
            <img src="/images/logo2.png" alt="Admin BMP" class="h-16 w-auto object-contain">
        </div>
        
        <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-2">
            <p class="px-4 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Menu Utama</p>
            
            <a href="/admin" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
                Dashboard
            </a>
            
            <a href="/admin/kegiatan" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>
                Daftar Kegiatan
            </a>
            
            <a href="/admin/donatur" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                Donatur & RFM
            </a>
            
            <a href="/admin/transaksi" class="flex items-center gap-3 px-4 py-3 bg-red-50 text-primary rounded-xl font-bold transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path><path d="M14 8H8"></path><path d="M16 12H8"></path><path d="M13 16H8"></path></svg>
                Transaksi Donasi
            </a>

            <a href="/admin/relawan" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-bold transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path><path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08v0c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"></path><path d="m18 15-2-2"></path><path d="m15 18-2-2"></path></svg>
                Daftar Relawan
            </a>

            <a href="/admin/galeri" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>
                Daftar Galeri
            </a>

            <a href="/admin/artikel" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                Kelola Artikel
            </a>

        </nav>
        
        <div class="p-4 border-t border-gray-100">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 px-4 py-3 text-red-600 bg-red-50 hover:bg-red-100 rounded-xl font-bold transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" x2="9" y1="12" y2="12"></line></svg>
                    Keluar Sistem
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- Topbar -->
        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-10 relative z-10 border-b border-gray-100">
            <div>
                <h1 class="text-2xl font-extrabold text-secondary font-heading tracking-tight">Transaksi Donasi</h1>
                <p class="text-sm text-gray-500 font-medium">Pantau seluruh riwayat transaksi donasi yang masuk ke sistem.</p>
            </div>
            <div class="flex items-center gap-6">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400 hover:text-gray-600 cursor-pointer transition-colors"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                    <span class="absolute top-0 right-0 w-2.5 h-2.5 bg-primary rounded-full border-2 border-white"></span>
                </div>
                <div class="h-8 w-px bg-gray-200"></div>
                <div class="flex items-center gap-3 cursor-pointer">
                    <div class="text-right">
                        <p class="text-sm font-bold text-secondary">{{ auth()->user()->name ?? 'Administrator' }}</p>
                        <p class="text-xs text-emerald-500 font-semibold">Online</p>
                    </div>
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=D62828&color=fff" alt="Admin" class="w-10 h-10 rounded-xl shadow-sm">
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="flex-1 overflow-y-auto p-10">
            
            <!-- Transaction Table Section -->
            <div class="bg-white rounded-3xl shadow-[0_4px_24px_-8px_rgba(0,0,0,0.08)] border border-gray-50 overflow-hidden">
                <div class="p-8 border-b border-gray-100 flex items-center justify-between bg-white sticky top-0 z-10">
                    <div>
                        <h2 class="text-lg font-extrabold text-secondary font-heading">Riwayat Transaksi</h2>
                        <p class="text-sm text-gray-500 mt-1">Daftar semua donasi dari donatur ke berbagai kegiatan.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                            <input type="text" placeholder="Cari donatur / ID..." class="pl-9 pr-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent w-64">
                        </div>
                        <button class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-xl font-bold hover:bg-gray-50 transition-colors text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                            Filter
                        </button>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Tanggal & ID</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Donatur</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Kegiatan</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Nominal</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Metode</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($donations as $donation)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary text-sm">{{ $donation->created_at->format('d M Y, H:i') }}</p>
                                    <p class="text-xs text-gray-400 font-mono mt-1">#TRX-{{ str_pad($donation->id, 5, '0', STR_PAD_LEFT) }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold text-xs uppercase">
                                            {{ substr($donation->user->name ?? 'A', 0, 2) }}
                                        </div>
                                        <p class="font-bold text-secondary text-sm">{{ $donation->user->name ?? 'Unknown' }}</p>
                                    </div>
                                </td>
                                <td class="py-5 px-8">
                                    <p class="text-gray-600 font-medium text-sm truncate max-w-[200px]" title="{{ $donation->campaign->name ?? '-' }}">
                                        {{ $donation->campaign->name ?? '-' }}
                                    </p>
                                </td>
                                <td class="py-5 px-8">
                                    <p class="font-extrabold text-secondary">Rp {{ number_format($donation->amount, 0, ',', '.') }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    @php
                                        $pm = strtolower($donation->payment_method ?? 'transfer');
                                    @endphp
                                    @if(str_contains($pm, 'gopay'))
                                        <img src="/logo/GoPay Logo - Colored - zonalogo.com.png" class="h-4 object-contain" alt="GoPay" title="GoPay">
                                    @elseif(str_contains($pm, 'dana'))
                                        <img src="/logo/Dana App Icon - Colored - zonalogo.com.png" class="h-4 object-contain" alt="DANA" title="DANA">
                                    @elseif(str_contains($pm, 'bca'))
                                        <img src="/logo/Bank Central Asia (BCA) Logo - Colored - 818x256 - zonalogo.com.png" class="h-4 object-contain" alt="BCA" title="BCA">
                                    @elseif(str_contains($pm, 'ovo'))
                                        <img src="/logo/OVO Logo - Colored - zonalogo.com.png" class="h-4 object-contain" alt="OVO" title="OVO">
                                    @elseif(str_contains($pm, 'shopee') || str_contains($pm, 'spay'))
                                        <img src="/logo/ShopeePay Logo - Colored - zonalogo.com.png" class="h-4 object-contain" alt="ShopeePay" title="ShopeePay">
                                    @elseif(str_contains($pm, 'mandiri'))
                                        <img src="/logo/Bank Mandiri Logo - Colored - 873x256 - zonalogo.com.png" class="h-4 object-contain" alt="Mandiri" title="Mandiri">
                                    @elseif(str_contains($pm, 'bri'))
                                        <img src="/logo/Bank Rakyat Indonesia (BRI) Logo - Horizontal With Full Name Colored - 505x256 - zonalogo.com.png" class="h-4 object-contain" alt="BRI" title="BRI">
                                    @elseif(str_contains($pm, 'bni'))
                                        <img src="/logo/Bank Negara Indonesia (BNI) Logo - Colored - 883x256 - zonalogo.com.png" class="h-4 object-contain" alt="BNI" title="BNI">
                                    @elseif(str_contains($pm, 'bsi') || str_contains($pm, 'syariah'))
                                        <img src="/logo/Bank BSI Logo - Horizontal Colored - 462x128 - zonalogo.com.png" class="h-4 object-contain" alt="BSI" title="BSI">
                                    @elseif(str_contains($pm, 'cimb'))
                                        <img src="/logo/Bank CIMB Niaga Logo - Colored - 1674x256 - zonalogo.com.png" class="h-4 object-contain" alt="CIMB Niaga" title="CIMB Niaga">
                                    @elseif(str_contains($pm, 'permata'))
                                        <img src="/logo/Bank Permata Logo - Colored - 1032x256 - zonalogo.com.png" class="h-4 object-contain" alt="Permata" title="Permata">
                                    @elseif(str_contains($pm, 'linkaja'))
                                        <img src="/logo/LinkAja Logo - Colored - zonalogo.com.png" class="h-4 object-contain" alt="LinkAja" title="LinkAja">
                                    @elseif(str_contains($pm, 'qris'))
                                        <img src="/logo/QRIS Logo - Black - 675x256 - zonalogo.com.png" class="h-4 object-contain" alt="QRIS" title="QRIS">
                                    @elseif(str_contains($pm, 'indomaret'))
                                        <img src="/logo/Indomaret Logo - Colored - zonalogo.com.png" class="h-4 object-contain" alt="Indomaret" title="Indomaret">
                                    @elseif(str_contains($pm, 'alfamart'))
                                        <img src="/logo/Alfamart Logo - Colored - 800x256 - zonalogo.com.png" class="h-4 object-contain" alt="Alfamart" title="Alfamart">
                                    @elseif(str_contains($pm, 'visa'))
                                        <img src="/logo/Visa Logo - Colored - 792x256 - zonalogo.com.png" class="h-4 object-contain" alt="Visa" title="Visa">
                                    @elseif(str_contains($pm, 'mastercard'))
                                        <img src="/logo/Mastercard Logo - Colored - 415x256 - zonalogo.com.png" class="h-4 object-contain" alt="Mastercard" title="Mastercard">
                                    @else
                                        <span class="text-sm font-medium text-gray-500 border border-gray-200 px-2 py-1 rounded-md">{{ $donation->payment_method ?? 'Transfer' }}</span>
                                    @endif
                                </td>
                                <td class="py-5 px-8">
                                    @if($donation->status == 'Berhasil')
                                        <span class="inline-flex px-3 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-lg border border-emerald-100">Berhasil</span>
                                    @elseif($donation->status == 'Menunggu')
                                        <span class="inline-flex px-3 py-1 bg-amber-50 text-amber-600 font-bold text-xs rounded-lg border border-amber-100">Menunggu</span>
                                    @else
                                        <span class="inline-flex px-3 py-1 bg-red-50 text-red-600 font-bold text-xs rounded-lg border border-red-100">{{ $donation->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="py-12 text-center text-gray-400 font-medium">Belum ada riwayat transaksi.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="p-6 border-t border-gray-100">
                    {{ $donations->links() }}
                </div>
            </div>
            
        </div>
    </main>

</body>
</html>
