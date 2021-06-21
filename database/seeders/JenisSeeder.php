<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = [
            ['jenis_mobil' => 'Mobil Besar',],
            ['jenis_mobil' => 'Mobil Sedang',],
            ['jenis_mobil' => 'Mobil Kecil',],

        ];

        DB::table('jenis')->insert($jenis);
    }
}
