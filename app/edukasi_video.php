<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class edukasi_video extends Model
{
    protected $table='edukasi_video';

    protected $fillable = [
        'edukasi_id','video'
    ];

    public function edukasi_video(){
        return $this->belongsTo('App\edukasi');
    }
}
