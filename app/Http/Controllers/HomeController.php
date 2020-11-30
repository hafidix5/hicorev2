<?php

namespace App\Http\Controllers;
use App\pasien;

use App\kuesioner;
use App\jawaban_kuesioner;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jpasien=pasien::all()->count();
        $kuesioner=kuesioner::all()->count();
        $hasil=jawaban_kuesioner::distinct('tanggal')->count();

       // dd($totalpasien);
        return view('dashboard',compact('jpasien','kuesioner','hasil'));
    }
}
