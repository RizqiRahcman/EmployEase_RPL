<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // User::truncate();
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Baru',
            'role' => 'pelamar',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
            'image' => 'contoh.png',
        ]);
    }
}