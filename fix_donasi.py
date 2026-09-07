import os
import glob

files = glob.glob('resources/views/**/*.blade.php', recursive=True)

for file in files:
    with open(file, 'r') as f:
        content = f.read()
    
    # We want to replace "/login" with "/donasi" but only if it's a Donasi Sekarang button.
    # The safest way is to just look for window.location.href='/login' and check if 'Donasi Sekarang' is nearby.
    # Actually, let's just do a string replacement.
    if 'Donasi Sekarang' in content:
        content = content.replace("onclick=\"window.location.href='/login'\"", "onclick=\"window.location.href='/donasi'\"")
        
        # Also there's a mobile sticky button at the bottom of many pages:
        # <button onclick="window.location.href='/login'" ... Donasi Sekarang
        
    with open(file, 'w') as f:
        f.write(content)

