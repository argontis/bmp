<?php

use App\Models\Campaign;
use App\Models\Donation;
use App\Models\User;

// Find or create user
$user = User::firstOrCreate(
    ['email' => 'nabila@example.com'],
    ['name' => 'Nabila Arimbi', 'password' => bcrypt('password')]
);

// Clear old campaigns and donations
Campaign::truncate();
Donation::truncate();

$campaigns = [
    [
        'name' => 'Terapi Medis Gratis (Listrik & Laser) & Pengobatan Pasien Bawaan',
        'location' => 'Pelosok Desa',
        'nominal' => 250000000,
        'rfm_score' => 'A+',
        'status' => 'Aktif',
        'category' => 'Kesehatan',
        'image' => 'images/program-kesehatan.png',
        'description' => 'Memfasilitasi terapi laser & elektro-medis gratis bagi penderita pasca-stroke, kelumpuhan, serta balita penyakit bawaan di pelosok.',
        'label' => 'Darurat Medis',
        'slug' => 'bakti-kesehatan',
        'terkumpul' => 185400000
    ],
    [
        'name' => 'Dukungan Insentif Guru Honor & Bantuan Operasional Sekolah Terpencil',
        'location' => 'Indonesia Timur',
        'nominal' => 180000000,
        'rfm_score' => 'A+',
        'status' => 'Aktif',
        'category' => 'Pendidikan',
        'image' => 'images/program-guru.png',
        'description' => 'Apresiasi pahlawan tanpa tanda jasa dan pemenuhan sarana belajar bagi 200 murid di wilayah pelosok Indonesia Timur.',
        'label' => 'Pendidikan Bersama',
        'slug' => 'bakti-pendidikan',
        'terkumpul' => 135000000
    ],
    [
        'name' => 'Berbagi Takjil Gratis, Dapur Umum Bencana & Santunan Lansia-Duafa',
        'location' => 'Jakarta Pusat',
        'nominal' => 320000000,
        'rfm_score' => 'B',
        'status' => 'Aktif',
        'category' => 'Sosial & Kemanusiaan',
        'image' => 'images/donasi-bencana.png',
        'description' => 'Distribusi makanan siap saji, kebutuhan pokok lansia sebatang kara, serta dapur darurat untuk korban bencana alam.',
        'label' => 'Tanggap Darurat',
        'slug' => 'bakti-bencana',
        'terkumpul' => 280000000
    ],
    [
        'name' => 'Sumur Bor & Instalasi Air Bersih untuk Daerah Rawan Kekeringan',
        'location' => 'Nusa Tenggara Timur',
        'nominal' => 150000000,
        'rfm_score' => 'A',
        'status' => 'Aktif',
        'category' => 'Lingkungan',
        'image' => 'images/program-lingkungan.png',
        'description' => 'Pembangunan sistem filtrasi dan pemipaan air bersih untuk 3 desa di Nusa Tenggara Timur yang mengalami krisis air tahunan.',
        'label' => 'Infrastruktur Air',
        'slug' => 'bakti-lingkungan',
        'terkumpul' => 98000000
    ],
    [
        'name' => 'Pengadaan Karpet & Sajadah Musala Terkurasi Non-Komersial',
        'location' => 'Pedesaan',
        'nominal' => 90000000,
        'rfm_score' => 'A',
        'status' => 'Aktif',
        'category' => 'Fasilitas Ibadah',
        'image' => 'images/donasi-pendidikan.png',
        'description' => 'Penyediaan karpet dan sajadah berkualitas untuk musala pedesaan yang membutuhkan, dikurasi secara akuntabel tanpa komersialisasi.',
        'label' => 'Terkurasi Amanah',
        'slug' => 'bakti-fasilitas',
        'terkumpul' => 81000000
    ],
];

foreach (array_reverse($campaigns) as $data) {
    $terkumpul = $data['terkumpul'];
    unset($data['terkumpul']);
    
    $c = Campaign::create($data);
    
    // Add donation
    Donation::create([
        'user_id' => $user->id,
        'campaign_id' => $c->id,
        'amount' => $terkumpul,
        'status' => 'Berhasil',
        'payment_method' => 'BCA Virtual Account',
        'created_at' => now()->subDays(rand(1, 10))
    ]);
}

echo "Seeded dummy data as real data!\n";
