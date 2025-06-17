<?php

namespace Database\Seeders;

use App\Models\Bukubaru;
use Illuminate\Database\Seeder;

class BukubaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bukubaru::insert([
            ['judul' => 'Belajar Laravel', 'penulis' => 'Andi', 'tahun_terbit' => '2021', 'penerbit' => 'Erlangga'],
            ['judul' => 'Pemrograman PHP', 'penulis' => 'Budi', 'tahun_terbit' => '2022', 'penerbit' => 'Gramedia'],
            ['judul' => 'Dasar JavaScript', 'penulis' => 'Citra', 'tahun_terbit' => '2023', 'penerbit' => 'Informatika'],
            ['judul' => 'Framework Vue.js', 'penulis' => 'Dedi', 'tahun_terbit' => '2024', 'penerbit' => 'Prenada'],
            ['judul' => 'CSS Modern', 'penulis' => 'Eka', 'tahun_terbit' => '2021', 'penerbit' => 'Andi Offset'],
            ['judul' => 'Algoritma & Struktur Data', 'penulis' => 'Fajar', 'tahun_terbit' => '2023', 'penerbit' => 'Deepublish'],
            ['judul' => 'Basis Data MySQL', 'penulis' => 'Gina', 'tahun_terbit' => '2022', 'penerbit' => 'Erlangga'],
            ['judul' => 'Desain UI/UX', 'penulis' => 'Hendra', 'tahun_terbit' => '2025', 'penerbit' => 'Prenadamedia'],
            ['judul' => 'Pemrograman Python', 'penulis' => 'Intan', 'tahun_terbit' => '2024', 'penerbit' => 'Gramedia'],
            ['judul' => 'Pengantar AI', 'penulis' => 'Joko', 'tahun_terbit' => '2025', 'penerbit' => 'Informatika'],
        ]);
    }
}
