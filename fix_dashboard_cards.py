import re

# 1. Update DashboardController to fetch 4 items instead of 3
with open('app/Http/Controllers/DashboardController.php', 'r') as f:
    controller = f.read()
controller = controller.replace('take(3)->get();', 'take(4)->get();')
with open('app/Http/Controllers/DashboardController.php', 'w') as f:
    f.write(controller)

# 2. Update dashboard.blade.php to use dynamic data
with open('resources/views/dashboard.blade.php', 'r') as f:
    dashboard = f.read()

loop_html = """                                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-2" id="dashboardProgramContainer">
                                    @forelse($programTerbaru as $campaign)
                                        @php
                                            $percentage = $campaign->nominal > 0 ? min(100, round(($campaign->donations_sum_amount ?? 0) / $campaign->nominal * 100)) : 0;
                                        @endphp
                                        <article class="explore-item flex flex-col justify-between overflow-hidden rounded-2xl border border-[#12355B]/10 bg-white shadow-sm transition hover:shadow-md cursor-pointer group" hx-get="/program/{{ $campaign->slug ?? 'bakti-kesehatan' }}" hx-push-url="true" hx-target="body" hx-swap="outerHTML transition:true" data-category="{{ $campaign->category }}">
                                            <div>
                                                <div class="relative aspect-[16/9] overflow-hidden bg-[#12355B]/10">
                                                    <img src="{{ asset($campaign->image ?? 'images/donasi-bencana.png') }}" alt="{{ $campaign->name }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                                    <span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow category-badge">
                                                        @if(strtolower($campaign->category) == 'kesehatan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope text-[#F4AAAA]"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 12 0v-3"></path><circle cx="20" cy="10" r="2"></circle></svg>
                                                        @elseif(strtolower($campaign->category) == 'pendidikan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap text-[#F4AAAA]"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path><path d="M22 10v6"></path><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path></svg>
                                                        @elseif(strtolower($campaign->category) == 'sosial & kemanusiaan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-[#F4AAAA]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                        @elseif(strtolower($campaign->category) == 'lingkungan')
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-droplets text-[#F4AAAA]"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"></path><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"></path></svg>
                                                        @else
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 text-[#F4AAAA]"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path><path d="M10 6h4"></path><path d="M10 10h4"></path><path d="M10 14h4"></path><path d="M10 18h4"></path></svg>
                                                        @endif
                                                        {{ $campaign->category ?? 'Program' }}
                                                    </span>
                                                    @if(!empty($campaign->label))
                                                    <span class="absolute right-3 top-3 rounded-full bg-[#D62828] px-2.5 py-1 text-[9px] font-extrabold uppercase tracking-wider text-white">{{ $campaign->label }}</span>
                                                    @endif
                                                </div>
                                                <div class="p-5">
                                                    <h3 class="font-['Plus_Jakarta_Sans'] text-base font-extrabold text-[#12355B] leading-snug line-clamp-2 group-hover:text-[#D62828] transition-colors">{{ $campaign->name }}</h3>
                                                    <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">{{ !empty($campaign->description) ? $campaign->description : 'Mari bersama wujudkan kebaikan melalui program donasi ini. Salurkan kepedulian Anda untuk mereka yang membutuhkan.' }}</p>
                                                    <div class="mt-4">
                                                        <div class="flex justify-between text-xs font-semibold"><span class="text-[#62758A]">Terkumpul</span><span class="text-[#D62828] font-bold">{{ $percentage }}%</span></div>
                                                        <div class="mt-1.5 h-2 w-full overflow-hidden rounded-full bg-[#EEEAE4]"><div class="h-full rounded-full bg-[#D62828]" style="width: {{ $percentage }}%;"></div></div>
                                                        <div class="mt-2 flex justify-between text-xs"><span class="font-extrabold text-[#12355B]">Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</span><span class="text-[#62758A]">dari Rp {{ number_format($campaign->nominal, 0, ',', '.') }}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-5 pt-0"><button onclick="openDesktopDonationModal(); event.stopPropagation(); event.preventDefault();" class="w-full rounded-xl bg-[#D62828] py-3 text-xs font-bold text-white transition hover:bg-[#b91e26]">Donasi Sekarang</button></div>
                                        </article>
                                    @empty
                                        <p class="text-sm text-gray-500 col-span-2 text-center py-10">Belum ada program saat ini.</p>
                                    @endforelse
                                </div>"""

dashboard = re.sub(r'<div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-2" id="dashboardProgramContainer">.*?</div>\s*?</section>', loop_html + '\n                            </section>', dashboard, flags=re.DOTALL)

# Replace the count manually in the h2 container
dashboard = re.sub(r'<span class="text-xs font-semibold text-\[#D62828\]" id="dashboardProgramCount">5 Program Tersedia</span>', r'<span class="text-xs font-semibold text-[#D62828]" id="dashboardProgramCount">{{ count($programTerbaru) }} Program Pilihan</span>', dashboard)

with open('resources/views/dashboard.blade.php', 'w') as f:
    f.write(dashboard)

print("Dashboard cards made dynamic.")
