<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiServicesDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('datas', function (Blueprint $table){
            $table->unsignedBigInteger('services_id')->nullable(); //Menambahkan kolom jenis_id
            $table->foreign('services_id')->references('id')->on('services'); //Menambahkan foreign key di kolom kelas_id

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('datas', function (Blueprint $table){
            $table->string('services');
            $table->dropForeign(['services_id']);
        });
    }
}
