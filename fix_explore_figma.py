import re

with open('resources/views/explore.blade.php', 'r') as f:
    content = f.read()

# 1. Fix the category filter buttons to use SVGs instead of emojis
filters_html = """                            <div class="grid grid-cols-2 gap-3 sm:grid-cols-5" id="categoryFilters">
                                <button data-category="Kesehatan" class="category-filter-btn flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 text-[#12355B]"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg>
                                    <span class="text-[11px] font-bold">Kesehatan</span>
                                </button>
                                <button data-category="Pendidikan" class="category-filter-btn flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 text-[#12355B]"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
                                    <span class="text-[11px] font-bold">Pendidikan</span>
                                </button>
                                <button data-category="Sosial & Kemanusiaan" class="category-filter-btn flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 text-[#12355B]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    <span class="text-[11px] font-bold">Sosial &amp; Kemanusiaan</span>
                                </button>
                                <button data-category="Lingkungan" class="category-filter-btn flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 text-[#12355B]"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"></path></svg>
                                    <span class="text-[11px] font-bold">Lingkungan</span>
                                </button>
                                <button data-category="Fasilitas Ibadah" class="category-filter-btn flex flex-col items-center justify-center rounded-2xl border p-4 text-center transition border-[#12355B]/10 bg-white text-[#12355B] hover:border-[#12355B]/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2 text-[#12355B]"><path d="M18 10V6a2 2 0 0 0-2-2h-3.4a2 2 0 0 0-1.92 1.46l-.56 1.94A2 2 0 0 1 8.2 8.86l-1.94-.56A2 2 0 0 0 4.8 10.22l.56 1.94A2 2 0 0 1 6.86 14.1l-1.94.56A2 2 0 0 0 3.46 16.58l1.94.56A2 2 0 0 1 6.86 19.1l-1.94.56A2 2 0 0 0 6 22h12a2 2 0 0 0 2-2V10h-2z"></path><path d="M10 22v-6a2 2 0 0 1 2-2h0a2 2 0 0 1 2 2v6"></path><path d="M18 10h2a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-2"></path></svg>
                                    <span class="text-[11px] font-bold">Fasilitas Ibadah</span>
                                </button>
                            </div>"""

# Replace the old categoryFilters div
content = re.sub(r'<div class="grid grid-cols-2 gap-3 sm:grid-cols-5" id="categoryFilters">.*?</div>', filters_html, content, flags=re.DOTALL)

# 2. Restore the horizontal layout back to the vertical grid layout
old_grid = '<div class="grid gap-5 grid-cols-1">'
new_grid = '<div class="grid gap-6 sm:grid-cols-2">'
content = content.replace(old_grid, new_grid)

horizontal_card = r'<article class="explore-item flex flex-col sm:flex-row overflow-hidden.*?<\/article>'
vertical_card = """<article class="explore-item flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer group" hx-get="/program/{{ $campaign->slug ?? 'bakti-kesehatan' }}" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" data-category="{{ $campaign->category }}">
                                            <div>
                                                <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                    <img src="{{ asset($campaign->image ?? 'images/donasi-bencana.png') }}" alt="{{ $campaign->name }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                                    <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow category-badge">
                                                        {{ $campaign->category }}
                                                    </span>
                                                    <span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">{{ $campaign->label ?? 'Program' }}</span>
                                                </div>
                                                <div class="p-5">
                                                    <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2 group-hover:text-[#D62828] transition-colors">{{ $campaign->name }}</h3>
                                                    <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">{{ $campaign->description }}</p>
                                                    <div class="mt-4">
                                                        <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">{{ $percentage }}%</span></div>
                                                        <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: {{ $percentage }}%;"></div></div>
                                                        <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</span><span class="text-[#62758A]">dari Rp {{ number_format($campaign->nominal, 0, ',', '.') }}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-5 pt-0"><button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                        </article>"""
content = re.sub(horizontal_card, vertical_card, content, flags=re.DOTALL)

# 3. Add back the JS logic to color the SVGs correctly!
js_search = r"b\.classList\.add\('bg-white', 'text-\[#12355B\]', 'border-\[#12355B\]/10'\);\s*?\n\s*?\}"
js_replace = """b.classList.add('bg-white', 'text-[#12355B]', 'border-[#12355B]/10');
                        b.querySelector('svg').classList.remove('text-[#D62828]');
                        b.querySelector('svg').classList.add('text-[#12355B]');
                    }"""
content = re.sub(r"b\.classList\.add\('bg-white', 'text-\[#12355B\]', 'border-\[#12355B\]/10'\);\s*\}", js_replace, content)

js_search2 = r"b\.classList\.add\('bg-red-50', 'border-\[#D62828\]', 'text-\[#D62828\]'\);\s*b\.classList\.remove\('bg-white', 'text-\[#12355B\]', 'border-\[#12355B\]/10'\);"
js_replace2 = """b.classList.add('bg-red-50', 'border-[#D62828]', 'text-[#D62828]');
                        b.classList.remove('bg-white', 'text-[#12355B]', 'border-[#12355B]/10');
                        b.querySelector('svg').classList.remove('text-[#12355B]');
                        b.querySelector('svg').classList.add('text-[#D62828]');"""
content = re.sub(js_search2, js_replace2, content)

with open('resources/views/explore.blade.php', 'w') as f:
    f.write(content)
