<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class edukasi extends Model
{
    protected $table='edukasi';
    protected $fillable = [
        'nama','jenis','materi','file'
    ];

        public function edukasi()
        {
            return $this->hasMany('App\edukasi_video');
        }

}
