import os
import glob

directory = 'resources/views/**/*.blade.php'
files = glob.glob(directory, recursive=True)

for file in files:
    with open(file, 'r') as f:
        content = f.read()

    new_content = content.replace("window.location.href='/donasi'", "window.location.href='/login'")
    
    if content != new_content:
        with open(file, 'w') as f:
            f.write(new_content)
        print(f"Updated {file}")

print("Done.")
