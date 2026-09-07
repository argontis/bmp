import re

articles = [
    {
        'slug': 'kisah-pak-budi',
        'title': 'Kisah Pak Budi, 15 Tahun Mengabdi di Pelosok Papua Tanpa Lelah',
        'category': 'Pendidikan',
        'color': '#1D4ED8', # blue-600
        'date': '20 Agustus 2026',
        'image': 'https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1200&h=600&fit=crop',
        'content': '''<p class="text-gray-600 leading-relaxed mb-6 font-bold text-lg">Dedikasi seorang guru honorer yang menempuh perjalanan 3 jam setiap hari untuk mengajar anak-anak pedalaman agar bisa membaca dan menulis.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Pak Budi, seorang guru honorer di salah satu desa pedalaman Papua, telah mengabdikan dirinya selama lebih dari 15 tahun. Meskipun dengan fasilitas yang sangat terbatas dan bayaran yang tidak seberapa, semangat Pak Budi tidak pernah padam. Baginya, melihat anak-anak pedalaman bisa membaca, menulis, dan berhitung adalah bayaran termahal yang tak ternilai harganya.</p>
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
        'content': '''<p class="text-gray-600 leading-relaxed mb-6 font-bold text-lg">Warga Desa Sukamaju, NTT kini tak perlu lagi berjalan kaki 5 kilometer untuk mendapatkan air bersih. Sumur bor sumbangan donatur telah beroperasi.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Krisis air bersih yang melanda sejumlah desa di Nusa Tenggara Timur (NTT) kini mulai teratasi. Berkat donasi dari masyarakat, Yayasan Bakti Merah Putih berhasil meresmikan 5 titik sumur bor baru yang tersebar di wilayah terdampak kekeringan paling parah. Kini, dengan adanya sumur bor yang berlokasi di pusat desa, akses air bersih menjadi sangat mudah dan cepat.</p>
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
        'content': '''<p class="text-gray-600 leading-relaxed mb-6 font-bold text-lg">Program ini membekali janda dan ibu rumah tangga kurang mampu dengan modal usaha tanpa bunga serta pelatihan kewirausahaan agar mandiri.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Dalam upaya meningkatkan kemandirian ekonomi keluarga prasejahtera, Bakti Merah Putih meluncurkan program Pemberdayaan Ibu Tangguh. Program ini memberikan modal usaha bergulir tanpa bunga kepada 100 perempuan kepala keluarga di daerah pinggiran kota. Selain modal finansial, para ibu juga diberikan pelatihan intensif mengenai kewirausahaan, pembukuan sederhana, serta strategi pemasaran digital untuk menjangkau pasar yang lebih luas.</p>
        <h3 class="text-2xl font-extrabold text-[#1B1B1B] mb-4 mt-8" style="font-family: 'Plus Jakarta Sans', sans-serif;">Berani Memulai Usaha</h3>
        <p class="text-gray-600 leading-relaxed mb-6">Banyak dari para penerima manfaat yang sebelumnya hanya mengandalkan pekerjaan serabutan. Kini, mereka telah memiliki usaha mandiri mulai dari warung sembako, kerajinan tangan, hingga usaha kuliner rumahan yang mampu menopang kebutuhan keluarga dan biaya sekolah anak-anak mereka.</p>'''
    }
]

for art in articles:
    file_path = f'resources/views/artikel/{art["slug"]}.blade.php'
    with open(file_path, 'r') as f:
        content = f.read()
    
    # Just grab the template by replacing the article block completely
    # First we need to replace the image if it was incorrect
    # Kisah Pak Budi image was wrong in the first pass
    content = re.sub(r'<img src="https://images.unsplash.com/photo-.*?class="w-full h-full object-cover"', f'<img src="{art["image"]}" class="w-full h-full object-cover"', content)
    
    # Now replace the content
    content_pattern = r'(<article class="prose prose-lg max-w-none">).*?(</article>)'
    content = re.sub(content_pattern, r'\1\n' + art["content"] + r'\n\2', content, flags=re.DOTALL)
    
    with open(file_path, 'w') as f:
        f.write(content)

print("Details updated successfully")
