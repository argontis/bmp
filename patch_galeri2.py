import re

with open('resources/views/admin_galeri.blade.php', 'r') as f:
    content = f.read()

# Replace Table Headers
table_headers_old = """                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Nama Kegiatan</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Lokasi</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Jumlah Nominal</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Kategori</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Status</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">RFM Score</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider text-right">Aksi</th>"""
table_headers_new = """                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Gambar</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Judul / Deskripsi</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider">Kategori</th>
                                <th class="py-4 px-8 font-bold text-gray-500 text-sm border-b border-gray-100 uppercase tracking-wider text-right">Aksi</th>"""
content = content.replace(table_headers_old, table_headers_new)

# Replace Table Body Rows
table_body_old = """                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary">{{ $gallery->name }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <div class="flex items-center gap-2 text-gray-600 font-medium text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        {{ $gallery->location }}
                                    </div>
                                </td>
                                <td class="py-5 px-8">
                                    <p class="font-extrabold text-secondary">Rp {{ number_format($gallery->nominal, 0, ',', '.') }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-600 font-bold text-xs rounded-lg border border-gray-200">{{ $gallery->category ?? '-' }}</span>
                                </td>
                                <td class="py-5 px-8">
                                    @if($gallery->status == 'Aktif')
                                        <span class="inline-flex px-3 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-lg border border-emerald-100">{{ $gallery->status }}</span>
                                    @elseif($gallery->status == 'Berjalan')
                                        <span class="inline-flex px-3 py-1 bg-amber-50 text-amber-600 font-bold text-xs rounded-lg border border-amber-100">{{ $gallery->status }}</span>
                                    @else
                                        <span class="inline-flex px-3 py-1 bg-gray-100 text-gray-600 font-bold text-xs rounded-lg border border-gray-200">{{ $gallery->status }}</span>
                                    @endif
                                </td>
                                <td class="py-5 px-8">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm
                                            {{ str_contains($gallery->rfm_score, 'A') ? 'bg-emerald-100 text-emerald-700' : 'bg-blue-100 text-blue-700' }}">
                                            {{ $gallery->rfm_score }}
                                        </div>
                                    </div>
                                </td>"""
table_body_new = """                                <td class="py-5 px-8">
                                    <img src="{{ $gallery->image }}" alt="Galeri" class="w-24 h-16 object-cover rounded-lg shadow-sm border border-gray-100">
                                </td>
                                <td class="py-5 px-8">
                                    <p class="font-bold text-secondary">{{ $gallery->title }}</p>
                                </td>
                                <td class="py-5 px-8">
                                    <span class="inline-flex px-3 py-1 bg-emerald-50 text-emerald-600 font-bold text-xs rounded-lg border border-emerald-100">{{ $gallery->category }}</span>
                                </td>"""
content = content.replace(table_body_old, table_body_new)

# Replace Add Form
add_form_old = """                    <div class="relative p-8 flex-auto space-y-5">
                        
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

                    </div>"""
add_form_new = """                    <div class="relative p-8 flex-auto space-y-5">
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
                    </div>"""
content = content.replace(add_form_old, add_form_new)
content = content.replace("form action=\"{{ route('admin.galeri.store') }}\" method=\"POST\"", "form action=\"{{ route('admin.galeri.store') }}\" method=\"POST\" enctype=\"multipart/form-data\"")

# Replace Edit Form
edit_form_old = """                    <div class="relative p-8 flex-auto space-y-5">
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Nama Kegiatan</label>
                            <input type="text" name="name" value="{{ $gallery->name }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-2">Kategori Kegiatan</label>
                            <input type="text" name="category" value="{{ $gallery->category }}" placeholder="Contoh: Pendidikan, Kesehatan, Lingkungan" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Lokasi</label>
                                <input type="text" name="location" value="{{ $gallery->location }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Jumlah Nominal (Rp)</label>
                                <input type="number" name="nominal" value="{{ $gallery->nominal }}" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">RFM Score</label>
                                <select name="rfm_score" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white appearance-none">
                                    <option value="A+" {{ $gallery->rfm_score == 'A+' ? 'selected' : '' }}>A+</option>
                                    <option value="A" {{ $gallery->rfm_score == 'A' ? 'selected' : '' }}>A</option>
                                    <option value="B" {{ $gallery->rfm_score == 'B' ? 'selected' : '' }}>B</option>
                                    <option value="C" {{ $gallery->rfm_score == 'C' ? 'selected' : '' }}>C</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-secondary mb-2">Status</label>
                                <select name="status" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all bg-white appearance-none">
                                    <option value="Aktif" {{ $gallery->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Berjalan" {{ $gallery->status == 'Berjalan' ? 'selected' : '' }}>Berjalan</option>
                                    <option value="Selesai" {{ $gallery->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                            </div>
                        </div>
                    </div>"""
edit_form_new = """                    <div class="relative p-8 flex-auto space-y-5">
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
                    </div>"""
content = content.replace(edit_form_old, edit_form_new)
content = content.replace("form action=\"{{ route('admin.galeri.update', $gallery->id) }}\" method=\"POST\"", "form action=\"{{ route('admin.galeri.update', $gallery->id) }}\" method=\"POST\" enctype=\"multipart/form-data\"")

with open('resources/views/admin_galeri.blade.php', 'w') as f:
    f.write(content)
