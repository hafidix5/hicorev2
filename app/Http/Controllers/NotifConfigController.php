<?php

namespace App\Http\Controllers;

use App\NotifConfig;
use Illuminate\Http\Request;

class NotifConfigController extends Controller
{


    public function index(){


        $config = NotifConfig::where('id',1)->first();
        return view('pages.notifconfig',['data'=>$config]);
    }

    public function create(Request $request){




            $update = NotifConfig::where('id',1)->first();
            $update->pesan = $request->pesan;
            $update->durasi_hari = $request->waktu;
            $update->api = $request->api;
            $update->update();


        return redirect('notifconfig');
    }
}
