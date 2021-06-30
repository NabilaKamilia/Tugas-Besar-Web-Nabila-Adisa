<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiJenisDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datas', function (Blueprint $table){
            $table->unsignedBigInteger('jenis_id')->nullable(); //Menambahkan kolom jenis_id
            $table->foreign('jenis_id')->references('id')->on('jenis'); //Menambahkan foreign key di kolom kelas_id

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
            $table->string('jenis');
            $table->dropForeign(['jenis_id']);
        });
    }
}
