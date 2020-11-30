<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kuesioner extends Model
{
    protected $table='kuesioner';
    protected $fillable = [
        'pertanyaan','kunci'
    ];
    public function kuesioner(){
        return $this->hasMany('App\jawaban_kuesioner');
    }
}
