import os
import glob
import re

files = glob.glob('resources/views/berita/*.blade.php')

for file in files:
    with open(file, 'r') as f:
        content = f.read()
    
    # Fix the header class to be white from the start
    content = content.replace('bg-[#12355B]', 'bg-white shadow-sm')
    
    # Fix logo to logo2.png
    content = re.sub(r'<img src="/images/logo\.png"', '<img src="/images/logo2.png"', content)
    
    # Remove text-white/80 hover:text-white from all nav buttons
    content = content.replace('text-white/80 hover:text-white', '')
    
    # Fix mobile menu button color to dark
    content = content.replace('style="color: white;"', 'style="color: #1B1B1B;"')
    
    # Ensure any stray bg-transparent in the JS doesn't break it.
    # We will modify the JS to just not do anything, or we can just leave the JS since it adds/removes bg-white vs bg-transparent.
    # Actually, we should just disable the JS scroll color changes because it's already white.
    # Let's replace the JS block that toggles colors.
    js_scroll = """window.addEventListener('scroll', function() {
                if (window.scrollY > 20) {
                    header.classList.add('shadow-md');
                } else {
                    header.classList.remove('shadow-md');
                }
            });"""
            
    # We'll regex replace the whole scroll listener
    content = re.sub(r"window\.addEventListener\('scroll', function\(\) \{.*?\n\s+\}\);", js_scroll, content, flags=re.DOTALL)
    
    with open(file, 'w') as f:
        f.write(content)
