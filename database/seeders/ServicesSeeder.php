<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['layanan' => 'Executive',],
            ['layanan' => 'Elite',],
            ['layanan' => 'Pro',],

        ];

        DB::table('services')->insert($services);
    }
}
