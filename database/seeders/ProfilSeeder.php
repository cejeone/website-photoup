<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('profils')->insert([
         'nama_ketum' => 'Muhammad Alwi Nur Saputra',
         'periode_ketum' => '2021/2022',
         'sambutan' => 'Hai teman-teman.. selamat datang di website UKM PHOTO UP KMUP yang akan menjadi referensi bagi siapapun yang ingin mendapatkan informasi tentang UKM PHOTO UP KMUP',
         'foto_ketum' => '/img/ketum.jpeg',
         'foto_struktural' => '/img/struktural.png',
         ]);
    }
}
