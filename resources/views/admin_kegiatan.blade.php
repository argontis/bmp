<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kegiatan - Admin BMP</title>
    
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
    
    <script>
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        }
    </script>
</head>
<body class="bg-background text-gray-800 antialiased font-sans flex h-screen overflow-hidden">

        <!-- Sidebar -->
    <aside class="w-[280px] bg-secondary flex flex-col h-screen shrink-0 relative overflow-hidden hidden md:flex">
        <div class="p-8 border-b border-white/10 relative z-10 flex items-center justify-center">
            <img src="/images/logo.webp" alt="Logo BMP" class="h-16 w-auto object-contain">
        </div>
        
        <nav class="flex-1 py-8 px-4 overflow-y-auto relative z-10 space-y-2">
            <a href="{{ route('admin') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
                Dashboard
            </a>
            <a href="{{ route('admin.kegiatan') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl bg-primary text-white font-bold shadow-lg shadow-red-500/20 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path></svg>
                Kegiatan & Kampanye
            </a>
            <a href="{{ route('admin.donatur') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                Data Donatur
            </a>
            <a href="{{ route('admin.galeri') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                Galeri & Berita
            </a>
            <a href="{{ route('admin.artikel') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                Kelola Artikel
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
                <h1 class="text-2xl font-extrabold text-secondary font-heading tracking-tight">Daftar Kegiatan</h1>
                <p class="text-sm text-gray-500 font-medium">Kelola seluruh kegiatan donasi Anda di sini.</p>
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
            
            @if(session('success'))
            <div class="mb-6 bg-emerald-50 text-emerald-700 px-6 py-4 rounded-2xl border border-emerald-100 flex items-center gap-3 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><path d="M22 4L12 14.01l-3-3"></path></svg>
                {{ session('success') }}
            </div>
            @endif

            <!-- Campaign Table Section -->
            <div class="bg-white rounded-3xl shadow-[0_4px_24px_-8px_rgba(0,0,0,0.08)] border border-gray-50 overflow-hidden">
                <div class="p-8 border-b border-gray-100 flex items-center justify-between bg-white sticky top-0 z-10">
                    <div>
                        <h2 class="text-lg font-extrabold text-secondary font-heading">Semua Kegiatan</h2>
                        <p class="text-sm text-gray-500 mt-1">Daftar lengkap kegiatan yang sedang, akan, dan telah berlangsung.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <form action="{{ route('admin.kegiatan') }}" method="GET" class="relative">
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
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Donasi (Terkumpul / Target)</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Kategori</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Status</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">RFM Score</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">SDM Relawan</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($campaigns as $campaign)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="py-5 px-8">
                                    <div class="flex items-center gap-4">
                                        @if($campaign->image)
                                            <img src="{{ Str::startsWith($campaign->image, 'images/') ? asset($campaign->image) : Storage::url($campaign->image) }}" alt="{{ $campaign->name }}" class="w-12 h-12 rounded-xl object-cover shadow-sm">
                                        @else
                                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center shadow-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>
                                            </div>
                                        @endif
                                        <div>
                                            <p class="font-bold text-secondary">{{ $campaign->name }}</p>
                                            @if($campaign->activity_date)
                                                <p class="text-xs text-gray-500 mt-1 flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-days"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect><line x1="16" x2="16" y1="2" y2="6"></line><line x1="8" x2="8" y1="2" y2="6"></line><line x1="3" x2="21" y1="10" y2="10"></line></svg>
                                                    {{ \Carbon\Carbon::parse($campaign->activity_date)->translatedFormat('d M Y') }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="py-5 px-8">
                                    <div class="flex items-center gap-2 text-gray-600 font-medium text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        {{ $campaign->location }}
                                    </div>
                                </td>
                                <td class="py-5 px-8">
                                    <div class="flex flex-col">
                                        <span class="font-extrabold text-[#D62828]">Rp {{ number_format($campaign->donations->where('status', 'Berhasil')->sum('amount'), 0, ',', '.') }}</span>
                                        <span class="text-xs text-gray-500 font-medium mt-1">Target: Rp {{ number_format($campaign->nominal, 0, ',', '.') }}</span>
                                    </div>
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
                                        <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-600 font-bold text-xs rounded-lg border border-gray-200">{{ $campaign->status }}</span>
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
                                <td class="py-5 px-8">
                                    @if($campaign->volunteer_target > 0)
                                        <span class="inline-flex px-3 py-1 bg-purple-50 text-purple-600 font-bold text-xs rounded-lg border border-purple-100">
                                            {{ $campaign->volunteers->count() }} / {{ $campaign->volunteer_target }} Terisi
                                        </span>
                                    @else
                                        <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-500 font-bold text-xs rounded-lg border border-gray-200">
                                            Tidak Butuh
                                        </span>
                                    @endif
                                </td>
                                <td class="py-5 px-8 text-right">
                                    <div class="flex items-center justify-end gap-2 transition-opacity">
                                        <a href="{{ route('admin.kegiatan.show', $campaign->id) }}" class="p-2 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition-colors" title="Lihat Relawan">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                        </a>
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
                <form action="{{ route('admin.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="relative p-8 flex-auto space-y-5">
                        
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Nama Kegiatan</label>
                            <input type="text" name="name" required placeholder="Contoh: Beasiswa Anak Pedalaman" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>

                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Kategori Kegiatan</label>
                                <input type="text" name="category" placeholder="Contoh: Pendidikan, Kesehatan, Lingkungan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Target Relawan SDM</label>
                                <input type="number" name="volunteer_target" value="0" min="0" placeholder="0 jika tidak butuh relawan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
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

                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Tanggal Kegiatan</label>
                            <input type="date" name="activity_date" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Deskripsi Kegiatan</label>
                            <textarea name="description" rows="3" placeholder="Tuliskan detail kegiatan di sini..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Gambar / Thumbnail</label>
                            <input type="file" name="image" accept="image/*" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
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
                <form action="{{ route('admin.kegiatan.update', $campaign->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="relative p-8 flex-auto space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Nama Kegiatan</label>
                            <input type="text" name="name" value="{{ $campaign->name }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Kategori Kegiatan</label>
                                <input type="text" name="category" value="{{ $campaign->category }}" placeholder="Contoh: Pendidikan, Kesehatan, Lingkungan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Target Relawan SDM</label>
                                <input type="number" name="volunteer_target" value="{{ $campaign->volunteer_target }}" min="0" placeholder="0 jika tidak butuh relawan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
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
                        
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Tanggal Kegiatan</label>
                            <input type="date" name="activity_date" value="{{ $campaign->activity_date }}" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Deskripsi Kegiatan</label>
                            <textarea name="description" rows="3" placeholder="Tuliskan detail kegiatan di sini..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">{{ $campaign->description }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Gambar / Thumbnail</label>
                            @if($campaign->image)
                                <div class="mb-3">
                                    <img src="{{ Str::startsWith($campaign->image, 'images/') ? asset($campaign->image) : Storage::url($campaign->image) }}" alt="{{ $campaign->name }}" class="w-32 h-32 rounded-xl object-cover shadow-sm border border-gray-200">
                                </div>
                            @endif
                            <input type="file" name="image" accept="image/*" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
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
