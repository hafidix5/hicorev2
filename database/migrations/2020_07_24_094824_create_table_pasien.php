<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hp',12)->unique();
            $table->string('nama',30);
            $table->date('tgl_lahir');
            $table->enum('jk',['laki-laki','perempuan']);
            $table->integer('tinggi');
            $table->integer('berat');
            $table->string('alamat',70);
            $table->enum('pekerjaan',['Ibu rumah tangga','Pensiunan','PNS','Petani/Buruh','Wiraswasta','Tidak bekerja']);
            $table->enum('pendidikan',['Tidak Sekolah','SD','SMP','SMA','Perguruan Tinggi']);
            $table->enum('riwayat_hipertensi_kel',['ada','tidak']);
            $table->string('lama_hipertensi',2);
            $table->enum('tinggal_dengan', ['pasangan', 'sendiri','anak','saudara']);
            $table->date('tgl_pemeriksaan_terakhir');
            $table->Integer('pemeriksaan_satu');
            $table->Integer('pemeriksaan_dua');
            $table->enum('merokok',['ya','tidak']);
            $table->Integer('lama_merokok')->nullable();
            $table->Integer('rokokperhari')->nullable();
            $table->Integer('lingkar_perut');
            $table->string('penyakit_lain');
            $table->enum('teratur_kontrol',['iya','tidak']);
            $table->string('konsumsi_obat');
            $table->Integer('puskesmas_id')->unsigned();
            $table->Integer('user_id')->unsigned()->unique();
            $table->timestamps();
        });

        Schema::table('pasien', function (Blueprint $table){
            $table->foreign('puskesmas_id')
                  ->references('id')
                  ->on('puskesmas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        Schema::table('pasien', function (Blueprint $table){
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
        Schema::dropIfExists('pasien');
    }
}
