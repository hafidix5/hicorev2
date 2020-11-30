<?php

namespace App\Http\Controllers;

use App\NotifConfig;
use Illuminate\Http\Request;

class NotifConfig2Controller extends Controller
{
    public function index(){


        $config = NotifConfig::where('id',2)->first();
        return view('pages.notifconfig2',['data'=>$config]);
    }

    public function create(Request $request){

            $update = NotifConfig::where('id',2)->first();
            $update->pesan = $request->pesan;
            $update->durasi_hari = $request->waktu;
            $update->api = $request->api;
            $update->update();

        return redirect('notifconfig2');
    }
}
