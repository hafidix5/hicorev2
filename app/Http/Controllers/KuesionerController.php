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
    
    public function showPengetahuan()
    {/* 
        $kpengetahuan=DB::table('kuesioner')
        ->rightJoin('detekos','detekos.jenis_edukasi_id','=','jenis_edukasi.id')
        ->select('jenis_edukasi.nama as jenis_edukasi','detekos.nama as nama',
        'detekos.video as video','detekos.id as id')->get(); */
        $pertanyaan_pengetahuan=kuesioner::where('kuesioner.jenis_id', '1')
       ->select('kuesioner.id as id', 'kuesioner.pertanyaan as pertanyaan')->get();
       // dd($detekos);
      /*  $user_with_organization = User::where('id', $user_id)
    ->leftJoin('organizations', 'users.organization_id', '=', 'organizations.id')
    ->select('users.id','organizations.name')->first(); */
        return view('pages.pertanyaan_pengetahuan',['pertanyaan_pengetahuan'=>$pertanyaan_pengetahuan]);
    }
    public function insertPengetahuan()
    {
                
        return view('pages.pertanyaan_pengetahuan_insert');
    }
    public function storePengetahuan(Request $request)
    {
        
        $this->validate($request,[
            'pertanyaan' => 'required',
            'jenis_id' => 'required'
    	]);
        $jenis_id = (int) $request->get('jenis_id');
        
        kuesioner::create([
            'pertanyaan' => $request->pertanyaan,
            'jenis_id' => $jenis_id
        ]);
        //dd($hasil);

            return redirect('pertanyaan_pengetahuan')->withStatus(__('Data berhasil disimpan'));
    }

    public function editPengetahuan($id)
    {
       
        $pertanyaan_pengetahuan=kuesioner::where('kuesioner.id', $id)
        ->select('kuesioner.id as id', 'kuesioner.pertanyaan as pertanyaan')->first();
        //dd($pertanyaan_pengetahuan);
        return view('pages.pertanyaan_pengetahuan_edit',['pertanyaan_pengetahuan'=>$pertanyaan_pengetahuan]);
    }

    public function updatePengetahuan(Request $request, $id)
    {
      
       $this->validate($request,[
        'pertanyaan' => 'required'
    ]);

     $kuesioner = kuesioner::find($id);
     $kuesioner->pertanyaan = $request->pertanyaan;
     $kuesioner->save();
     return redirect('pertanyaan_pengetahuan')->withStatus(__('Data berhasil diubah'));


    }
    public function destroyPengetahuan($id)
    {
        $kuesioner=kuesioner::find($id);
        $kuesioner->delete();
        return redirect('pertanyaan_pengetahuan')->withStatus(__('Data berhasil dihapus'));
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
