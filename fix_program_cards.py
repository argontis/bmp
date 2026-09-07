import re

with open('resources/views/program.blade.php', 'r') as f:
    content = f.read()

# Define the replacements
replacements = {
    'Bakti Guru Pelosok': '/program/bakti-guru',
    'Layanan Medis Keliling': '/program/bakti-kesehatan',
    'Tanggap Darurat Bencana': '/program/bakti-bencana',
    'Dapur Umum & Gizi': '/program/bakti-pangan-gizi',
    'Sumur Air Bersih': '/program/bakti-lingkungan',
    'Pemberdayaan UMKM': '/program/bakti-pendidikan'
}

# First, change the 6th card to Bakti Pendidikan
content = content.replace('Ekonomi</span>', 'Pendidikan</span>')
content = content.replace('bg-indigo-600', 'bg-red-600') # Change color if needed, or keep blue
content = content.replace('Pemberdayaan UMKM', 'Bakti Pendidikan')
content = content.replace('Pemberian modal usaha tanpa bunga dan pelatihan kewirausahaan untuk perempuan kepala keluarga (janda).', 'Pemberian beasiswa, seragam, dan buku untuk anak-anak prasejahtera agar tidak putus sekolah.')

# Now, add onclick to the Dukung Program buttons
# We need to find each block and replace the button
def replacer(match):
    h3 = match.group(1)
    title = match.group(2)
    middle = match.group(3)
    button = match.group(4)
    
    url = replacements.get(title)
    if url:
        # replace button
        new_button = button.replace('<button', f'<button onclick="window.location.href=\'{url}\'"')
        return f"{h3}{title}</h3>{middle}{new_button}"
    return match.group(0)

# Matches <h3 ...>TITLE</h3> ... <button ...>Dukung Program</button>
content = re.sub(r'(<h3[^>]*>)(Bakti Guru Pelosok|Layanan Medis Keliling|Tanggap Darurat Bencana|Dapur Umum & Gizi|Sumur Air Bersih|Bakti Pendidikan)(</h3>)(.*?(?:<p[^>]*>.*?</p>\s*))(<button[^>]*>Dukung Program</button>)', replacer, content, flags=re.DOTALL)

with open('resources/views/program.blade.php', 'w') as f:
    f.write(content)

