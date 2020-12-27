<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table='video';

    protected $fillable = [
        'nama','jenis_id','video'
    ];
    

    public function video_jenis(){
        return $this->belongsTo('App\jenis');
}
}
