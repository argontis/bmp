import re

with open('resources/views/galeri.blade.php', 'r') as f:
    content = f.read()

dynamic_gallery = """                        <!-- Masonry/Grid Gallery -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-16" id="gallery-container">
                            @forelse($galleries as $gallery)
                            <div data-category="{{ strtolower($gallery->category) }}" class="gallery-item group relative rounded-2xl overflow-hidden cursor-pointer h-64 md:h-80 shadow-sm border border-gray-100 transition-all duration-300">
                                <img src="{{ $gallery->image }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="{{ $gallery->title }}">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#12355B]/90 via-[#12355B]/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <span class="text-white text-xs font-bold uppercase tracking-wider mb-2 text-[#D62828]">{{ $gallery->category }}</span>
                                    <h3 class="text-white font-bold text-lg leading-tight">{{ $gallery->title }}</h3>
                                </div>
                            </div>
                            @empty
                            <div class="col-span-full py-12 text-center">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-gray-400"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-700 mb-2 font-heading">Belum ada foto galeri</h3>
                                <p class="text-gray-500 max-w-md mx-auto">Nantikan pembaruan dokumentasi kegiatan kami di sini.</p>
                            </div>
                            @endforelse
                        </div>"""

start_idx = content.find('<!-- Masonry/Grid Gallery -->')
end_idx = content.find('<!-- Load More Button -->')

if start_idx != -1 and end_idx != -1:
    content = content[:start_idx] + dynamic_gallery + '\n\n                        ' + content[end_idx:]
    with open('resources/views/galeri.blade.php', 'w') as f:
        f.write(content)
