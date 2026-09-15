<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Bakti Merah Putih</title>
    
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
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <script>
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
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
            
            <a href="/admin" class="flex items-center gap-3 px-4 py-3 bg-red-50 text-primary rounded-xl font-bold transition-all">
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
            
            <a href="/admin/transaksi" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all">
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
                <h1 class="text-2xl font-extrabold text-secondary font-heading tracking-tight">Dashboard Admin</h1>
                <p class="text-sm text-gray-500 font-medium">Ringkasan performa dan kegiatan hari ini.</p>
            </div>
            <div class="flex items-center gap-6">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400 hover:text-gray-600 cursor-pointer transition-colors"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
                    <span class="absolute top-0 right-0 w-2.5 h-2.5 bg-primary rounded-full border-2 border-white"></span>
                </div>
                <div class="h-8 w-px bg-gray-200"></div>
                <div class="flex items-center gap-3 cursor-pointer">
                    <div class="text-right">
                        <p class="text-sm font-bold text-secondary">{{ auth()->user()->name ?? 'Adminstrator' }}</p>
                        <p class="text-xs text-emerald-500 font-semibold">Online</p>
                    </div>
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Admin') }}&background=D62828&color=fff" alt="Admin" class="w-10 h-10 rounded-xl shadow-sm">
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <div class="flex-1 overflow-y-auto p-10">
            
            <!-- Stats Row -->
            <div class="grid grid-cols-4 gap-6 mb-10">
                <div class="bg-white rounded-2xl p-6 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] border border-gray-50 flex items-center gap-5">
                    <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-500"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-semibold mb-1">Total Donatur</p>
                        <h3 class="text-2xl font-extrabold text-secondary font-heading">24.5k</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] border border-gray-50 flex items-center gap-5">
                    <div class="w-14 h-14 rounded-full bg-emerald-50 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-emerald-500"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-semibold mb-1">Total Nominal</p>
                        <h3 class="text-2xl font-extrabold text-secondary font-heading">Rp 1.2M</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] border border-gray-50 flex items-center gap-5">
                    <div class="w-14 h-14 rounded-full bg-amber-50 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-amber-500"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-semibold mb-1">Rata-rata RFM</p>
                        <h3 class="text-2xl font-extrabold text-secondary font-heading">A-</h3>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-6 shadow-[0_2px_12px_-4px_rgba(0,0,0,0.08)] border border-gray-50 flex items-center gap-5">
                    <div class="w-14 h-14 rounded-full bg-purple-50 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-purple-500"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-semibold mb-1">Kegiatan Aktif</p>
                        <h3 class="text-2xl font-extrabold text-secondary font-heading">{{ $campaigns->where('status', 'Aktif')->count() ?? 12 }}</h3>
                    </div>
                </div>
            </div>

            <!-- Campaign Table Section -->
            <div class="bg-white rounded-3xl shadow-[0_4px_24px_-8px_rgba(0,0,0,0.08)] border border-gray-50 overflow-hidden">
                <div class="p-8 border-b border-gray-100 flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-extrabold text-secondary font-heading">Daftar Kegiatan & Performa</h2>
                        <p class="text-sm text-gray-500 mt-1">Pantau performa kegiatan berdasarkan skor RFM dan nominal.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <form action="{{ route('admin') }}" method="GET" class="relative">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kegiatan..." class="pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm w-64 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3.5 top-3 text-gray-400"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        </form>
                        <button onclick="toggleModal('modal-add-kegiatan')" class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-xl font-bold shadow-lg shadow-red-200 hover:-translate-y-0.5 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg>
                            Tambah Kegiatan
                        </button>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Nama Kegiatan</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Lokasi</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Jumlah Nominal</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Kategori</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Status</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">RFM Score</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($campaigns as $campaign)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary">{{ $campaign->name }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <div class="flex items-center gap-2 text-gray-600 font-medium text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        {{ $campaign->location }}
                                    </div>
                                </td>
                                <td class="py-5 px-8">
                                    <p class="font-extrabold text-secondary">Rp {{ number_format($campaign->nominal, 0, ',', '.') }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-600 font-bold text-xs rounded-lg border border-gray-200">{{ $campaign->category ?? '-' }}</span>
                                </td>
                                <td class="py-5 px-8">
                                    @if($campaign->status == 'Aktif')
                                        <span class="inline-flex px-3 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-lg border border-emerald-100">{{ $campaign->status }}</span>
                                    @elseif($campaign->status == 'Berjalan')
                                        <span class="inline-flex px-3 py-1 bg-amber-50 text-amber-600 font-bold text-xs rounded-lg border border-amber-100">{{ $campaign->status }}</span>
                                    @else
                                        <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-600 font-bold text-xs rounded-lg">{{ $campaign->status }}</span>
                                    @endif
                                </td>
                                <td class="py-5 px-8">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm
                                            {{ str_contains($campaign->rfm_score, 'A') ? 'bg-emerald-100 text-emerald-700' : 'bg-blue-100 text-blue-700' }}">
                                            {{ $campaign->rfm_score }}
                                        </div>
                                    </div>
                                </td>
                                <td class="py-5 px-8 text-right">
                                    <div class="flex items-center justify-end gap-2 transition-opacity">
                                        <button onclick="toggleModal('modal-edit-kegiatan-{{ $campaign->id }}')" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                        </button>
                                        <form action="{{ route('admin.kegiatan.destroy', $campaign->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors" title="Hapus">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="py-12 text-center text-gray-400 font-medium">Belum ada data kegiatan.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </main>

    <!-- Modal Tambah Kegiatan -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex" id="modal-add-kegiatan">
        <div class="relative w-auto my-6 mx-auto max-w-2xl w-full">
            <!-- Modal Content -->
            <div class="border-0 rounded-3xl shadow-2xl relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!-- Header -->
                <div class="flex items-start justify-between p-8 border-b border-solid border-gray-100 rounded-t">
                    <h3 class="text-2xl font-extrabold text-secondary font-heading">
                        Tambah Kegiatan Baru
                    </h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-gray-400 float-right text-3xl leading-none font-semibold outline-none focus:outline-none hover:text-gray-700 transition" onclick="toggleModal('modal-add-kegiatan')">
                        <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                        </span>
                    </button>
                </div>
                <!-- Body -->
                <form action="{{ route('admin.kegiatan.store') }}" method="POST">
                    @csrf
                    <div class="relative p-8 flex-auto space-y-5">
                        
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Nama Kegiatan</label>
                            <input type="text" name="name" required placeholder="Contoh: Beasiswa Anak Pedalaman" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Kategori Kegiatan</label>
                            <input type="text" name="category" placeholder="Contoh: Pendidikan, Kesehatan, Lingkungan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Lokasi</label>
                                <input type="text" name="location" required placeholder="Contoh: Papua Barat" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Jumlah Nominal (Rp)</label>
                                <input type="number" name="nominal" required placeholder="100000000" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">RFM Score</label>
                                <select name="rfm_score" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white appearance-none">
                                    <option value="A+">A+</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Status</label>
                                <select name="status" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white appearance-none">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Berjalan">Berjalan</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- Footer -->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-gray-100 rounded-b gap-3 bg-gray-50/50">
                        <button class="px-6 py-3 text-gray-500 bg-transparent font-bold uppercase text-sm rounded-xl outline-none focus:outline-none hover:bg-gray-100 transition-colors" type="button" onclick="toggleModal('modal-add-kegiatan')">
                            Batal
                        </button>
                        <button class="px-8 py-3 bg-primary text-white font-bold uppercase text-sm rounded-xl shadow-lg shadow-red-200 hover:-translate-y-0.5 transition-transform outline-none focus:outline-none" type="submit">
                            Simpan Kegiatan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="modal-add-kegiatan-backdrop"></div>

    <!-- Modals Edit Kegiatan -->
    @foreach($campaigns as $campaign)
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex" id="modal-edit-kegiatan-{{ $campaign->id }}">
        <div class="relative w-auto my-6 mx-auto max-w-2xl w-full">
            <div class="border-0 rounded-3xl shadow-2xl relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <div class="flex items-start justify-between p-8 border-b border-solid border-gray-100 rounded-t">
                    <h3 class="text-2xl font-extrabold text-secondary font-heading">Edit Kegiatan</h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-gray-400 float-right text-3xl leading-none font-semibold outline-none focus:outline-none hover:text-gray-700 transition" onclick="toggleModal('modal-edit-kegiatan-{{ $campaign->id }}')">
                        <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                        </span>
                    </button>
                </div>
                <form action="{{ route('admin.kegiatan.update', $campaign->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="relative p-8 flex-auto space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Nama Kegiatan</label>
                            <input type="text" name="name" value="{{ $campaign->name }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Kategori Kegiatan</label>
                            <input type="text" name="category" value="{{ $campaign->category }}" placeholder="Contoh: Pendidikan, Kesehatan, Lingkungan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Lokasi</label>
                                <input type="text" name="location" value="{{ $campaign->location }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Jumlah Nominal (Rp)</label>
                                <input type="number" name="nominal" value="{{ $campaign->nominal }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">RFM Score</label>
                                <select name="rfm_score" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white appearance-none">
                                    <option value="A+" {{ $campaign->rfm_score == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="A" {{ $campaign->rfm_score == 'A' ? 'selected' : '' }}>A</option>
                                    <option value="B" {{ $campaign->rfm_score == 'B' ? 'selected' : '' }}>B</option>
                                    <option value="C" {{ $campaign->rfm_score == 'C' ? 'selected' : '' }}>C</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Status</label>
                                <select name="status" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white appearance-none">
                                    <option value="Aktif" {{ $campaign->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Berjalan" {{ $campaign->status == 'Berjalan' ? 'selected' : '' }}>Berjalan</option>
                                    <option value="Selesai" {{ $campaign->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-gray-100 rounded-b gap-3 bg-gray-50/50">
                        <button class="px-6 py-3 text-gray-500 bg-transparent font-bold uppercase text-sm rounded-xl outline-none focus:outline-none hover:bg-gray-100 transition-colors" type="button" onclick="toggleModal('modal-edit-kegiatan-{{ $campaign->id }}')">Batal</button>
                        <button class="px-8 py-3 bg-primary text-white font-bold uppercase text-sm rounded-xl shadow-lg shadow-red-200 hover:-translate-y-0.5 transition-transform outline-none focus:outline-none" type="submit">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="modal-edit-kegiatan-{{ $campaign->id }}-backdrop"></div>
    @endforeach

</body>
</html>
