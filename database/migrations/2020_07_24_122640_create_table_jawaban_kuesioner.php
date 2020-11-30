<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJawabanKuesioner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_kuesioner', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal');
            $table->integer('kuesioner_id')->unsigned();
            $table->integer('pasien_id')->unsigned();
            $table->string('jawaban');
            $table->timestamps();

        });
        Schema::table('jawaban_kuesioner', function (Blueprint $table){
            $table->foreign('kuesioner_id')
                  ->references('id')
                  ->on('kuesioner')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        Schema::table('jawaban_kuesioner', function (Blueprint $table){
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
        Schema::dropIfExists('jawaban_kuesioner');
    }
}
