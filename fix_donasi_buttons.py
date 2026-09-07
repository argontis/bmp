import glob
import re

files = glob.glob('resources/views/**/*.blade.php', recursive=True)

for file in files:
    with open(file, 'r') as f:
        content = f.read()

    original_content = content

    # Find all <button ...>...Donasi Sekarang...</button>
    # Note: re.sub with a custom function to process each match
    def replacer(match):
        button_tag = match.group(1) # <button ...>
        inner_html = match.group(2) # ...Donasi Sekarang...
        
        # If it doesn't have onclick, add it
        if 'onclick' not in button_tag:
            # insert onclick before class or just after <button
            button_tag = button_tag.replace('<button', '<button onclick="window.location.href=\'/donasi\'"')
        else:
            # If it has onclick, replace the URL with /donasi if it's not already
            # We already ran fix_donasi.py which replaced /login with /donasi, but let's be sure
            # Actually, fix_donasi.py was simple string replace, so we don't need to touch ones with onclick again.
            pass
            
        return f"{button_tag}{inner_html}</button>"

    # Match <button ...> followed by any text that contains "Donasi Sekarang" followed by </button>
    content = re.sub(r'(<button[^>]*>)(.*?Donasi Sekarang.*?)<\/button>', replacer, content, flags=re.DOTALL)
    
    if content != original_content:
        with open(file, 'w') as f:
            f.write(content)

