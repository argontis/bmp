<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Galeri - Admin BMP</title>
    
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
            <a href="{{ route('admin.kegiatan') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path></svg>
                Kegiatan & Kampanye
            </a>
            <a href="{{ route('admin.donatur') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl text-white/70 hover:text-white hover:bg-white/10 transition-all font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                Data Donatur
            </a>
            <a href="{{ route('admin.galeri') }}" class="flex items-center gap-4 px-4 py-3.5 rounded-xl bg-primary text-white font-bold shadow-lg shadow-red-500/20 transition-all font-medium">
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
                <h1 class="text-2xl font-extrabold text-secondary font-heading tracking-tight">Daftar Galeri</h1>
                <p class="text-sm text-gray-500 font-medium">Kelola seluruh foto galeri Anda di sini.</p>
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
                        <h2 class="text-lg font-extrabold text-secondary font-heading">Semua Galeri</h2>
                        <p class="text-sm text-gray-500 mt-1">Daftar lengkap foto dan dokumentasi kegiatan.</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <form action="{{ route('admin.galeri') }}" method="GET" class="relative">
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari galeri..." class="pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm w-64 transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3.5 top-3 text-gray-400"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                        </form>
                        <button onclick="toggleModal('modal-add-galeri')" class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-xl font-bold shadow-lg shadow-red-200 hover:-translate-y-0.5 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg>
                            Tambah Galeri
                        </button>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Gambar</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Judul / Deskripsi</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Kategori</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse($galleries as $gallery)
                            <tr class="hover:bg-gray-50/50 transition-colors group">
                                <td class="py-5 px-8">
                                    <img src="{{ $gallery->image }}" alt="Galeri" class="w-24 h-16 object-cover rounded-lg shadow-sm border border-gray-100">
                                </td>
                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary">{{ $gallery->title }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <span class="inline-flex px-3 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-lg border border-emerald-100">{{ $gallery->category }}</span>
                                </td>
                                <td class="py-5 px-8 text-right">
                                    <div class="flex items-center justify-end gap-2 transition-opacity">
                                        <button onclick="toggleModal('modal-edit-galeri-{{ $gallery->id }}')" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"></path></svg>
                                        </button>
                                        <form action="{{ route('admin.galeri.destroy', $gallery->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
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
                                <td colspan="6" class="py-12 text-center text-gray-400 font-medium">Belum ada data galeri.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-8">
                {{ $galleries->links() }}
            </div>
        </div>
    </main>

    <!-- Modal Tambah Galeri -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex" id="modal-add-galeri">
        <div class="relative w-auto my-6 mx-auto max-w-2xl w-full">
            <!-- Modal Content -->
            <div class="border-0 rounded-3xl shadow-2xl relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!-- Header -->
                <div class="flex items-start justify-between p-8 border-b border-solid border-gray-100 rounded-t">
                    <h3 class="text-2xl font-extrabold text-secondary font-heading">
                        Tambah Galeri Baru
                    </h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-gray-400 float-right text-3xl leading-none font-semibold outline-none focus:outline-none hover:text-gray-700 transition" onclick="toggleModal('modal-add-galeri')">
                        <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                        </span>
                    </button>
                </div>
                <!-- Body -->
                <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="relative p-8 flex-auto space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Gambar / Foto</label>
                            <input type="file" name="image" required accept="image/*" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Judul / Deskripsi</label>
                            <input type="text" name="title" required placeholder="Contoh: Peresmian Gedung Sekolah" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Kategori</label>
                            <input type="text" name="category" required placeholder="Contoh: Pendidikan, Kesehatan, Bencana Alam" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Deskripsi (Opsional)</label>
                            <textarea name="description" rows="3" placeholder="Tuliskan deskripsi galeri..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all"></textarea>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div class="flex items-center justify-end p-6 border-t border-solid border-gray-100 rounded-b gap-3 bg-gray-50/50">
                        <button class="px-6 py-3 text-gray-500 bg-transparent font-bold uppercase text-sm rounded-xl outline-none focus:outline-none hover:bg-gray-100 transition-colors" type="button" onclick="toggleModal('modal-add-galeri')">
                            Batal
                        </button>
                        <button class="px-8 py-3 bg-primary text-white font-bold uppercase text-sm rounded-xl shadow-lg shadow-red-200 hover:-translate-y-0.5 transition-transform outline-none focus:outline-none" type="submit">
                            Simpan Galeri
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="modal-add-galeri-backdrop"></div>

    <!-- Modals Edit Galeri -->
    @foreach($galleries as $gallery)
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex" id="modal-edit-galeri-{{ $gallery->id }}">
        <div class="relative w-auto my-6 mx-auto max-w-2xl w-full">
            <div class="border-0 rounded-3xl shadow-2xl relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <div class="flex items-start justify-between p-8 border-b border-solid border-gray-100 rounded-t">
                    <h3 class="text-2xl font-extrabold text-secondary font-heading">Edit Galeri</h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-gray-400 float-right text-3xl leading-none font-semibold outline-none focus:outline-none hover:text-gray-700 transition" onclick="toggleModal('modal-edit-galeri-{{ $gallery->id }}')">
                        <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                        </span>
                    </button>
                </div>
                <form action="{{ route('admin.galeri.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="relative p-8 flex-auto space-y-5">
                        <div class="mb-4">
                            <label class="block text-sm font-bold text-secondary mb-2">Gambar Saat Ini</label>
                            <img src="{{ $gallery->image }}" class="w-32 h-auto rounded-lg shadow-sm border border-gray-100">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Upload Gambar Baru (Opsional)</label>
                            <input type="file" name="image" accept="image/*" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Judul / Deskripsi</label>
                            <input type="text" name="title" value="{{ $gallery->title }}" required placeholder="Contoh: Peresmian Gedung Sekolah" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Kategori</label>
                            <input type="text" name="category" value="{{ $gallery->category }}" required placeholder="Contoh: Pendidikan, Kesehatan, Bencana Alam" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Deskripsi (Opsional)</label>
                            <textarea name="description" rows="3" placeholder="Tuliskan deskripsi galeri..." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">{{ $gallery->description }}</textarea>
                        </div>
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-gray-100 rounded-b gap-3 bg-gray-50/50">
                        <button class="px-6 py-3 text-gray-500 bg-transparent font-bold uppercase text-sm rounded-xl outline-none focus:outline-none hover:bg-gray-100 transition-colors" type="button" onclick="toggleModal('modal-edit-galeri-{{ $gallery->id }}')">Batal</button>
                        <button class="px-8 py-3 bg-primary text-white font-bold uppercase text-sm rounded-xl shadow-lg shadow-red-200 hover:-translate-y-0.5 transition-transform outline-none focus:outline-none" type="submit">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-50 fixed inset-0 z-40 bg-black" id="modal-edit-galeri-{{ $gallery->id }}-backdrop"></div>
    @endforeach

</body>
</html>
