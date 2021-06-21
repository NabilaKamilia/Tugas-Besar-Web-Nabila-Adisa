<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateDatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Misal kita update data mahaiswa yang ada saat ini milik TI 2A
        DB::table('datas')->update(['jenis_id' => 1]);
        DB::table('datas')->update(['services_id' => 1]);
    }
}
