<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kuesioner extends Model
{
    protected $table='kuesioner';
    protected $fillable = [
        'pertanyaan','jenis_id','sub_jenis','kunci'
    ];
    public function kuesioner(){
        return $this->hasMany('App\jawaban_kuesioner');
    }
}
