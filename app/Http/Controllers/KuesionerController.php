<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kuesioner;
use App\pasien;
use Illuminate\Support\Facades\DB;
use App\Exports\HasilKuesionerExport;
use Maatwebsite\Excel\Facades\Excel;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         if(pasien::where('user_id','=',auth()->user()->id)->first())
        {
        $persepsi=DB::table('kuesioner')->where('jenis_id','2')->get();

         return view('pages.isi_persepsi', compact('persepsi'));
        }
        else
        {

            return redirect()->route('dataDiri')->withStatus(__('Anda harus mengisi Data Diri terlebih dahulu'));
        }

        //dd(pasien::where('user_id','=',auth()->user()->id)->first());
    }
    public function indexpengetahuan()
    {

         if(pasien::where('user_id','=',auth()->user()->id)->first())
        {
        $pengetahuan=DB::table('kuesioner')->where('jenis_id','1')->get();

         return view('pages.isi_pengetahuan', compact('pengetahuan'));
        }
        else
        {

            return redirect()->route('dataDiri')->withStatus(__('Anda harus mengisi Data Diri terlebih dahulu'));
        }

        //dd(pasien::where('user_id','=',auth()->user()->id)->first());
    }
    public function indexstress()
    {

         if(pasien::where('user_id','=',auth()->user()->id)->first())
        {
        $stress=DB::table('kuesioner')->where('jenis_id','3')->get();

         return view('pages.isi_stress', compact('stress'));
        }
        else
        {

            return redirect()->route('dataDiri')->withStatus(__('Anda harus mengisi Data Diri terlebih dahulu'));
        }

        //dd(pasien::where('user_id','=',auth()->user()->id)->first());
    }
    public function indexpengendalian()
    {

         if(pasien::where('user_id','=',auth()->user()->id)->first())
        {
        $pengendalian_1=DB::table('kuesioner')->where('jenis_id','4')->where('sub_jenis','obat-obatan')->get();
        $pengendalian_2=DB::table('kuesioner')->where('jenis_id','4')->where('sub_jenis','diet')->get();
        $pengendalian_3=DB::table('kuesioner')->where('jenis_id','4')->where('sub_jenis','aktivitas_fisik')->get();
        $pengendalian_4=DB::table('kuesioner')->where('jenis_id','4')->where('sub_jenis','merokok')->get();
        $pengendalian_5=DB::table('kuesioner')->where('jenis_id','4')->where('sub_jenis','manajemen_bb')->get();
        $pengendalian_6=DB::table('kuesioner')->where('jenis_id','4')->where('sub_jenis','minum_alkohol')->get();
        $pengendalian_7=DB::table('kuesioner')->where('jenis_id','4')->where('sub_jenis','alkohol')->get();

         return view('pages.isi_pengendalian', compact('pengendalian_1','pengendalian_2',
         'pengendalian_3','pengendalian_4','pengendalian_5','pengendalian_6','pengendalian_7'));
        }
        else
        {

            return redirect()->route('dataDiri')->withStatus(__('Anda harus mengisi Data Diri terlebih dahulu'));
        }

        //dd(pasien::where('user_id','=',auth()->user()->id)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export_excel($nama)
{
    return Excel::download(new HasilKuesionerExport, 'hasilKuesioner-'.$nama.'.xlsx' );
}
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //return back()->withStatus(__('Data diri berhasil disimpan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
