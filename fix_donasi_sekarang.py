import os
import glob
import re

directory = 'resources/views/**/*.blade.php'
files = glob.glob(directory, recursive=True)

for file in files:
    with open(file, 'r') as f:
        content = f.read()

    # The buttons usually look like:
    # <button ... onclick="window.location.href='/donasi'" ...>...Donasi Sekarang...</button>
    # or they might be missing onclick completely if they are just placeholders, but earlier we added onclick to them.
    
    # We will search for all buttons that contain 'Donasi Sekarang'
    # Actually, the simplest way is to just look for lines containing 'Donasi Sekarang' and replace '/donasi' with '/login' on those lines.
    
    lines = content.split('\n')
    new_lines = []
    changed = False
    
    for line in lines:
        if 'Donasi Sekarang' in line and '/donasi' in line:
            new_line = line.replace("'/donasi'", "'/login'")
            new_lines.append(new_line)
            changed = True
        else:
            new_lines.append(line)
            
    if changed:
        with open(file, 'w') as f:
            f.write('\n'.join(new_lines))
        print(f"Updated {file}")

print("Done.")
