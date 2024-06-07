<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::create([
            'user_id' => '2',
            'alamat' => 'Jl. Raya Puputan No.86, Dangin Puri Klod, Kec. Denpasar Tim., Kota Denpasar, Bali 80234',
            'no' => ' ',
            'desc' => 'Platform pengembangan diri melalui peningkatan soft skill, karakter dan nilai-nilai positif untuk mencapai kesuksesan karir di masa depan',
        ]);

        CompanyProfile::create([
            'user_id' => '3',
            'alamat' => 'Grha Pertamina, Jl. Medan Merdeka Timur No.11-13, Jakarta 10110 Indonesia',
            'no' => '(021)-1500000',
            'desc' => 'Pertamina berfokus pada upaya-upaya untuk memastikan ketersediaan energi nasional yang inklusif berdasarkan prinsip availability, accessibility, affordability, acceptability dan sustainability',
        ]);

        CompanyProfile::create([
            'user_id' => '4',
            'alamat' => 'Jl. Bung, Tamalanrea Jaya, Makassar, Kota Makassar, Sulawesi Selatan 90245',
            'no' => '+62215794610',
            'desc' => 'LLDIKTI Wilayah IX melayani Provinsi Sulawesi Selatan, Sulawesi Tenggara dan Sulawesi Barat',
        ]);
    }
}
