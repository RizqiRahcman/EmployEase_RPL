<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pekerjaan;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pekerjaan::create([
            'posisi'=>'Graphic Design',
            'desc_pekerjaan'=>'Grazedu menyediakan program magang untuk memberikan kesempatan pada mahasiswa mendapatkan pengalaman kerja nyata, peningkatan pengetahuan, keterampilan, dan membangun jaringan profesional. Program magang yang dijalankan bersifat unpaid dengan durasi kegiatan magang mulai dari 08 Juli - 05 Desember 2024 (5 bulan/150 hari). Program magang Grazedu membuka lowongan salah satunya Graphic Design. Graphic Design bertanggung jawab dalam pembuatan konsep desain konten serta melakukan pengelolaan desain secara efisien. Graphic Design memiliki jobdesk yang akan dijalankan, yaitu pembuatan desain konsep visual untuk berbagai proyek (konten sosial media, promosi dsb), berkolaborasi dengan tim mengenai desain, membuat revisi berdasarkan masukan dari tim internal, mengatur dan mengelola file desain secara efisien. ',
            'kota_id'=> '338',
            'alamat'=>'Jl. Pramuka No 13, Desa Adat Baru',
            'tipe' => 'Internship',
            'kategori' => 'Desain',
            'gaji'=>'range1',
            'slug'=>'graphic-design-uhdeuokp',
            'perusahaan_id'=> '2'
        ]);
        Pekerjaan::create([
            'posisi'=>'Project Engineer - Refrubishment',
            'desc_pekerjaan'=>'Kualifikasi yang dibutuhkan adalah Pria atau Wanita dengan pendidikan minimal S1 Teknik Mesin, Kimia, atau Industri. Kandidat harus memiliki pengalaman kerja minimal 10 tahun di proyek oil, gas, atau petrokimia, dengan preferensi bagi yang telah bekerja di WK Rokan. Pengalaman sebagai Project Engineer atau Project Manager sangat diutamakan. Selain itu, kandidat harus berpengalaman memimpin tim Engineering dalam pengerjaan Pre-FEED, FEED, dan DED proyek migas. Kemampuan dalam manajemen proyek yang baik dan kemampuan menyusun rencana kerja sendiri adalah keharusan. Terakhir, kandidat harus memiliki kemampuan komunikasi dan koordinasi yang baik, baik dengan pihak internal maupun eksternal.',
            'kota_id'=> '110',
            'alamat'=>'Duri, Kecamatan Mandau',
            'tipe' => 'Full Time',
            'kategori' => 'Teknologi',
            'gaji'=>'range3',
            'slug'=>'project-engineer-hsjkshi',
            'perusahaan_id'=> '3'
        ]);
        Pekerjaan::create([
            'posisi'=>'Full Stack Programmer',
            'desc_pekerjaan'=>'Selama magang di LLDIKTI Wilayah 9, peserta akan terlibat dalam berbagai kegiatan, termasuk pengembangan sistem informasi berbasis web menggunakan teknologi modern seperti Laravel, Angular, dan Node.js. Magang ini diharapkan dapat meningkatkan kemampuan teknis dan soft skills peserta, serta memberikan kontribusi dalam penelitian inovatif untuk memperbaiki dan meningkatkan kinerja sistem. Selain itu, peserta juga akan terlibat dalam penyusunan laporan evaluasi dan presentasi proyek kepada tim pengembang dan manajemen untuk mendapatkan umpan balik dan pengakuan atas kontribusi mereka.',
            'kota_id'=> '449',
            'alamat'=>'Jl. Bung, Tamalanrea Jaya, Makassar',
            'tipe' => 'Part Time',
            'kategori' => 'Teknologi',
            'gaji'=>'range2',
            'slug'=>'full-stack-programer-hsjka',
            'perusahaan_id'=> '4'
        ]);
    }
}
