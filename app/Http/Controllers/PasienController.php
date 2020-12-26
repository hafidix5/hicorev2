<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\pasien;
use App\user;
use App\kuesioner;
use App\jawaban_kuesioner;
use auth;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jpasien=pasien::all()->count();
        $kuesioner=kuesioner::all()->count();
        $hasil=jawaban_kuesioner::distinct('tanggal')->count();
       // dd($totalpasien);
       $update = User::where('id', Auth::user()->id)->first();

       $update->updated_at = Carbon::now()->format('Y-m-d H:i:s');
       $update->update();


        $id=auth()->user()->id;
        $pasien=DB::table('pasien')->where('user_id',$id)->first();
        $role=auth()->user()->role;
       if($role==1)
       {
        if ($pasien) {
            return view('pages.dataDiriupdate', ['pasien'=>$pasien]);
        }
        else
        {
            return view('pages.dataDiri');
        }
       }
       else
       {
        return view('dashboard',compact('jpasien','kuesioner','hasil'));
       }

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
       DB::table('pasien')->insert([
        'id' => auth()->user()->id,
        'hp' => $request->hp,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'riwayat_hipertensi_kel' => $request->riwayat_hipertensi_kel,
            'sebutkan_siapa' => $request->sebutkan_siapa,
            'lama_hipertensi' => $request->lama_hipertensi,
            'lama_hipertensiTahun' => $request->lama_hipertensiTahun,
            'tinggal_dengan' => $request->tinggal_dengan,
            'penyakit_lain_cek' => $request->penyakit_lain_cek,
            'penyakit_lain' => $request->penyakit_lain,
            'teratur_kontrol' => $request->teratur_kontrol,
            'alasan' => $request->alasan,
            'konsumsi_obat' => $request->konsumsi_obat,
            'jenis_tempat_berobat' => $request->jenis_tempat_berobat,
            'nama_tempat_berobat' => $request->nama_tempat_berobat,
        'user_id' => auth()->user()->id
       ]);

        return back()->withStatus(__('Data diri berhasil disimpan'));

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
    public function update(Request $request)
    {
        DB::table('pasien')->where('id',$request->id)->update([
            'hp' => $request->hp,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'riwayat_hipertensi_kel' => $request->riwayat_hipertensi_kel,
            'sebutkan_siapa' => $request->sebutkan_siapa,
            'lama_hipertensi' => $request->lama_hipertensi,
            'lama_hipertensiTahun' => $request->lama_hipertensiTahun,
            'tinggal_dengan' => $request->tinggal_dengan,
            'penyakit_lain_cek' => $request->penyakit_lain_cek,
            'penyakit_lain' => $request->penyakit_lain,
            'teratur_kontrol' => $request->teratur_kontrol,
            'alasan' => $request->alasan,
            'konsumsi_obat' => $request->konsumsi_obat,
            'jenis_tempat_berobat' => $request->jenis_tempat_berobat,
            'nama_tempat_berobat' => $request->nama_tempat_berobat,
           ]);
           return back()->withStatus(__('Data diri berhasil diubah '));
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
