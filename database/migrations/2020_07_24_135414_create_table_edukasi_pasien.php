<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEdukasiPasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edukasi_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->integer('edukasi_id')->unsigned();
            $table->integer('pasien_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('edukasi_pasien', function (Blueprint $table){
            $table->foreign('edukasi_id')
                  ->references('id')
                  ->on('edukasi')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        Schema::table('edukasi_pasien', function (Blueprint $table){
            $table->foreign('pasien_id')
                  ->references('id')
                  ->on('pasien')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edukasi_pasien');
    }
}
