import re

with open('resources/views/explore.blade.php', 'r') as f:
    content = f.read()

# Replace the grid class for the container
content = content.replace('<div class="grid gap-6 sm:grid-cols-2">', '<div class="grid gap-5 grid-cols-1">')

# Replace the article content
old_article = """                                        <article class="explore-item flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer" hx-get="/program/{{ $campaign->slug ?? 'bakti-kesehatan' }}" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" data-category="{{ $campaign->category }}">
                                            <div>
                                                <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                    <img src="{{ asset($campaign->image ?? 'images/donasi-bencana.png') }}" alt="{{ $campaign->name }}" class="h-full w-full object-cover">
                                                    <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow category-badge">
                                                        {{ $campaign->category }}
                                                    </span>
                                                    <span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">{{ $campaign->label ?? 'Program' }}</span>
                                                </div>
                                                <div class="p-5">
                                                    <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2">{{ $campaign->name }}</h3>
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

new_article = """                                        <article class="explore-item flex flex-col sm:flex-row overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer group" hx-get="/program/{{ $campaign->slug ?? 'bakti-kesehatan' }}" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" data-category="{{ $campaign->category }}">
                                            <div class="relative w-full sm:w-[280px] shrink-0 aspect-[16/9] sm:aspect-auto sm:h-full overflow-hidden bg-[#12355B]/10">
                                                <img src="{{ asset($campaign->image ?? 'images/donasi-bencana.png') }}" alt="{{ $campaign->name }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                                <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow category-badge">
                                                    {{ $campaign->category }}
                                                </span>
                                                <span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white shadow">{{ $campaign->label ?? 'Program' }}</span>
                                            </div>
                                            <div class="p-5 flex flex-col justify-between w-full">
                                                <div>
                                                    <h3 class="font-['Plus_Jakarta_Sans'] text-lg font-extrabold text-[#12355B] leading-snug line-clamp-2 group-hover:text-[#D62828] transition-colors">{{ $campaign->name }}</h3>
                                                    <p class="mt-2 text-sm leading-relaxed text-[#62758A] line-clamp-2">{{ $campaign->description }}</p>
                                                    <div class="mt-5 grid grid-cols-2 gap-4">
                                                        <div class="bg-[#F1EEE8] p-3 rounded-xl">
                                                            <p class="text-[10px] text-[#62758A] font-semibold uppercase tracking-wider mb-1">Terkumpul</p>
                                                            <p class="text-sm font-extrabold text-[#12355B]">Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</p>
                                                        </div>
                                                        <div class="bg-[#F1EEE8] p-3 rounded-xl">
                                                            <p class="text-[10px] text-[#62758A] font-semibold uppercase tracking-wider mb-1">Target</p>
                                                            <p class="text-sm font-extrabold text-[#12355B]">Rp {{ number_format($campaign->nominal, 0, ',', '.') }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 flex items-center gap-4">
                                                    <div class="flex-1">
                                                        <div class="flex justify-between text-[10px] font-bold mb-1.5"><span class="text-[#D62828]">{{ $percentage }}% Tercapai</span></div>
                                                        <div class="h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: {{ $percentage }}%;"></div></div>
                                                    </div>
                                                    <button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="shrink-0 rounded-xl bg-[#D62828] px-6 py-2.5 text-xs font-bold text-white transition hover:bg-[#b91e26] shadow-sm hover:shadow active:scale-95">Donasi</button>
                                                </div>
                                            </div>
                                        </article>"""

content = content.replace(old_article, new_article)

with open('resources/views/explore.blade.php', 'w') as f:
    f.write(content)

print("Explore cards updated to horizontal layout")
