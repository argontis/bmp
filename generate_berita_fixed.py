import re
import os

with open('resources/views/artikel.blade.php', 'r') as f:
    template = f.read()

# Extract everything before <main
header_match = re.search(r'(.*?)(<main)', template, re.DOTALL)
if header_match:
    header_part = header_match.group(1)

# Extract everything from <footer
footer_match = re.search(r'(<footer.*)', template, re.DOTALL)
if footer_match:
    footer_part = footer_match.group(1)

articles = [
    {
        "filename": "beasiswa-ntt.blade.php",
        "title": "500 Anak NTT Terima Beasiswa Bakti Merah Putih 2026",
        "date": "15 Juli 2026",
        "read_time": "4 menit baca",
        "category": "Program",
        "color": "rgb(214, 40, 40)", # Red
        "image": "https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&h=600&fit=crop&auto=format",
        "content": """
            <p class="mb-6">Program beasiswa tahunan Bakti Merah Putih kembali disalurkan. Tahun ini, 500 anak dari berbagai kabupaten di Nusa Tenggara Timur (NTT) telah terpilih untuk menerima dukungan penuh biaya pendidikan dan fasilitas belajar selama satu tahun ajaran ke depan.</p>
            <p class="mb-6">Pemilihan para penerima manfaat dilakukan dengan proses seleksi yang ketat dengan memprioritaskan anak-anak berprestasi dari keluarga prasejahtera yang berada di wilayah terluar dan terdalam di NTT. "Kami ingin memastikan bahwa tidak ada anak yang harus putus sekolah hanya karena masalah biaya," ungkap Budi Santoso, Direktur Program Pendidikan Bakti Merah Putih.</p>
            <h3 class="text-2xl font-bold text-[#12355B] mt-8 mb-4">Harapan Baru bagi Pendidikan NTT</h3>
            <p class="mb-6">Bantuan beasiswa ini meliputi biaya SPP, seragam, buku tulis, hingga subsidi transportasi bagi mereka yang harus menempuh jarak jauh menuju sekolah. Selain itu, program ini juga mencakup bimbingan belajar tambahan dan kelas motivasi secara berkala.</p>
            <p class="mb-6">Kami mengucapkan terima kasih yang sebesar-besarnya kepada seluruh donatur yang telah menyisihkan rezekinya untuk masa depan anak-anak ini. Setiap donasi Anda bukan sekadar uang, melainkan tiket bagi mereka untuk meraih cita-cita.</p>
        """
    },
    {
        "filename": "relawan-banjir.blade.php",
        "title": "Sigap di Lapangan: Tim Relawan Bakti Pulihkan 3 Desa Pasca Banjir",
        "date": "8 Juli 2026",
        "read_time": "6 menit baca",
        "category": "Kebencanaan",
        "color": "rgb(29, 78, 216)", # Blue
        "image": "https://images.unsplash.com/photo-1617494532674-67d22df2addb?w=1200&h=600&fit=crop&auto=format",
        "content": """
            <p class="mb-6">Hujan deras yang mengguyur sejak akhir pekan lalu mengakibatkan meluapnya sungai di tiga desa, memaksa ratusan warga mengungsi. Dalam 48 jam pertama pasca bencana, 120 relawan Bakti Merah Putih langsung diterjunkan ke lokasi untuk mendistribusikan logistik darurat.</p>
            <p class="mb-6">Tim tanggap darurat kami membagi tugas ke dalam tiga sektor: evakuasi, dapur umum, dan posko medis. Dapur umum yang didirikan berhasil menyuplai lebih dari 3.000 porsi makanan hangat setiap harinya, sementara posko medis memberikan pengobatan gratis bagi pengungsi yang mulai terserang penyakit kulit dan pernapasan.</p>
            <h3 class="text-2xl font-bold text-[#12355B] mt-8 mb-4">Fokus pada Pemulihan Pasca Bencana</h3>
            <p class="mb-6">Saat ini banjir telah mulai surut, dan fokus relawan beralih pada tahap pemulihan. Bantuan yang diberikan kini berupa alat kebersihan, air bersih, dan bahan material ringan untuk membantu warga memperbaiki rumah mereka yang rusak ringan akibat genangan air dan lumpur.</p>
            <p class="mb-6">Terima kasih kepada para pahlawan kemanusiaan, baik relawan yang bertugas di lapangan maupun donatur yang berkontribusi mendanai misi penyelamatan ini. Kebaikan Anda adalah kekuatan bagi mereka yang terdampak.</p>
        """
    },
    {
        "filename": "gerakan-pohon.blade.php",
        "title": "Gerakan 10.000 Pohon: Pulihkan Ekosistem Hutan Sulawesi",
        "date": "1 Juli 2026",
        "read_time": "5 menit baca",
        "category": "Lingkungan",
        "color": "rgb(22, 163, 74)", # Green
        "image": "https://images.unsplash.com/photo-1763856957026-a74ab4f05891?w=1200&h=600&fit=crop&auto=format",
        "content": """
            <p class="mb-6">Dalam upaya melawan degradasi hutan dan perubahan iklim, Bakti Merah Putih bersama komunitas adat setempat baru saja menyelesaikan fase pertama dari 'Gerakan 10.000 Pohon' di area hutan kritis Sulawesi. Program ini merupakan inisiatif besar kami tahun ini untuk pelestarian lingkungan.</p>
            <p class="mb-6">Didukung oleh 700 donatur setia dan puluhan perusahaan mitra, gerakan ini tidak sekadar menanam, tetapi juga merawat. Masyarakat sekitar hutan dilibatkan langsung sebagai pengawas dan perawat bibit pohon, memberikan mereka sumber pendapatan tambahan sekaligus kesadaran menjaga hutan.</p>
            <h3 class="text-2xl font-bold text-[#12355B] mt-8 mb-4">Dampak Jangka Panjang</h3>
            <p class="mb-6">Seluas 45 hektar lahan kritis kini mulai dihijaukan dengan bibit pohon keras bernilai ekologis tinggi seperti mahoni, jabon, dan berbagai tanaman buah lokal. Reboisasi ini diharapkan dapat memulihkan sumber air tanah yang sempat mengering dalam lima tahun terakhir.</p>
            <p class="mb-6">Kami terus membuka kesempatan bagi siapa saja yang ingin berpartisipasi dalam fase penanaman berikutnya. Satu bibit pohon yang Anda donasikan hari ini, akan memberikan napas kehidupan bagi bumi selama puluhan tahun ke depan.</p>
        """
    }
]

# We need to change the bg-transparent to bg-[#12355B] in the header part
header_part = header_part.replace('bg-transparent', 'bg-[#12355B]')

for article in articles:
    main_content = f"""<main class="min-h-screen bg-[#FBFAF7] pt-[120px]">
        <div class="max-w-[800px] mx-auto px-6 py-12 md:py-16">
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-6">
                    <span class="px-4 py-1.5 rounded-full text-xs font-bold text-white" style="background: {article['color']};">{article['category']}</span>
                    <span class="text-sm font-semibold text-gray-500">{article['date']}</span>
                    <span class="text-gray-300">•</span>
                    <span class="text-sm font-semibold text-gray-500">{article['read_time']}</span>
                </div>
                <h1 class="text-4xl md:text-[42px] font-extrabold text-[#12355B] leading-[1.2] mb-6" style="font-family: 'Plus Jakarta Sans', sans-serif;">{article['title']}</h1>
            </div>
            
            <div class="w-full h-[400px] md:h-[500px] rounded-[24px] overflow-hidden mb-12 shadow-lg">
                <img src="{article['image']}" alt="{article['title']}" class="w-full h-full object-cover">
            </div>
            
            <div class="prose prose-lg max-w-none text-[#555] leading-relaxed">
                {article['content']}
            </div>
            
            <div class="mt-16 pt-8 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <h4 class="font-bold text-[#12355B]">Bagikan cerita ini:</h4>
                    <div class="flex gap-3">
                        <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#D62828] hover:text-white transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></button>
                        <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#D62828] hover:text-white transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></button>
                        <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center hover:bg-[#D62828] hover:text-white transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg></button>
                    </div>
                </div>
            </div>
        </div>
    </main>
"""
    
    new_html = header_part + main_content + footer_part
    with open(f"resources/views/berita/{article['filename']}", 'w') as out:
        out.write(new_html)

