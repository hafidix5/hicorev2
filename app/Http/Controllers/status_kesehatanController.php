<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use session;
use redirect;

class status_kesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=auth()->user()->id;
        $pasien=DB::table('pasien')->where('user_id',$id)->first();
        $hasil_kesehatan=DB::table('status_kesehatan')->where('pasien_id',$pasien->id)
        ->OrderBy('tgl_mengisi','DESC')
        ->select ('tgl_mengisi','id','pasien_id')
        ->get();
        //dd($hasil_kesehatan);
        return view('pages.status_kesehatanIndex', ['hasil_kesehatan'=>$hasil_kesehatan]);
    }
    public function index_admin()
    {        
        
        $hasil_kesehatan=DB::table('status_kesehatan')
        ->rightjoin('pasien','status_kesehatan.pasien_id','=','pasien.id')
        ->OrderBy('tgl_mengisi','DESC')
        ->select ('tgl_mengisi','status_kesehatan.id','pasien_id','nama')
        ->groupby('tgl_mengisi','status_kesehatan.id','pasien_id','nama')
        ->get();
       // dd($hasil_kesehatan);
        return view('pages.status_kesehatanIndex', ['hasil_kesehatan'=>$hasil_kesehatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=auth()->user()->id;
        $pasien=DB::table('pasien')->where('user_id',$id)->first();
        return view('pages.status_kesehatan', ['pasien'=>$pasien]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date=Carbon::now();
        $date=$date->toDateString();


        $cek_tgl=DB::table('status_kesehatan')->where('pasien_id',$request->pasien_id)
        ->where('tgl_mengisi',$date)->first();
        if($cek_tgl)
        {
            return redirect()->back()->with('alert', 'Anda hanya dapat mengisi 1(satu) kali sehari');
        }
        else
        {
        DB::table('status_kesehatan')->insert([
            'pasien_id' => $request->pasien_id,
            'tgl_mengisi' => $date,
                'tgl_pemeriksaan' => $request->tgl_pemeriksaan,
                'sistol' => $request->sistol,
                'diastol' => $request->diastol,
                'tgl_menimbang' => $request->tgl_menimbang,
                'berat' => $request->berat,
                'tinggi' => $request->tinggi,
                'tgl_pengukuran' => $request->tgl_pengukuran,
                'lingkar_perut' => $request->lingkar_perut,
                'perokok_cek' => $request->perokok_cek,
                'batangperhari' => $request->batangperhari,
                'berhentitahun' => $request->berhentitahun,
                'berhentibulan' => $request->berhentibulan,
                'berhentihari' => $request->berhentihari
           ]);
            return redirect()->back()->withStatus(__('Data berhasil disimpan'));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_hasil=DB::table('status_kesehatan')->where('id',$id)->first();
        return view('pages.status_kesehatanEdit', ['show_hasil'=>$show_hasil]);
    }

    public function hasil($tgl,$id)
    {
        $tekanandarah=DB::select('
        SELECT (case when  sistol<120 AND diastol<80 then "Normal"
            when  sistol<=139 OR diastol<=89 then "PreHipertensi"
            when  sistol<=159 OR diastol<=99 then "Hipertensi Derajat I"
            when  sistol>=160 OR diastol>=100 then "Hipertensi Derajat II"
            when  sistol>180 OR diastol>120 then "Hipertensi Krisis"
            END)  AS tekanandarah FROM status_kesehatan WHERE pasien_id='.$id.'
            and tgl_mengisi="'.$tgl.'"
        ');
        $imt=DB::select('
        SELECT (case when  berat/((tinggi*0.01)*tinggi*0.01)<17 then "Kurus tingkat berat"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=18.4 then "Kurus tingkat ringan"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=25 then "Normal"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=27 then "Kegemukan"
        when  berat/((tinggi*0.01)*tinggi*0.01)>27 then "Gemuk"
        END)  AS imt FROM status_kesehatan WHERE pasien_id='.$id.'
        and tgl_mengisi="'.$tgl.'"
        ');
        $obesitas=DB::select('
        SELECT (case when  lingkar_perut>90 AND jk="laki-laki" then "Obesitas Sentral"
            when  lingkar_perut>80 AND jk="perempuan" then "Obesitas Sentral"
            when lingkar_perut<=90 AND jk="laki-laki" then "Normal"
            when lingkar_perut<=80 AND jk="perempuan" then "Normal"
			END)  AS obesitas FROM status_kesehatan AS st INNER JOIN pasien AS p on
			st.pasien_id=p.id WHERE pasien_id='.$id.'
            and tgl_mengisi="'.$tgl.'"
        ');
        $rokok=DB::select('
        SELECT (case when batangperhari=0 then "Tidak pernah"
        when  batangperhari<=10 then "Perokok ringan"
        when  batangperhari>=20 then "Perokok sedang"
        when  batangperhari>20 then "Perokok berat"
        END)  AS rokok FROM status_kesehatan WHERE pasien_id='.$id.'
        and tgl_mengisi="'.$tgl.'"
        ');

       // dd($tekanandarah);
        return view('pages.status_kesehatanHasil',
        compact('tekanandarah','imt','obesitas','rokok'));
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
