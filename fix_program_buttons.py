import re

with open('resources/views/program.blade.php', 'r') as f:
    content = f.read()

# First, modify the 6th card to be Bakti Pendidikan
content = content.replace('Ekonomi</span>', 'Pendidikan</span>')
content = content.replace('Pemberdayaan UMKM', 'Bakti Pendidikan')
content = content.replace('Pemberian modal usaha tanpa bunga dan pelatihan kewirausahaan untuk perempuan kepala keluarga (janda).', 'Pemberian beasiswa, seragam, dan buku untuk anak-anak prasejahtera agar tidak putus sekolah.')

# The target button string
target_button = '<button class="w-full py-3.5 rounded-2xl bg-gray-50 text-[#1B1B1B] font-bold text-sm hover:bg-gray-100 transition-colors border border-gray-200">Dukung Program</button>'

# The routes in order
routes = [
    '/program/bakti-guru',
    '/program/bakti-kesehatan',
    '/program/bakti-bencana',
    '/program/bakti-pangan-gizi',
    '/program/bakti-lingkungan',
    '/program/bakti-pendidikan'
]

# We replace the button one by one using a generator
def replacer(match, idx=[0]):
    if idx[0] < len(routes):
        route = routes[idx[0]]
        idx[0] += 1
        return f'<button onclick="window.location.href=\'{route}\'" class="w-full py-3.5 rounded-2xl bg-gray-50 text-[#1B1B1B] font-bold text-sm hover:bg-gray-100 transition-colors border border-gray-200">Dukung Program</button>'
    return match.group(0)

# We use re.sub with a pattern that matches the target button exactly
# re.escape is helpful
pattern = re.escape(target_button)
content = re.sub(pattern, replacer, content)

with open('resources/views/program.blade.php', 'w') as f:
    f.write(content)

