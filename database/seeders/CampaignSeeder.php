<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campaign::create([
            'name' => 'Terapi Medis Gratis (Listrik & Laser)',
            'location' => 'Pelosok Desa',
            'nominal' => 250000000,
            'rfm_score' => 'A+',
            'status' => 'Aktif',
            'category' => 'Kesehatan',
            'image' => 'images/program-kesehatan.png',
            'description' => 'Memfasilitasi terapi laser & elektro-medis gratis bagi penderita pasca-stroke, kelumpuhan, serta balita penyakit bawaan di pelosok.',
            'label' => 'Darurat Medis',
            'slug' => 'bakti-kesehatan',
        ]);

        Campaign::create([
            'name' => 'Dukungan Insentif Guru Honor',
            'location' => 'Indonesia Timur',
            'nominal' => 180000000,
            'rfm_score' => 'A+',
            'status' => 'Aktif',
            'category' => 'Pendidikan',
            'image' => 'images/program-guru.png',
            'description' => 'Apresiasi pahlawan tanpa tanda jasa dan pemenuhan sarana belajar bagi 200 murid di wilayah pelosok Indonesia Timur.',
            'label' => 'Pendidikan Bersama',
            'slug' => 'bakti-pendidikan',
        ]);

        Campaign::create([
            'name' => 'Berbagi Takjil Gratis & Santunan Lansia-Duafa',
            'location' => 'Jakarta Pusat',
            'nominal' => 320000000,
            'rfm_score' => 'B',
            'status' => 'Berjalan',
            'category' => 'Sosial & Kemanusiaan',
            'image' => 'images/donasi-bencana.png',
            'description' => 'Distribusi makanan siap saji, kebutuhan pokok lansia sebatang kara, serta dapur darurat untuk korban bencana alam.',
            'label' => 'Tanggap Darurat',
            'slug' => 'bakti-bencana',
        ]);

        Campaign::create([
            'name' => 'Sumur Bor & Instalasi Air Bersih',
            'location' => 'Nusa Tenggara Timur',
            'nominal' => 150000000,
            'rfm_score' => 'A',
            'status' => 'Aktif',
            'category' => 'Lingkungan',
            'image' => 'images/program-lingkungan.png',
            'description' => 'Pembangunan sistem filtrasi dan pemipaan air bersih untuk 3 desa di Nusa Tenggara Timur yang mengalami krisis air tahunan.',
            'label' => 'Infrastruktur Air',
            'slug' => 'bakti-lingkungan',
        ]);

        Campaign::create([
            'name' => 'Pengadaan Karpet & Sajadah Musala Terkurasi',
            'location' => 'Pedesaan',
            'nominal' => 90000000,
            'rfm_score' => 'A',
            'status' => 'Aktif',
            'category' => 'Fasilitas Ibadah',
            'image' => 'images/donasi-pendidikan.png',
            'description' => 'Penyediaan karpet dan sajadah berkualitas untuk musala pedesaan yang membutuhkan, dikurasi secara akuntabel tanpa komersialisasi.',
            'label' => 'Terkurasi Amanah',
            'slug' => 'bakti-fasilitas',
        ]);
    }
}
