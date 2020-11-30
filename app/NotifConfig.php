<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotifConfig extends Model
{
    protected $table='notif_config';
    protected $fillable = [
        'pesan','durasi_hari','api'
    ];
}
