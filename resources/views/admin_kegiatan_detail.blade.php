<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kegiatan - Admin BMP</title>
    
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
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased selection:bg-primary selection:text-white flex h-screen overflow-hidden">
    
    <!-- Sidebar -->
    <aside class="w-[280px] bg-secondary flex flex-col h-screen shrink-0 relative overflow-hidden hidden md:flex">
        <div class="p-8 border-b border-white/10 relative z-10 flex items-center justify-center">
            <img src="/images/logo.png" alt="Logo BMP" class="h-16 w-auto object-contain">
        </div>
        
        <nav class="flex-1 py-8 px-4 overflow-y-auto relative z-10 space-y-2">
            <a href="{{ route('admin') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
                Dashboard
            </a>
            <a href="{{ route('admin.kegiatan') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl bg-primary text-white font-bold shadow-lg shadow-red-500/20">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path></svg>
                Kegiatan & Kampanye
            </a>
            <a href="{{ route('admin.donatur') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                Data Donatur
            </a>
            <a href="{{ route('admin.relawan') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-handshake"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/><path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08v0c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"/><path d="m18 15-2-2"/><path d="m15 18-2-2"/></svg>
                Data Relawan
            </a>
            <a href="{{ route('admin.transaksi') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"></path><path d="M3 5v14a2 2 0 0 0 2 2h16v-5"></path><path d="M18 12a2 2 0 0 0 0 4h4v-4Z"></path></svg>
                Riwayat Transaksi
            </a>
        </nav>
        
        <div class="p-6 relative z-10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-3 px-4 py-3 rounded-xl bg-white/5 text-white hover:bg-red-500 hover:text-white transition-all font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" x2="9" y1="12" y2="12"></line></svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- Topbar -->
        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-10 relative z-10 border-b border-gray-100">
            <div>
                <h1 class="text-2xl font-extrabold text-secondary font-heading tracking-tight">Detail Kegiatan</h1>
                <p class="text-sm text-gray-500 font-medium">Kembali ke <a href="{{ route('admin.kegiatan') }}" class="text-primary hover:underline">Daftar Kegiatan</a></p>
            </div>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-3 cursor-pointer">
                    <div class="text-right">
                        <p class="text-sm font-bold text-secondary">{{ auth()->user()->name ?? 'Administrator' }}</p>
                        <p class="text-xs text-emerald-500 font-semibold">Online</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="flex-1 overflow-y-auto p-10">
            <div class="bg-white rounded-3xl shadow-[0_4px_24px_-8px_rgba(0,0,0,0.08)] border border-gray-50 overflow-hidden mb-8 p-8">
                <h2 class="text-2xl font-extrabold text-secondary font-heading mb-2">{{ $campaign->name }}</h2>
                <p class="text-gray-500 mb-6">{{ $campaign->description }}</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
                        <p class="text-sm text-gray-500 mb-1">Lokasi</p>
                        <p class="font-bold text-secondary">{{ $campaign->location }}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
                        <p class="text-sm text-gray-500 mb-1">Status</p>
                        <p class="font-bold text-secondary">{{ $campaign->status }}</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-xl border border-gray-100">
                        <p class="text-sm text-gray-500 mb-1">Target SDM</p>
                        <p class="font-bold text-secondary">{{ $campaign->volunteers->count() }} / {{ $campaign->volunteer_target }} Terisi</p>
                    </div>
                </div>
            </div>

            <!-- Campaign Table Section -->
            <div class="bg-white rounded-3xl shadow-[0_4px_24px_-8px_rgba(0,0,0,0.08)] border border-gray-50 overflow-hidden">
                <div class="p-8 border-b border-gray-100 flex items-center justify-between bg-white sticky top-0 z-10">
                    <div>
                        <h2 class="text-lg font-extrabold text-secondary font-heading">Daftar Relawan ({{ $campaign->volunteers->count() }})</h2>
                        <p class="text-sm text-gray-500 mt-1">Relawan yang mendaftar pada kegiatan ini.</p>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Nama Relawan</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Email</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Telepon</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Peran</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($campaign->volunteers as $volunteer)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary">{{ $volunteer->name }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <p class="text-gray-600 font-medium text-sm">{{ $volunteer->email }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <p class="text-gray-600 font-medium text-sm">{{ $volunteer->phone }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-600 font-bold text-xs rounded-lg border border-gray-200">{{ $volunteer->role }}</span>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-12 px-8 text-center">
                                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-50 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-secondary mb-1">Belum Ada Relawan</h3>
                                    <p class="text-gray-500 text-sm">Belum ada relawan yang mendaftar untuk kegiatan ini.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
