<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table='pasien';

    protected $fillable = [
        'id','hp','nama','tgl_lahir','jk',
        'alamat','pekerjaan','pendidikan','riwayat_hipertensi_kel',
        'lama_hipertensi','tinggal_dengan'
        ,'penyakit_lain',
        'teratur_kontrol','konsumsi_obat','user_id',
        'sebutkan_siapa','lama_hipertensiTahun',
        'penyakit_lain_cek',
        'alasan','jenis_tempat_berobat','nama_tempat_berobat'
    ];
    public function pasien(){
        return $this->belongsTo('App\puskesmas');
    }

    public function pasien_user(){
        return $this->belongsTo('App\User');
    }
}
