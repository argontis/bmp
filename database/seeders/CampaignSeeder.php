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
            'name' => 'Beasiswa Anak NTT',
            'location' => 'Nusa Tenggara Timur',
            'nominal' => 125500000,
            'rfm_score' => 'A+',
            'status' => 'Aktif',
        ]);

        Campaign::create([
            'name' => 'Dapur Umum Pangan',
            'location' => 'Jakarta Pusat',
            'nominal' => 45200000,
            'rfm_score' => 'B',
            'status' => 'Berjalan',
        ]);
    }
}
