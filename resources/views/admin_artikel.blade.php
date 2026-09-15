<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Artikel - Admin BMP</title>
    
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
            <a href="{{ route('admin.kegiatan') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
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
            <a href="{{ route('admin.galeri') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                Galeri & Berita
            </a>
            <a href="{{ route('admin.artikel') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl bg-primary text-white font-bold shadow-lg shadow-red-500/20">
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
                <h1 class="text-2xl font-extrabold text-secondary font-heading tracking-tight">Kelola Artikel</h1>
                <p class="text-sm text-gray-500 font-medium">Kelola seluruh artikel yang tampil di website Anda.</p>
            </div>
            <div class="flex items-center gap-6">
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

            <!-- Article Table Section -->
            <div class="bg-white rounded-3xl shadow-[0_4px_24px_-8px_rgba(0,0,0,0.08)] border border-gray-50 overflow-hidden">
                <div class="p-8 border-b border-gray-100 flex items-center justify-between bg-white sticky top-0 z-10">
                    <div>
                        <h2 class="text-lg font-extrabold text-secondary font-heading">Daftar Artikel</h2>
                        <p class="text-sm text-gray-500 mt-1">Daftar lengkap artikel yang dibuat.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <form action="{{ route('admin.artikel') }}" method="GET" class="relative">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel..." class="pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm w-64 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3.5 top-3 text-gray-400"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        </form>
                        <button onclick="toggleModal('modal-add-artikel')" class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-xl font-bold shadow-lg shadow-red-200 hover:-translate-y-0.5 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg>
                            Tambah Artikel
                        </button>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider w-16">No</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Gambar</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Judul Artikel</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Status</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Tanggal</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($articles as $index => $article)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary">{{ $articles->firstItem() + $index }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    @if($article->image)
                                        <img src="{{ $article->image }}" alt="Thumbnail" class="w-20 h-16 object-cover rounded-lg border border-gray-200 shadow-sm">
                                    @else
                                        <div class="w-20 h-16 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 border border-gray-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/></svg>
                                        </div>
                                    @endif
                                </td>
                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary text-base mb-1">{{ Str::limit($article->title, 50) }}</p>
                                    <p class="text-sm text-gray-500">{{ Str::limit(strip_tags($article->content), 60) }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    @if($article->status === 'published')
                                        <span class="inline-flex px-3 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-lg border border-emerald-100">Dipublikasi</span>
                                    @else
                                        <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-600 font-bold text-xs rounded-lg border border-gray-200">Draf</span>
                                    @endif
                                </td>
                                <td class="py-5 px-8">
                                    <p class="text-sm text-gray-600">{{ $article->created_at->format('d M Y') }}</p>
                                </td>
                                <td class="py-5 px-8 text-right">
                                    <div class="flex items-center justify-end gap-2 transition-opacity">
                                        <button onclick='editArtikel(@json($article))' class="p-2 bg-amber-50 text-amber-600 rounded-lg hover:bg-amber-100 transition-colors" title="Edit Artikel">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path><path d="m15 5 4 4"></path></svg>
                                        </button>
                                        <form action="{{ route('admin.artikel.destroy', $article->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition-colors" title="Hapus Artikel">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="py-12 text-center text-gray-500 font-medium bg-gray-50/50">
                                    <div class="flex flex-col items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-300 mb-4"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                                        Belum ada artikel yang ditambahkan
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                @if($articles->hasPages())
                <div class="p-6 border-t border-gray-100 bg-gray-50/30">
                    {{ $articles->links() }}
                </div>
                @endif
            </div>
            
        </div>
    </main>

    <!-- Modal Add Artikel -->
    <div id="modal-add-artikel" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-secondary/80 backdrop-blur-sm transition-opacity" onclick="toggleModal('modal-add-artikel')"></div>
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
            <div class="relative bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-2xl w-full border border-gray-100">
                <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="px-8 pt-8 pb-6 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
                        <div>
                            <h3 class="text-xl font-extrabold text-secondary font-heading" id="modal-title">Tambah Artikel Baru</h3>
                            <p class="text-sm text-gray-500 mt-1">Buat artikel/berita baru untuk website.</p>
                        </div>
                        <button type="button" onclick="toggleModal('modal-add-artikel')" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 transition-colors shadow-sm border border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    </div>
                    
                    <div class="px-8 py-6 max-h-[60vh] overflow-y-auto">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Judul Artikel <span class="text-red-500">*</span></label>
                                <input type="text" name="title" required placeholder="Masukkan judul artikel" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Konten / Isi Artikel <span class="text-red-500">*</span></label>
                                <textarea name="content" required rows="6" placeholder="Masukkan konten artikel" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"></textarea>
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-secondary mb-2">Status <span class="text-red-500">*</span></label>
                                    <select name="status" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all appearance-none bg-white">
                                        <option value="draft">Draf (Simpan sementara)</option>
                                        <option value="published">Publikasi (Langsung tampil)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-secondary mb-2">Gambar Utama (Opsional)</label>
                                    <div class="relative">
                                        <input type="file" name="image" accept="image/*" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-gray-50 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 cursor-pointer">
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Maks. 2MB. Format: JPG, PNG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="px-8 py-6 bg-gray-50 border-t border-gray-100 flex items-center justify-end gap-3">
                        <button type="button" onclick="toggleModal('modal-add-artikel')" class="px-6 py-2.5 text-gray-600 font-bold hover:bg-gray-200 rounded-xl transition-colors">Batal</button>
                        <button type="submit" class="px-6 py-2.5 bg-primary text-white font-bold rounded-xl shadow-lg shadow-red-500/30 hover:-translate-y-0.5 transition-all">Simpan Artikel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Artikel -->
    <div id="modal-edit-artikel" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-secondary/80 backdrop-blur-sm transition-opacity" onclick="toggleModal('modal-edit-artikel')"></div>
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
            <div class="relative bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:max-w-2xl w-full border border-gray-100">
                <form id="form-edit-artikel" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="px-8 pt-8 pb-6 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
                        <div>
                            <h3 class="text-xl font-extrabold text-secondary font-heading">Edit Artikel</h3>
                            <p class="text-sm text-gray-500 mt-1">Ubah data artikel yang dipilih.</p>
                        </div>
                        <button type="button" onclick="toggleModal('modal-edit-artikel')" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 transition-colors shadow-sm border border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </button>
                    </div>
                    
                    <div class="px-8 py-6 max-h-[60vh] overflow-y-auto">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Judul Artikel <span class="text-red-500">*</span></label>
                                <input type="text" id="edit_title" name="title" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Konten / Isi Artikel <span class="text-red-500">*</span></label>
                                <textarea id="edit_content" name="content" required rows="6" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"></textarea>
                            </div>

                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-bold text-secondary mb-2">Status <span class="text-red-500">*</span></label>
                                    <select id="edit_status" name="status" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all appearance-none bg-white">
                                        <option value="draft">Draf</option>
                                        <option value="published">Publikasi</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-secondary mb-2">Ganti Gambar (Opsional)</label>
                                    <div class="relative">
                                        <input type="file" name="image" accept="image/*" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-gray-50 text-sm file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 cursor-pointer">
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengubah gambar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="px-8 py-6 bg-gray-50 border-t border-gray-100 flex items-center justify-end gap-3">
                        <button type="button" onclick="toggleModal('modal-edit-artikel')" class="px-6 py-2.5 text-gray-600 font-bold hover:bg-gray-200 rounded-xl transition-colors">Batal</button>
                        <button type="submit" class="px-6 py-2.5 bg-primary text-white font-bold rounded-xl shadow-lg shadow-red-500/30 hover:-translate-y-0.5 transition-all">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleModal(modalID) {
            const modal = document.getElementById(modalID);
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.children[0].classList.add('opacity-100');
                    modal.children[1].children[0].classList.add('scale-100', 'opacity-100');
                    modal.children[1].children[0].classList.remove('scale-95', 'opacity-0');
                }, 10);
            } else {
                modal.children[0].classList.remove('opacity-100');
                modal.children[1].children[0].classList.remove('scale-100', 'opacity-100');
                modal.children[1].children[0].classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }
        }

        function editArtikel(article) {
            document.getElementById('form-edit-artikel').action = `/admin/artikel/${article.id}`;
            document.getElementById('edit_title').value = article.title;
            document.getElementById('edit_content').value = article.content;
            document.getElementById('edit_status').value = article.status;
            
            toggleModal('modal-edit-artikel');
        }
    </script>
</body>
</html>
