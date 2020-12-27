<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    
    protected $table='jenis';

    protected $fillable = [
        'nama'
    ];
    

    public function jenis_video(){
        return $this->hasMany('App\video');
}
}
