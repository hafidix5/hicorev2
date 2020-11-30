<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',30);
            $table->string('hp',12);
            $table->integer('puskesmas_id')->nullable()->unsigned();
            $table->integer('user_id')->unsigned()->unique();
            $table->timestamps();
        });

        Schema::table('admin', function (Blueprint $table){
            $table->foreign('puskesmas_id')
                  ->references('id')
                  ->on('puskesmas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        Schema::table('admin', function (Blueprint $table){
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('admin');
    }
}
