<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Nonaktifkan pengecekan kunci asing
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Hapus semua data di tabel provinsi
        DB::table('provinsis')->delete();

        // Insert data baru ke tabel provinsi
        DB::table('provinsis')->insert([
            ['id' => 1, 'nama' => 'Aceh'],
            ['id' => 2, 'nama' => 'Sumatera Utara'],
            ['id' => 3, 'nama' => 'Sumatera Selatan'],
            ['id' => 4, 'nama' => 'Sumatera Barat'],
            ['id' => 5, 'nama' => 'Bengkulu'],
            ['id' => 6, 'nama' => 'Riau'],
            ['id' => 7, 'nama' => 'Kepulauan Riau'],
            ['id' => 8, 'nama' => 'Jambi'],
            ['id' => 9, 'nama' => 'Lampung'],
            ['id' => 10, 'nama' => 'Bangka Belitung'],
            ['id' => 11, 'nama' => 'Kalimantan Barat'],
            ['id' => 12, 'nama' => 'Kalimantan Timur'],
            ['id' => 13, 'nama' => 'Kalimantan Selatan'],
            ['id' => 14, 'nama' => 'Kalimantan Tengah'],
            ['id' => 15, 'nama' => 'Kalimantan Utara'],
            ['id' => 16, 'nama' => 'Banten'],
            ['id' => 17, 'nama' => 'DKI Jakarta'],
            ['id' => 18, 'nama' => 'Jawa Barat'],
            ['id' => 19, 'nama' => 'Jawa Tengah'],
            ['id' => 20, 'nama' => 'Daerah Istimewa Yogyakarta'],
            ['id' => 21, 'nama' => 'Jawa Timur'],
            ['id' => 22, 'nama' => 'Bali'],
            ['id' => 23, 'nama' => 'Nusa Tenggara Timur'],
            ['id' => 24, 'nama' => 'Nusa Tenggara Barat'],
            ['id' => 25, 'nama' => 'Gorontalo'],
            ['id' => 26, 'nama' => 'Sulawesi Barat'],
            ['id' => 27, 'nama' => 'Sulawesi Tengah'],
            ['id' => 28, 'nama' => 'Sulawesi Utara'],
            ['id' => 29, 'nama' => 'Sulawesi Tenggara'],
            ['id' => 30, 'nama' => 'Sulawesi Selatan'],
            ['id' => 31, 'nama' => 'Maluku Utara'],
            ['id' => 32, 'nama' => 'Maluku'],
            ['id' => 33, 'nama' => 'Papua Barat'],
            ['id' => 34, 'nama' => 'Papua'],
            ['id' => 35, 'nama' => 'Papua Tengah'],
            ['id' => 36, 'nama' => 'Papua Pegunungan'],
            ['id' => 37, 'nama' => 'Papua Selatan'],
            ['id' => 38, 'nama' => 'Papua Barat Daya'],
        ]);

        // Aktifkan kembali pengecekan kunci asing
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}