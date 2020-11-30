<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEdukasiVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edukasi_video', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edukasi_id')->unsigned();
            $table->string('video');
            $table->timestamps();
        });
        Schema::table('edukasi_video', function (Blueprint $table){
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
        Schema::dropIfExists('edukasi_video');
    }
}
