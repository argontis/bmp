import re

with open('resources/views/explore.blade.php', 'r') as f:
    content = f.read()

# Replace the simple category badge and description with the dynamic SVG logic and fallback description
badge_search = r'<span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-\[#12355B\] px-3 py-1 text-\[10px\] font-bold text-white shadow category-badge">\s*?\{\{ \$campaign->category \}\}\s*?</span>\s*?<span class="absolute right-3 top-3 rounded-full bg-\[#D62828\] px-2\.5 py-1 text-\[9px\] font-extrabold uppercase tracking-wider text-white">.*?</span>\s*?</div>\s*?<div class="p-5">\s*?<h3 class="font-\[\'Plus_Jakarta_Sans\'\] text-base font-extrabold text-\[#12355B\] leading-snug line-clamp-2 group-hover:text-\[#D62828\] transition-colors">\{\{ \$campaign->name \}\}</h3>\s*?<p class="mt-2 text-xs leading-relaxed text-\[#62758A\] line-clamp-2">\{\{ \$campaign->description \}\}</p>'

badge_replacement = """<span class="absolute left-3 top-3 flex items-center gap-1 rounded-full bg-[#12355B] px-3 py-1 text-[10px] font-bold text-white shadow category-badge">
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
                                                    <p class="mt-2 text-xs leading-relaxed text-[#62758A] line-clamp-2">{{ !empty($campaign->description) ? $campaign->description : 'Mari bersama wujudkan kebaikan melalui program donasi ini. Salurkan kepedulian Anda untuk mereka yang membutuhkan.' }}</p>"""

content = re.sub(badge_search, badge_replacement, content, flags=re.DOTALL)

with open('resources/views/explore.blade.php', 'w') as f:
    f.write(content)

print("Badges and description fixed.")
