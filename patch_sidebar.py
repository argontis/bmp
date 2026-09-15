import glob

sidebar_link = """            <a href="/admin/galeri" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 hover:text-secondary rounded-xl font-medium transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>
                Daftar Galeri
            </a>"""

for file in glob.glob('resources/views/admin*.blade.php'):
    with open(file, 'r') as f:
        content = f.read()
    
    if "Daftar Galeri" not in content or "href=\"/admin/galeri\"" not in content:
        # insert after Daftar Relawan
        relawan_link_end = """Daftar Relawan
            </a>"""
        content = content.replace(relawan_link_end, relawan_link_end + "\n\n" + sidebar_link)
        
        with open(file, 'w') as f:
            f.write(content)
