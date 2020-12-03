<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban_kuesioner extends Model
{
    protected $table='jawaban_kuesioner';

    protected $fillable = [
        'tanggal','kuesioner_id','pasien_id','jawaban','jenis_id'
    ];
    protected $dateFormat = 'U';

    public function jawaban_kuesioner(){
        return $this->belongsTo('App\kuesioner');
}
public function jawaban_kuesioner_pasien(){
    return $this->belongsTo('App\pasien');
}
}
