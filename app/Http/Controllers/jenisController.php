<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function video_pengetahuan()
    {
        $response = DB::select('
        SELECT * FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=1 ORDER BY video.id asc');
        return view('pages.video_pengetahuan',['response'=>$response]);
    }
    

    public function video_persepsi()
    {
        $response = DB::select('
        SELECT * FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=2 ORDER BY video.id asc');
        return view('pages.video_persepsi',['response'=>$response]);
    }

    public function video_stress()
    {
        $response = DB::select('
        SELECT * FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=3 ORDER BY video.id asc');
        return view('pages.video_stress',['response'=>$response]);
    }

    public function video_pengendalian()
    {
        $response = DB::select('
        SELECT * FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=4 ORDER BY video.id asc');
        return view('pages.video_pengendalian',['response'=>$response]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
