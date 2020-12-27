<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\video;

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

    public function video_pengetahuan_admin()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video,video.nama AS nama FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=1 ORDER BY video.id asc');
        return view('pages.video_pengetahuan_admin',['response'=>$response]);
    }
    public function video_pengetahuan_show()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=1 ORDER BY video.id asc');
        return view('pages.video_pengetahuan_admin',['response'=>$response]);
    }
    public function video_pengetahuan_insert()
    {
                
        return view('pages.video_pengetahuan_insert');
    }

    public function video_pengetahuan_store(Request $request)
    {
        
        $this->validate($request,[
            'nama' => 'required',
            'jenis_id' => 'required',
            'video' => 'required'
    	]);
        $jenis_id = (int) $request->get('jenis_id');
        
        video::create([
            'nama' => $request->nama,
            'jenis_id' => $jenis_id,
            'video' => $request->video
        ]);
        //dd($hasil);

            return redirect('video_pengetahuan_admin')->withStatus(__('Data berhasil disimpan'));
    }

    public function video_pengetahuan_edit($id)
    {
       
        $video_pengetahuan=video::where('video.id', $id)
        ->select('video.id as id', 'video.nama as nama','video.video as video')->first();
        //dd($pertanyaan_pengetahuan);
        return view('pages.video_pengetahuan_edit',['video_pengetahuan'=>$video_pengetahuan]);
    }

    public function video_pengetahuan_update(Request $request, $id)
    {
      
       $this->validate($request,[
        'nama' => 'required',
        'jenis_id' => 'required',
        'video' => 'required'
    ]);

     $video = video::find($id);
     $video->nama = $request->nama;
     $video->jenis_id = $request->jenis_id;
     $video->video = $request->video;
     $video->save();
     return redirect('video_pengetahuan_admin')->withStatus(__('Data berhasil diubah'));


    }
    public function video_pengetahuan_destroy($id)
    {
        $video=video::find($id);
        $video->delete();
        return redirect('video_pengetahuan_admin')->withStatus(__('Data berhasil dihapus'));
    }
    

    public function video_persepsi()
    {
        $response = DB::select('
        SELECT * FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=2 ORDER BY video.id asc');
        return view('pages.video_persepsi',['response'=>$response]);
    }

    public function video_persepsi_admin()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video,video.nama AS nama FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=2 ORDER BY video.id asc');
        return view('pages.video_persepsi_admin',['response'=>$response]);
    }
    public function video_persepsi_show()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=2 ORDER BY video.id asc');
        return view('pages.video_persepsi_admin',['response'=>$response]);
    }
    public function video_persepsi_insert()
    {
                
        return view('pages.video_persepsi_insert');
    }

    public function video_persepsi_store(Request $request)
    {
        
        $this->validate($request,[
            'nama' => 'required',
            'jenis_id' => 'required',
            'video' => 'required'
    	]);
        $jenis_id = (int) $request->get('jenis_id');
        
        video::create([
            'nama' => $request->nama,
            'jenis_id' => $jenis_id,
            'video' => $request->video
        ]);
        //dd($hasil);

            return redirect('video_persepsi_admin')->withStatus(__('Data berhasil disimpan'));
    }

    public function video_persepsi_edit($id)
    {
       
        $video_persepsi=video::where('video.id', $id)
        ->select('video.id as id', 'video.nama as nama','video.video as video')->first();
        //dd($pertanyaan_persepsi);
        return view('pages.video_persepsi_edit',['video_persepsi'=>$video_persepsi]);
    }

    public function video_persepsi_update(Request $request, $id)
    {
      
       $this->validate($request,[
        'nama' => 'required',
        'jenis_id' => 'required',
        'video' => 'required'
    ]);

     $video = video::find($id);
     $video->nama = $request->nama;
     $video->jenis_id = $request->jenis_id;
     $video->video = $request->video;
     $video->save();
     return redirect('video_persepsi_admin')->withStatus(__('Data berhasil diubah'));


    }
    public function video_persepsi_destroy($id)
    {
        $video=video::find($id);
        $video->delete();
        return redirect('video_persepsi_admin')->withStatus(__('Data berhasil dihapus'));
    }

    public function video_stress()
    {
        $response = DB::select('
        SELECT * FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=3 ORDER BY video.id asc');
        return view('pages.video_stress',['response'=>$response]);
    }

    public function video_stress_admin()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video,video.nama AS nama FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=3 ORDER BY video.id asc');
        return view('pages.video_stress_admin',['response'=>$response]);
    }
    public function video_stress_show()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=3 ORDER BY video.id asc');
        return view('pages.video_stress_admin',['response'=>$response]);
    }
    public function video_stress_insert()
    {
                
        return view('pages.video_stress_insert');
    }

    public function video_stress_store(Request $request)
    {
        
        $this->validate($request,[
            'nama' => 'required',
            'jenis_id' => 'required',
            'video' => 'required'
    	]);
        $jenis_id = (int) $request->get('jenis_id');
        
        video::create([
            'nama' => $request->nama,
            'jenis_id' => $jenis_id,
            'video' => $request->video
        ]);
        //dd($hasil);

            return redirect('video_stress_admin')->withStatus(__('Data berhasil disimpan'));
    }

    public function video_stress_edit($id)
    {
       
        $video_stress=video::where('video.id', $id)
        ->select('video.id as id', 'video.nama as nama','video.video as video')->first();
        //dd($pertanyaan_stress);
        return view('pages.video_stress_edit',['video_stress'=>$video_stress]);
    }

    public function video_stress_update(Request $request, $id)
    {
      
       $this->validate($request,[
        'nama' => 'required',
        'jenis_id' => 'required',
        'video' => 'required'
    ]);

     $video = video::find($id);
     $video->nama = $request->nama;
     $video->jenis_id = $request->jenis_id;
     $video->video = $request->video;
     $video->save();
     return redirect('video_stress_admin')->withStatus(__('Data berhasil diubah'));


    }
    public function video_stress_destroy($id)
    {
        $video=video::find($id);
        $video->delete();
        return redirect('video_stress_admin')->withStatus(__('Data berhasil dihapus'));
    }

    public function video_pengendalian()
    {
        $response = DB::select('
        SELECT * FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=4 ORDER BY video.id asc');
        return view('pages.video_pengendalian',['response'=>$response]);
    }
    public function video_pengendalian_admin()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video,video.nama AS nama FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=4 ORDER BY video.id asc');
        return view('pages.video_pengendalian_admin',['response'=>$response]);
    }
    public function video_pengendalian_show()
    {
        $response = DB::select('
        SELECT video.id AS id, video.jenis_id AS jenis_id, video.video AS video FROM jenis JOIN video ON jenis.id=video.jenis_id WHERE jenis.id=4 ORDER BY video.id asc');
        return view('pages.video_pengendalian_admin',['response'=>$response]);
    }
    public function video_pengendalian_insert()
    {
                
        return view('pages.video_pengendalian_insert');
    }

    public function video_pengendalian_store(Request $request)
    {
        
        $this->validate($request,[
            'nama' => 'required',
            'jenis_id' => 'required',
            'video' => 'required'
    	]);
        $jenis_id = (int) $request->get('jenis_id');
        
        video::create([
            'nama' => $request->nama,
            'jenis_id' => $jenis_id,
            'video' => $request->video
        ]);
        //dd($hasil);

            return redirect('video_pengendalian_admin')->withStatus(__('Data berhasil disimpan'));
    }

    public function video_pengendalian_edit($id)
    {
       
        $video_pengendalian=video::where('video.id', $id)
        ->select('video.id as id', 'video.nama as nama','video.video as video')->first();
        //dd($pertanyaan_pengendalian);
        return view('pages.video_pengendalian_edit',['video_pengendalian'=>$video_pengendalian]);
    }

    public function video_pengendalian_update(Request $request, $id)
    {
      
       $this->validate($request,[
        'nama' => 'required',
        'jenis_id' => 'required',
        'video' => 'required'
    ]);

     $video = video::find($id);
     $video->nama = $request->nama;
     $video->jenis_id = $request->jenis_id;
     $video->video = $request->video;
     $video->save();
     return redirect('video_pengendalian_admin')->withStatus(__('Data berhasil diubah'));


    }
    public function video_pengendalian_destroy($id)
    {
        $video=video::find($id);
        $video->delete();
        return redirect('video_pengendalian_admin')->withStatus(__('Data berhasil dihapus'));
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
