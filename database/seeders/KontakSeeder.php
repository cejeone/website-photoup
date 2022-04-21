<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kontak')->insert([
            'humas1' => 'Annisa',
            'telepon1' => '+62-817-7418-9092',
            'konfirmasi_telepon1' => '+6281774189092',

            'humas2' => 'Zaki',
            'telepon2' => '+62-812-1062-4501',
            'konfirmasi_telepon2' => '+6281210624501',

            'id_user' => '1',
        ]);
    }
}
