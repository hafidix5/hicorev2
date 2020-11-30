<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotifConfig;

class NotifConfig3Controller extends Controller
{
    public function index(){

        $config = NotifConfig::where('id',3)->first();
        return view('pages.notifconfig3',['data'=>$config]);
    }

    public function create(Request $request){

            $update = NotifConfig::where('id',3)->first();
            $update->pesan = $request->pesan;
            $update->durasi_hari = $request->waktu;
            $update->api = $request->api;
            $update->update();

        return redirect('notifconfig3');
    }
}
