<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\pasien;
use App\User;
use App\kuesioner;
use App\jawaban_kuesioner;
use auth;
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
        $user = User::where('id', Auth::user()->id)->first();
        $user->login = $user->login+1;
        $user->update();
       //dd($user);
        return view('dashboard',compact('jpasien','kuesioner','hasil'));
    }
}
