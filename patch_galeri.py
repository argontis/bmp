import re

with open('resources/views/admin_galeri.blade.php', 'r') as f:
    content = f.read()

# Replace titles
content = content.replace('Daftar Kegiatan - Admin BMP', 'Daftar Galeri - Admin BMP')
content = content.replace('Daftar Kegiatan</h1>', 'Daftar Galeri</h1>')
content = content.replace('Kelola seluruh kegiatan donasi Anda di sini.', 'Kelola seluruh foto galeri Anda di sini.')
content = content.replace('Semua Kegiatan</h2>', 'Semua Galeri</h2>')
content = content.replace('Daftar lengkap kegiatan yang sedang, akan, dan telah berlangsung.', 'Daftar lengkap foto dan dokumentasi kegiatan.')
content = content.replace('Tambah Kegiatan', 'Tambah Galeri')
content = content.replace('Edit Kegiatan', 'Edit Galeri')
content = content.replace('Simpan Kegiatan', 'Simpan Galeri')
content = content.replace('Belum ada data kegiatan.', 'Belum ada data galeri.')
content = content.replace('Cari kegiatan...', 'Cari galeri...')

# Route replacements
content = content.replace("route('admin.kegiatan')", "route('admin.galeri')")
content = content.replace("route('admin.kegiatan.store')", "route('admin.galeri.store')")
content = content.replace("route('admin.kegiatan.update', $campaign->id)", "route('admin.galeri.update', $gallery->id)")
content = content.replace("route('admin.kegiatan.destroy', $campaign->id)", "route('admin.galeri.destroy', $gallery->id)")
content = content.replace("menghapus kegiatan ini?", "menghapus galeri ini?")

# Variable replacements
content = content.replace('$campaigns as $campaign', '$galleries as $gallery')
content = content.replace('$campaign->', '$gallery->')

# Modal IDs
content = content.replace('modal-add-kegiatan', 'modal-add-galeri')
content = content.replace('modal-edit-kegiatan', 'modal-edit-galeri')

# Sidebar active state (Kegiatan vs Galeri)
content = content.replace('bg-red-50 text-primary', 'text-gray-500 hover:bg-gray-50 hover:text-secondary') # Remove from Kegiatan
content = content.replace('href="/admin/kegiatan" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-bold transition-all"', 'href="/admin/kegiatan" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all"')

with open('resources/views/admin_galeri.blade.php', 'w') as f:
    f.write(content)
