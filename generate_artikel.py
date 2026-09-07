import os
import re

# Ensure directory exists
os.makedirs('resources/views/artikel', exist_ok=True)

# Read the template from a working berita page
with open('resources/views/berita/beasiswa-ntt.blade.php', 'r') as f:
    template = f.read()

articles = [
    {
        'slug': 'kisah-pak-budi',
        'title': 'Kisah Pak Budi, 15 Tahun Mengabdi di Pelosok Papua Tanpa Lelah',
        'category': 'Pendidikan',
        'color': '#1D4ED8', # blue-600
        'date': '20 Agustus 2026',
        'image': 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&h=600&fit=crop',
        'content': '''<p class="text-gray-600 leading-relaxed mb-6">Pak Budi, seorang guru honorer di salah satu desa pedalaman Papua, telah mengabdikan dirinya selama lebih dari 15 tahun. Setiap harinya, beliau menempuh perjalanan darat dan sungai selama hampir 3 jam untuk mencapai sekolah tempatnya mengajar.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Meskipun dengan fasilitas yang sangat terbatas dan bayaran yang tidak seberapa, semangat Pak Budi tidak pernah padam. Baginya, melihat anak-anak pedalaman bisa membaca, menulis, dan berhitung adalah bayaran termahal yang tak ternilai harganya.</p>
        <h3 class="text-2xl font-extrabold text-[#1B1B1B] mb-4 mt-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">Pendidikan Sebagai Kunci Perubahan</h3>
        <p class="text-gray-600 leading-relaxed mb-6">"Saya percaya bahwa pendidikan adalah satu-satunya cara bagi anak-anak ini untuk keluar dari lingkaran kemiskinan," ujar Pak Budi saat ditemui oleh tim relawan Bakti Merah Putih. Semangat inilah yang membuat Yayasan Bakti Merah Putih memasukkan Pak Budi ke dalam program Bakti Guru Pelosok, yang memberikan tunjangan bulanan dan fasilitas mengajar yang lebih baik.</p>'''
    },
    {
        'slug': 'sumur-bor-ntt',
        'title': 'Peresmian 5 Titik Sumur Bor Baru di NTT Akhiri Krisis Air Bersih',
        'category': 'Lingkungan',
        'color': '#0D9488', # teal-600
        'date': '15 Agustus 2026',
        'image': 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=1200&h=600&fit=crop',
        'content': '''<p class="text-gray-600 leading-relaxed mb-6">Krisis air bersih yang melanda sejumlah desa di Nusa Tenggara Timur (NTT) kini mulai teratasi. Berkat donasi dari masyarakat, Yayasan Bakti Merah Putih berhasil meresmikan 5 titik sumur bor baru yang tersebar di wilayah terdampak kekeringan paling parah.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Sebelumnya, warga desa harus menempuh perjalanan hingga 5 kilometer setiap hari hanya untuk mendapatkan air yang layak konsumsi. Kini, dengan adanya sumur bor yang berlokasi di pusat desa, akses air bersih menjadi sangat mudah dan cepat.</p>
        <h3 class="text-2xl font-extrabold text-[#1B1B1B] mb-4 mt-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">Dampak Nyata Bagi Kesehatan</h3>
        <p class="text-gray-600 leading-relaxed mb-6">Ketersediaan air bersih tidak hanya mempermudah aktivitas sehari-hari warga, tetapi juga berdampak langsung pada peningkatan kualitas kesehatan dan sanitasi lingkungan. "Kami sangat bersyukur. Anak-anak sekarang tidak sering sakit perut lagi karena airnya sudah bersih," ungkap Ibu Maria, salah satu warga desa.</p>'''
    },
    {
        'slug': 'modal-usaha-ibu',
        'title': 'Pemberdayaan 100 Ibu Tangguh Melalui Program Modal Usaha Bergulir',
        'category': 'Ekonomi',
        'color': '#4F46E5', # indigo-600
        'date': '10 Agustus 2026',
        'image': 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=1200&h=600&fit=crop',
        'content': '''<p class="text-gray-600 leading-relaxed mb-6">Dalam upaya meningkatkan kemandirian ekonomi keluarga prasejahtera, Bakti Merah Putih meluncurkan program Pemberdayaan Ibu Tangguh. Program ini memberikan modal usaha bergulir tanpa bunga kepada 100 perempuan kepala keluarga di daerah pinggiran kota.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Selain modal finansial, para ibu juga diberikan pelatihan intensif mengenai kewirausahaan, pembukuan sederhana, serta strategi pemasaran digital untuk menjangkau pasar yang lebih luas.</p>
        <h3 class="text-2xl font-extrabold text-[#1B1B1B] mb-4 mt-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">Berani Memulai Usaha</h3>
        <p class="text-gray-600 leading-relaxed mb-6">Banyak dari para penerima manfaat yang sebelumnya hanya mengandalkan pekerjaan serabutan. Kini, mereka telah memiliki usaha mandiri mulai dari warung sembako, kerajinan tangan, hingga usaha kuliner rumahan yang mampu menopang kebutuhan keluarga dan biaya sekolah anak-anak mereka.</p>'''
    }
]

for art in articles:
    content = template
    
    # Replace title
    content = re.sub(r'<title>.*?</title>', f'<title>{art["title"]} - Bakti Merah Putih</title>', content)
    content = re.sub(r'<h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold.*?</h1>', f'<h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#1B1B1B] mb-6 leading-[1.2]" style="font-family: \'Plus Jakarta Sans\', sans-serif;">{art["title"]}</h1>', content, flags=re.DOTALL)
    
    # Replace date
    content = re.sub(r'15 Juli 2026', art["date"], content)
    
    # Replace category
    content = re.sub(r'<span class="bg-\[#D62828\] text-white text-\[11px\] font-extrabold px-3 py-1\.5 rounded-full uppercase tracking-wider">.*?</span>', f'<span class="text-white text-[11px] font-extrabold px-3 py-1.5 rounded-full uppercase tracking-wider" style="background-color: {art["color"]}">{art["category"]}</span>', content)
    
    # Replace image
    content = re.sub(r'<img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c[^>]*>', f'<img src="{art["image"]}" class="w-full h-full object-cover" alt="{art["title"]}">', content)
    
    # Replace the main content text
    # We find the article block
    content_pattern = r'(<article class="prose prose-lg max-w-none">).*?(</article>)'
    content = re.sub(content_pattern, r'\1\n' + art["content"] + r'\n\2', content, flags=re.DOTALL)
    
    with open(f'resources/views/artikel/{art["slug"]}.blade.php', 'w') as f:
        f.write(content)

# Update web.php
with open('routes/web.php', 'r') as f:
    web = f.read()

new_routes = """
// Artikel
Route::get('/artikel/kisah-pak-budi', function () { return view('artikel.kisah-pak-budi'); });
Route::get('/artikel/sumur-bor-ntt', function () { return view('artikel.sumur-bor-ntt'); });
Route::get('/artikel/modal-usaha-ibu', function () { return view('artikel.modal-usaha-ibu'); });
"""

if '// Artikel' not in web:
    web = web.replace('// Galeri', new_routes + '\n// Galeri')
    with open('routes/web.php', 'w') as f:
        f.write(web)

# Add onclick to artikel.blade.php cards
with open('resources/views/artikel.blade.php', 'r') as f:
    artikel_content = f.read()

# Replace the three article divs with onclick
artikel_content = re.sub(
    r'(<!-- Article 1 -->\s*<div )class="(bg-white rounded-\[24px\] overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 group cursor-pointer flex flex-col)">',
    r'\1onclick="window.location.href=\'/artikel/kisah-pak-budi\'" class="\2">',
    artikel_content
)
artikel_content = re.sub(
    r'(<!-- Article 2 -->\s*<div )class="(bg-white rounded-\[24px\] overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 group cursor-pointer flex flex-col)">',
    r'\1onclick="window.location.href=\'/artikel/sumur-bor-ntt\'" class="\2">',
    artikel_content
)
artikel_content = re.sub(
    r'(<!-- Article 3 -->\s*<div )class="(bg-white rounded-\[24px\] overflow-hidden shadow-sm border border-gray-100 hover:shadow-lg transition-all duration-300 group cursor-pointer flex flex-col)">',
    r'\1onclick="window.location.href=\'/artikel/modal-usaha-ibu\'" class="\2">',
    artikel_content
)

with open('resources/views/artikel.blade.php', 'w') as f:
    f.write(artikel_content)

print("Done")

