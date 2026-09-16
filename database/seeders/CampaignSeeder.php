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
        Campaign::updateOrCreate(['slug' => 'bakti-kesehatan'], [
            'name' => 'Terapi Medis Gratis (Listrik & Laser)',
            'location' => 'Pelosok Desa',
            'nominal' => 250000000,
            'rfm_score' => 'A+',
            'status' => 'Aktif',
            'category' => 'Kesehatan',
            'image' => 'images/program-kesehatan.webp',
            'description' => 'Memfasilitasi terapi laser & elektro-medis gratis bagi penderita pasca-stroke, kelumpuhan, serta balita penyakit bawaan di pelosok.',
            'label' => 'Darurat Medis',
            'activity_date' => now()->addDays(5)->format('Y-m-d'),
        ]);

        Campaign::updateOrCreate(['slug' => 'bakti-pendidikan'], [
            'name' => 'Dukungan Insentif Guru Honor',
            'location' => 'Indonesia Timur',
            'nominal' => 180000000,
            'rfm_score' => 'A+',
            'status' => 'Aktif',
            'category' => 'Pendidikan',
            'image' => 'images/program-guru.webp',
            'description' => 'Apresiasi pahlawan tanpa tanda jasa dan pemenuhan sarana belajar bagi 200 murid di wilayah pelosok Indonesia Timur.',
            'label' => 'Pendidikan Bersama',
            'activity_date' => now()->addDays(10)->format('Y-m-d'),
        ]);

        Campaign::updateOrCreate(['slug' => 'bakti-bencana'], [
            'name' => 'Berbagi Takjil Gratis & Santunan Lansia-Duafa',
            'location' => 'Jakarta Pusat',
            'nominal' => 320000000,
            'rfm_score' => 'B',
            'status' => 'Berjalan',
            'category' => 'Sosial & Kemanusiaan',
            'image' => 'images/donasi-bencana.webp',
            'description' => 'Distribusi makanan siap saji, kebutuhan pokok lansia sebatang kara, serta dapur darurat untuk korban bencana alam.',
            'label' => 'Tanggap Darurat',
            'activity_date' => now()->subDays(2)->format('Y-m-d'),
        ]);

        Campaign::updateOrCreate(['slug' => 'bakti-lingkungan'], [
            'name' => 'Sumur Bor & Instalasi Air Bersih',
            'location' => 'Nusa Tenggara Timur',
            'nominal' => 150000000,
            'rfm_score' => 'A',
            'status' => 'Aktif',
            'category' => 'Lingkungan',
            'image' => 'images/program-lingkungan.webp',
            'description' => 'Pembangunan sistem filtrasi dan pemipaan air bersih untuk 3 desa di Nusa Tenggara Timur yang mengalami krisis air tahunan.',
            'label' => 'Infrastruktur Air',
            'activity_date' => now()->addDays(15)->format('Y-m-d'),
        ]);

        Campaign::updateOrCreate(['slug' => 'bakti-fasilitas'], [
            'name' => 'Pengadaan Karpet & Sajadah Musala Terkurasi',
            'location' => 'Pedesaan',
            'nominal' => 90000000,
            'rfm_score' => 'A',
            'status' => 'Aktif',
            'category' => 'Fasilitas Ibadah',
            'image' => 'images/donasi-pendidikan.webp',
            'description' => 'Penyediaan karpet dan sajadah berkualitas untuk musala pedesaan yang membutuhkan, dikurasi secara akuntabel tanpa komersialisasi.',
            'label' => 'Terkurasi Amanah',
            'activity_date' => now()->addDays(20)->format('Y-m-d'),
        ]);
    }
}
