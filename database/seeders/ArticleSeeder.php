<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Pentingnya Pendidikan bagi Anak di Pelosok Negeri',
                'slug' => 'pentingnya-pendidikan-bagi-anak-di-pelosok-negeri',
                'content' => '<p>Pendidikan adalah hak dasar setiap anak, namun kenyataannya masih banyak anak-anak di pelosok negeri yang belum mendapatkan akses pendidikan yang layak. Kendala geografis, kurangnya infrastruktur, dan minimnya tenaga pengajar seringkali menjadi penghalang utama bagi mereka untuk bersekolah dan menggapai cita-cita.</p><p>Tanpa pendidikan, rantai kemiskinan akan terus berlanjut dari generasi ke generasi. Anak-anak yang tidak bersekolah cenderung memiliki peluang kerja yang terbatas di masa depan dan rentan terhadap berbagai masalah sosial. Oleh karena itu, investasi pada pendidikan di daerah terpencil bukan hanya soal memberikan ilmu, melainkan tentang membangun fondasi kesejahteraan bagi masyarakat setempat.</p><p>Berbagai inisiatif dari lembaga sosial dan kerelawanan kini mulai bermunculan untuk menjembatani kesenjangan ini. Melalui program beasiswa, pembangunan sekolah darurat, hingga pengiriman guru sukarelawan, kita dapat bersama-sama memastikan bahwa setiap anak Indonesia, di manapun mereka berada, memiliki kesempatan yang sama untuk meraih masa depan yang gemilang.</p>',
                'image' => 'images/galeri-1.webp',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Bantuan Medis untuk Daerah Terdampak Bencana Alam',
                'slug' => 'bantuan-medis-untuk-daerah-terdampak-bencana-alam',
                'content' => '<p>Bencana alam, baik itu gempa bumi, banjir, maupun erupsi gunung berapi, selalu membawa dampak kerusakan yang luar biasa. Selain kerugian materiil, ancaman terbesar pasca bencana seringkali datang dari memburuknya kondisi kesehatan para penyintas. Di sinilah peran tim medis dan relawan kesehatan menjadi sangat krusial di masa tanggap darurat.</p><p>Keterbatasan fasilitas medis dan rusaknya infrastruktur rumah sakit di area terdampak membuat penanganan medis menjadi sebuah tantangan berat. Oleh karena itu, pengiriman posko kesehatan darurat dan pasokan obat-obatan esensial harus segera dilakukan. Penanganan luka ringan, trauma, hingga pencegahan penyakit menular pasca bencana adalah prioritas utama yang harus diselesaikan untuk meminimalisir korban jiwa.</p><p>Dukungan dari masyarakat luas dalam bentuk donasi dan penggalangan dana sangat membantu operasional tim relawan medis di lapangan. Dengan dana yang terkumpul, relawan dapat membeli peralatan P3K, membangun rumah sakit lapangan, hingga menyediakan trauma healing bagi anak-anak yang menjadi korban, sehingga mereka perlahan dapat bangkit kembali.</p>',
                'image' => 'images/galeri-2.webp',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Bagaimana Donasi Anda Mengubah Hidup Seseorang',
                'slug' => 'bagaimana-donasi-anda-mengubah-hidup-seseorang',
                'content' => '<p>Pernahkah Anda bertanya-tanya, seberapa besar dampak dari sebagian harta yang Anda sisihkan untuk orang lain? Setiap rupiah yang didonasikan, tidak peduli besar atau kecil nominalnya, sesungguhnya memiliki kekuatan yang luar biasa untuk mengubah jalan hidup seseorang yang sedang berada di titik terendahnya.</p><p>Bagi keluarga miskin, donasi Anda mungkin menjadi satu-satunya alasan anak mereka bisa masuk sekolah tahun ini. Bagi pasien penyakit kronis, bantuan Anda adalah secercah harapan agar mereka bisa terus membeli obat. Donasi menciptakan efek domino positif yang menyebar; saat satu orang terbantu, mereka akan mampu berdiri di atas kaki sendiri dan nantinya bisa membantu orang lain.</p><p>Transparansi dan ketepatan sasaran selalu menjadi komitmen utama dari setiap platform penggalangan dana terpercaya. Dengan memastikan setiap sen tersalurkan pada program yang tepat, kita tidak hanya memberikan bantuan sementara, melainkan membangun perubahan yang berkelanjutan untuk kesejahteraan sosial di masa depan.</p>',
                'image' => 'images/galeri-3.webp',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Program Penghijauan untuk Masa Depan Bumi',
                'slug' => 'program-penghijauan-untuk-masa-depan-bumi',
                'content' => '<p>Krisis iklim bukanlah fiksi, melainkan ancaman nyata yang saat ini sedang kita hadapi bersama. Cuaca ekstrem, mencairnya es di kutub, dan peningkatan suhu bumi adalah bukti bahwa lingkungan kita membutuhkan perhatian serius. Salah satu langkah paling efektif yang bisa dilakukan oleh masyarakat adalah melalui program penghijauan secara masif.</p><p>Penanaman pohon memiliki banyak manfaat vital bagi ekosistem. Pohon bertindak sebagai paru-paru dunia yang menyerap karbon dioksida dan melepaskan oksigen segar. Selain itu, akar pohon berfungsi menahan air dalam tanah, sehingga mampu mencegah bencana banjir dan tanah longsor saat musim penghujan tiba di daerah dataran tinggi dan bantaran sungai.</p><p>Melalui inisiatif kerelawanan di bidang lingkungan, siapapun bisa berpartisipasi menanam bibit pohon di area kritis. Kampanye ini juga diharapkan bisa meningkatkan kesadaran masyarakat umum, terutama generasi muda, akan pentingnya menjaga kelestarian alam agar bumi tetap menjadi tempat yang nyaman untuk dihuni di masa mendatang.</p>',
                'image' => 'images/galeri-4.webp',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Kisah Inspiratif: Relawan Muda yang Membangun Harapan',
                'slug' => 'kisah-inspiratif-relawan-muda-yang-membangun-harapan',
                'content' => '<p>Di tengah pesimisme dan kerasnya kehidupan perkotaan, selalu ada pemuda yang bersedia mengorbankan waktu dan tenaganya demi kebaikan orang lain. Salah satunya adalah kisah sekelompok mahasiswa yang secara konsisten mengajar anak-anak prasejahtera di kolong jembatan ibukota setiap akhir pekan tanpa mengharapkan imbalan.</p><p>Kegiatan yang berawal dari inisiatif kecil ini ternyata mampu memantik semangat belajar puluhan anak yang sebelumnya menghabiskan waktu mereka dengan memulung atau mengamen. Berbekal buku-buku donasi bekas dan perlengkapan tulis seadanya, relawan muda ini membuktikan bahwa pendidikan tidak hanya bisa didapatkan di ruang kelas formal.</p><p>Kisah inspiratif ini adalah bukti bahwa siapapun, terlepas dari usia dan latar belakang, memiliki kekuatan untuk membuat perbedaan. Keikhlasan yang ditunjukkan para relawan ini tidak hanya memberikan akses pendidikan, tetapi yang terpenting, mereka berhasil menumbuhkan kembali harapan dan mimpi anak-anak marginal tersebut.</p>',
                'image' => 'images/hero1.webp',
                'status' => 'published',
                'published_at' => now(),
            ],
            [
                'title' => 'Peran Air Bersih dalam Mencegah Stunting pada Balita',
                'slug' => 'peran-air-bersih-dalam-mencegah-stunting-pada-balita',
                'content' => '<p>Masalah gizi buruk atau stunting pada balita tidak hanya disebabkan oleh kurangnya asupan makanan yang bergizi. Kurangnya kesadaran akan pentingnya sanitasi dan akses terhadap air bersih yang memadai di rumah tangga ternyata memegang peranan besar yang jarang disadari oleh masyarakat luas.</p><p>Konsumsi air yang terkontaminasi bakteri dan pengelolaan limbah yang buruk dapat memicu infeksi saluran pencernaan yang berulang pada anak-anak, seperti diare dan cacingan. Infeksi kronis inilah yang menghambat proses penyerapan nutrisi esensial pada tubuh balita, sehingga pada akhirnya menghentikan pertumbuhan fisik dan perkembangan otak mereka.</p><p>Penyediaan infrastruktur air bersih, seperti pembuatan sumur bor dan fasilitas MCK umum yang layak, adalah bagian integral dari upaya mengentaskan masalah stunting di Indonesia. Kolaborasi antara pemerintah, organisasi sosial, dan donatur sangat diperlukan untuk memastikan setiap keluarga mendapatkan hak dasar atas air bersih.</p>',
                'image' => 'images/hero2.webp',
                'status' => 'published',
                'published_at' => now(),
            ],
        ];

        foreach ($articles as $article) {
            \App\Models\Article::create($article);
        }
    }
}
