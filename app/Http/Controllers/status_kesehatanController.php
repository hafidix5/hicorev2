<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        return view('pages.status_kesehatan', ['pasien'=>$pasien]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'berhentihari' => $request->berhentihari,

           ]);

            return back()->withStatus(__('Data berhasil disimpan'));
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
