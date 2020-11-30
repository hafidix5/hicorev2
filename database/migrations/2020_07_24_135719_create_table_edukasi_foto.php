<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEdukasiFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edukasi_foto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edukasi_id')->unsigned();
            $table->string('foto');
            $table->timestamps();
        });
        Schema::table('edukasi_foto', function (Blueprint $table){
            $table->foreign('edukasi_id')
                  ->references('id')
                  ->on('edukasi')
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
        Schema::dropIfExists('edukasi_foto');
    }
}
