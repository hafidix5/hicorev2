<?php

namespace App\Http\Controllers;

use App\jawaban_kuesioner;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\kuesioner;
use App\pasien;
use Dotenv\Result\Result;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class jawaban_kuesionerController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=auth()->user()->id;
        $pasien=DB::table('pasien')->where('user_id',$id)->first();
        $date=Carbon::now();
        $date=$date->toDateString();
        $i=0;
        $data=$request->except(['_token', '_method']);
        $key=array_keys($data);


        $cek = jawaban_kuesioner::where('tanggal',$date)
        ->where('pasien_id',$pasien->id)->where('jenis_id',2)->first();

       // dd($total2);
        if($cek)
        {
          //  return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
          // return redirect()->back()->with('error','Kuesioner hanya bisa diisi Satu kali per hari');
           return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
        }
        else
        {
        if(count($data)<3) {
            return back()->withStatus(__('jawaban Kuesioner harus diisi semua'));
        } else {
            foreach($data as $data){
                //dd(array_keys($data)->value());

                DB::table('jawaban_kuesioner')->insert([
                  'tanggal'=>$date,
                  'kuesioner_id'=>$key[$i],
                  'pasien_id'=>$pasien->id,
                  'jenis_id'=>2,
                  'jawaban'=>$data
                ]);
                $i++;
            }
            return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
        }
        }


        //dd(count($data));
       // return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
    }
    public function storepengetahuan(Request $request)
    {
        $id=auth()->user()->id;
        $pasien=DB::table('pasien')->where('user_id',$id)->first();
        $date=Carbon::now();
        $date=$date->toDateString();
        $i=0;
        $data=$request->except(['_token', '_method']);
        $key=array_keys($data);


        $cek = jawaban_kuesioner::where('tanggal',$date)
        ->where('pasien_id',$pasien->id)->where('jenis_id',1)->first();

       // dd($total2);
        if($cek)
        {
          //  return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
          // return redirect()->back()->with('error','Kuesioner hanya bisa diisi Satu kali per hari');
           return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
        }
        else
        {
        if(count($data)<3) {
            return back()->withStatus(__('jawaban Kuesioner harus diisi semua'));
        } else {
            foreach($data as $data){
                //dd(array_keys($data)->value());

                DB::table('jawaban_kuesioner')->insert([
                  'tanggal'=>$date,
                  'kuesioner_id'=>$key[$i],
                  'pasien_id'=>$pasien->id,
                  'jenis_id'=>1,
                  'jawaban'=>$data
                ]);
                $i++;
            }
            return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
        }
        }


        //dd(count($data));
       // return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
    }
    public function storestress(Request $request)
    {
        $id=auth()->user()->id;
        $pasien=DB::table('pasien')->where('user_id',$id)->first();
        $date=Carbon::now();
        $date=$date->toDateString();
        $i=0;
        $data=$request->except(['_token', '_method']);
        $key=array_keys($data);


        $cek = jawaban_kuesioner::where('tanggal',$date)
        ->where('pasien_id',$pasien->id)->where('jenis_id',3)->first();

       // dd($total2);
        if($cek)
        {
          //  return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
          // return redirect()->back()->with('error','Kuesioner hanya bisa diisi Satu kali per hari');
           return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
        }
        else
        {
        if(count($data)<3) {
            return back()->withStatus(__('jawaban Kuesioner harus diisi semua'));
        } else {
            foreach($data as $data){
                //dd(array_keys($data)->value());

                DB::table('jawaban_kuesioner')->insert([
                  'tanggal'=>$date,
                  'kuesioner_id'=>$key[$i],
                  'pasien_id'=>$pasien->id,
                  'jenis_id'=>3,
                  'jawaban'=>$data
                ]);
                $i++;
            }
            return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
        }
        }


        //dd(count($data));
       // return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
    }

    public function storepengendalian(Request $request)
    {
        $id=auth()->user()->id;
        $pasien=DB::table('pasien')->where('user_id',$id)->first();
        $date=Carbon::now();
        $date=$date->toDateString();
        $i=0;
        $data=$request->except(['_token', '_method']);
        $key=array_keys($data);


        $cek = jawaban_kuesioner::where('tanggal',$date)
        ->where('pasien_id',$pasien->id)->where('jenis_id',4)->first();

       // dd($total2);
        if($cek)
        {
          //  return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
          // return redirect()->back()->with('error','Kuesioner hanya bisa diisi Satu kali per hari');
           return back()->withStatus(__('Kuesioner hanya bisa diisi Satu kali per hari'));
        }
        else
        {
        if(count($data)<3) {
            return back()->withStatus(__('jawaban Kuesioner harus diisi semua'));
        } else {
            foreach($data as $data){
                //dd(array_keys($data)->value());

                DB::table('jawaban_kuesioner')->insert([
                  'tanggal'=>$date,
                  'kuesioner_id'=>$key[$i],
                  'pasien_id'=>$pasien->id,
                  'jenis_id'=>4,
                  'jawaban'=>$data
                ]);
                $i++;
            }
            return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
        }
        }


        //dd(count($data));
       // return back()->withStatus(__('jawaban Kuesioner berhasil disimpan'));
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
    public function riwayat()
    {
        $response = DB::select('
        SELECT jk.tanggal,p.id,p.nama,p.hp,SUM(jk.jawaban) AS skor FROM pasien AS p JOIN jawaban_kuesioner AS jk ON p.id=jk.pasien_id JOIN kuesioner AS k ON
jk.kuesioner_id=k.id WHERE jk.jawaban=k.kunci AND jk.jenis_id=1 GROUP BY jk.tanggal,p.id,p.nama,p.hp ORDER BY jk.tanggal desc');
      // dd($response);

        return view('pages.table_list', compact('response'));
        // dd($response);

    }
    public function riwayatpribadi()
    {
        $response = DB::select('
        SELECT jk.tanggal,p.id,p.nama,p.hp,SUM(jk.jawaban) AS skor FROM pasien AS p JOIN jawaban_kuesioner AS jk ON p.id=jk.pasien_id JOIN kuesioner AS k ON
jk.kuesioner_id=k.id WHERE jk.jawaban=k.kunci AND jk.jenis_id=1 and p.id='.auth()->user()->id.' GROUP BY jk.tanggal,p.id,p.nama,p.hp ORDER BY jk.tanggal desc');
      // dd($response);
       

        return view('pages.hasil_pengetahuan', compact('response'));
        // dd($response);

    }
    public function riwayatpribadi_persepsi()
    {
        $response = DB::select('
        SELECT jk.tanggal,p.id,p.nama,p.hp,SUM(jk.jawaban) AS skor FROM pasien AS p JOIN jawaban_kuesioner AS jk ON p.id=jk.pasien_id JOIN kuesioner AS k ON
jk.kuesioner_id=k.id WHERE jk.jenis_id=2 and p.id='.auth()->user()->id.' GROUP BY jk.tanggal,p.id,p.nama,p.hp ORDER BY jk.tanggal desc');
      // dd($response);
       

        return view('pages.hasil_persepsi', compact('response'));
        // dd($response);

    }
    public function riwayatpribadi_stress()
    {
        $response = DB::select('
        SELECT jk.tanggal,p.id,p.nama,p.hp,SUM(jk.jawaban) AS skor FROM pasien AS p JOIN jawaban_kuesioner AS jk ON p.id=jk.pasien_id JOIN kuesioner AS k ON
jk.kuesioner_id=k.id WHERE jk.jenis_id=3 and p.id='.auth()->user()->id.' GROUP BY jk.tanggal,p.id,p.nama,p.hp ORDER BY jk.tanggal desc');
      // dd($response);
       

        return view('pages.hasil_stress', compact('response'));
        // dd($response);

    }
    public function riwayatpribadi_pengendalian()
    {
        $alkohol="alkohol";
        $response = DB::select('
        SELECT jk.tanggal,p.id,p.nama,p.hp,SUM(jk.jawaban) AS skor FROM pasien AS p JOIN jawaban_kuesioner AS jk ON p.id=jk.pasien_id JOIN kuesioner AS k ON
jk.kuesioner_id=k.id WHERE k.sub_jenis!="'.$alkohol.'" and jk.jenis_id=4 and p.id='.auth()->user()->id.' GROUP BY jk.tanggal,p.id,p.nama,p.hp ORDER BY jk.tanggal desc');
      // dd($response);
       

        return view('pages.hasil_pengendalian', compact('response'));
        // dd($response);

    }


    /* public function skor()
    {
        $date=Carbon::now();
        $date=$date->toDateString();

        $kunci = kuesioner::pluck('kunci');

        $result=DB::table('jawaban_kuesioner as jk')
        ->rightJoin('kuesioner as k','jk.kuesioner_id','=','k.id')
        ->select(DB::raw('sum(jk.jawaban) as skor'))
        ->whereIn('jk.jawaban',$kunci)
        ->groupBy('jk.tanggal')
        ->where('jk.pasien_id',auth()->user()->id)
        ->get();
        $result=$result->$skor;
        return $result;

    } */



    public function detailPasien($tanggal,$id)
    {
        $response=DB::select('
        SELECT k.id as id,k.pertanyaan as pertanyaan from jawaban_kuesioner AS jk join kuesioner AS k ON
jk.kuesioner_id=k.id WHERE jk.jawaban!=k.kunci AND jk.pasien_id='.$id.' and jk.tanggal="'.$tanggal.'"
ORDER BY k.id asc
        ');


        $pasien = pasien::find($id)->first();

        $pengetahuan=DB::select('
        SELECT (case when SUM(jk.jawaban)<=17 then "Kurang"
                     when SUM(jk.jawaban)<=22 then "Baik"
            END)
            AS pengetahuan FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
AND jk.jawaban=k.kunci AND k.id>=1 AND k.id<=22 limit 1
        ');
        $skorKuning=DB::select('
        SELECT (case when SUM(jk.jawaban)<=9 then "Kurang"
                     when SUM(jk.jawaban)<=19 then "Cukup"
                     when SUM(jk.jawaban)<=28 then "Baik"
			END)
        AS skorKuning FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
AND jk.jawaban=k.kunci AND k.id>22 AND k.id<=50 limit 1
        ');

        $skorHijau=DB::select('
        SELECT (case when SUM(jk.jawaban)<8 then "Kurang"
                     when SUM(jk.jawaban)<=12 then "Cukup"
                     when SUM(jk.jawaban)<=15 then "Baik"
			END) AS skorHijau FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
AND jk.jawaban=k.kunci AND k.id>=51 AND k.id<=60 limit 1
        ');
        $skorBiruMObat=DB::select('
        SELECT (case when SUM(jk.jawaban)<21 then "Tidak patuh"
                     when SUM(jk.jawaban)>=21 then "Patuh"
			END) AS skorBiruMObat FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=61 AND k.id<=63 limit 1
        ');
        $skorBiruMDiet=DB::select('
        SELECT (case when SUM(jk.jawaban)<6 then "Tidak patuh"
                     when SUM(jk.jawaban)>=6 then "Patuh"
			END) AS skorBiruMDiet FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=64 AND k.id<=75 limit 1
        ');
        $skorBiruMFisik=DB::select('
        SELECT (case when SUM(jk.jawaban)<8 then "Tidak patuh"
                     when SUM(jk.jawaban)>=8 then "Patuh"
			END) AS skorBiruMFisik FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=76 AND k.id<=77 limit 1
        ');
        $skorBiruMRokok=DB::select('
        SELECT (case when SUM(jk.jawaban)=0 then "Patuh"
                     when SUM(jk.jawaban)>0 then "Tidak patuh"
			END) AS skorBiruMRokok FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=78 AND k.id<=79 limit 1
        ');
        $skorNavyBB=DB::select('
        SELECT (case when SUM(jk.jawaban)<40 then "Tidak Patuh"
                     when SUM(jk.jawaban)>=40 then "Patuh"
			END) AS skorNavyBB FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=80 AND k.id<=89 limit 1
        ');
        $skorNavyAlkohol=DB::select('
        SELECT (case when SUM(jk.jawaban)=0 then "Patuh"
                     when SUM(jk.jawaban)>0 then "Tidak patuh"
			END)  AS skorNavyAlkohol FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=90 AND k.id<=92 limit 1
        ');
        $skorBiru=DB::select('
        SELECT (case when SUM(jk.jawaban)<=14 then "Ringan"
                     when SUM(jk.jawaban)<=26 then "Sedang"
                     when SUM(jk.jawaban)>26 then "Berat"
			END)  AS skorBiru FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=94 AND k.id<=107 limit 1
        ');
        $imt=DB::select('
        SELECT (case when  berat/((tinggi*0.01)*tinggi*0.01)<17 then "Kurus tingkat berat"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=18.4 then "Kurus tingkat ringan"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=25 then "Normal"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=27 then "Kegemukan"
        when  berat/((tinggi*0.01)*tinggi*0.01)>27 then "Gemuk"
        END)  AS imt FROM pasien WHERE id='.$id.'
        ');

        $tekanandarah=DB::select('
        SELECT (case when  pemeriksaan_satu>120 AND pemeriksaan_dua<80 then "Optimal"
            when  pemeriksaan_satu<129 AND pemeriksaan_dua<=84 then "Normal"
            when  pemeriksaan_satu<=139 AND pemeriksaan_dua<=89 then "Normal Tinggi"
            when  pemeriksaan_satu<=159 AND pemeriksaan_dua<=99 then "Hipertensi Derajat 1"
            when  pemeriksaan_satu<=179 AND pemeriksaan_dua<=109 then "Hipertensi Derajat 2"
            when  pemeriksaan_satu>=180 AND pemeriksaan_dua>=110 then "Hipertensi Derajat 3"
            when  pemeriksaan_satu>=140 AND pemeriksaan_dua<90 then "Hipertensi Sistolik Terisolasi"
			END)  AS tekanandarah FROM pasien WHERE id='.$id.'
        ');

        $rokok=DB::select('
        SELECT (case when  lama_merokok*rokokperhari<=199 then "Perokok ringan"
        when  lama_merokok*rokokperhari<=599 then "Perokok sedang"
        when  lama_merokok*rokokperhari>=600 then "Perokok berat"
        END)  AS rokok FROM pasien WHERE id='.$id.'
        ');

        $obesitas=DB::select('
        SELECT (case when  lingkar_perut>90 AND jk="laki-laki" then "Obesitas Sentral"
            when  lingkar_perut>80 AND jk="perempuan" then "Obesitas Sentral"
            when lingkar_perut<=90 AND jk="laki-laki" then "Normal"
            when lingkar_perut<=80 AND jk="perempuan" then "Normal"
			END)  AS obesitas FROM pasien WHERE id='.$id.'
        ');

        Session()->put('sessionTanggal', $tanggal);

        return view('pages.riwayatKuesionerDetailPasien',
        compact('pasien','response','pengetahuan','skorKuning','skorHijau','skorBiruMObat','skorBiruMDiet','skorBiruMFisik','skorBiruMRokok',
        'skorNavyBB','skorNavyAlkohol','skorBiru','imt','tekanandarah','rokok','obesitas'));
      //dd($skorMerahx);
    }

    public function detail($tanggal,$id)
    {
        $response=DB::select('
        SELECT k.id as id,k.pertanyaan as pertanyaan from jawaban_kuesioner AS jk join kuesioner AS k ON
jk.kuesioner_id=k.id WHERE jk.jenis_id=1 AND jk.pasien_id='.$id.' and jk.tanggal="'.$tanggal.'"
ORDER BY k.id asc
        ');


        $pasien = pasien::find($id)->first();

        $pengetahuan=DB::select('
        SELECT (case when SUM(jk.jawaban)<=17 then "Kurang"
                     when SUM(jk.jawaban)<=22 then "Baik"
            END)
            AS pengetahuan FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" AND jk.jenis_id=1
AND jk.jawaban=k.kunci limit 1
        ');
        /* $skorKuning=DB::select('
        SELECT (case when SUM(jk.jawaban)<=9 then "Kurang"
                     when SUM(jk.jawaban)<=19 then "Cukup"
                     when SUM(jk.jawaban)<=28 then "Baik"
			END)
        AS skorKuning FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
AND jk.jawaban=k.kunci AND k.id>22 AND k.id<=50 limit 1
        ');

        $skorHijau=DB::select('
        SELECT (case when SUM(jk.jawaban)<8 then "Kurang"
                     when SUM(jk.jawaban)<=12 then "Cukup"
                     when SUM(jk.jawaban)<=15 then "Baik"
			END) AS skorHijau FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
AND jk.jawaban=k.kunci AND k.id>=51 AND k.id<=60 limit 1
        ');
        $skorBiruMObat=DB::select('
        SELECT (case when SUM(jk.jawaban)<21 then "Tidak patuh"
                     when SUM(jk.jawaban)>=21 then "Patuh"
			END) AS skorBiruMObat FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=61 AND k.id<=63 limit 1
        ');
        $skorBiruMDiet=DB::select('
        SELECT (case when SUM(jk.jawaban)<6 then "Tidak patuh"
                     when SUM(jk.jawaban)>=6 then "Patuh"
			END) AS skorBiruMDiet FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=64 AND k.id<=75 limit 1
        ');
        $skorBiruMFisik=DB::select('
        SELECT (case when SUM(jk.jawaban)<8 then "Tidak patuh"
                     when SUM(jk.jawaban)>=8 then "Patuh"
			END) AS skorBiruMFisik FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=76 AND k.id<=77 limit 1
        ');
        $skorBiruMRokok=DB::select('
        SELECT (case when SUM(jk.jawaban)=0 then "Patuh"
                     when SUM(jk.jawaban)>0 then "Tidak patuh"
			END) AS skorBiruMRokok FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=78 AND k.id<=79 limit 1
        ');
        $skorNavyBB=DB::select('
        SELECT (case when SUM(jk.jawaban)<40 then "Tidak Patuh"
                     when SUM(jk.jawaban)>=40 then "Patuh"
			END) AS skorNavyBB FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=80 AND k.id<=89 limit 1
        ');
        $skorNavyAlkohol=DB::select('
        SELECT (case when SUM(jk.jawaban)=0 then "Patuh"
                     when SUM(jk.jawaban)>0 then "Tidak patuh"
			END)  AS skorNavyAlkohol FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=90 AND k.id<=92 limit 1
        ');
        $skorBiru=DB::select('
        SELECT (case when SUM(jk.jawaban)<=14 then "Ringan"
                     when SUM(jk.jawaban)<=26 then "Sedang"
                     when SUM(jk.jawaban)>26 then "Berat"
			END)  AS skorBiru FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'"
 AND k.id>=94 AND k.id<=107 limit 1
        ');
        $imt=DB::select('
        SELECT (case when  berat/((tinggi*0.01)*tinggi*0.01)<17 then "Kurus tingkat berat"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=18.4 then "Kurus tingkat ringan"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=25 then "Normal"
        when  berat/((tinggi*0.01)*tinggi*0.01)<=27 then "Kegemukan"
        when  berat/((tinggi*0.01)*tinggi*0.01)>27 then "Gemuk"
        END)  AS imt FROM pasien WHERE id='.$id.'
        ');

        $tekanandarah=DB::select('
        SELECT (case when  pemeriksaan_satu>120 AND pemeriksaan_dua<80 then "Optimal"
            when  pemeriksaan_satu<129 AND pemeriksaan_dua<=84 then "Normal"
            when  pemeriksaan_satu<=139 AND pemeriksaan_dua<=89 then "Normal Tinggi"
            when  pemeriksaan_satu<=159 AND pemeriksaan_dua<=99 then "Hipertensi Derajat 1"
            when  pemeriksaan_satu<=179 AND pemeriksaan_dua<=109 then "Hipertensi Derajat 2"
            when  pemeriksaan_satu>=180 AND pemeriksaan_dua>=110 then "Hipertensi Derajat 3"
            when  pemeriksaan_satu>=140 AND pemeriksaan_dua<90 then "Hipertensi Sistolik Terisolasi"
			END)  AS tekanandarah FROM pasien WHERE id='.$id.'
        ');

        $rokok=DB::select('
        SELECT (case when  lama_merokok*rokokperhari<=199 then "Perokok ringan"
        when  lama_merokok*rokokperhari<=599 then "Perokok sedang"
        when  lama_merokok*rokokperhari>=600 then "Perokok berat"
        END)  AS rokok FROM pasien WHERE id='.$id.'
        ');

        $obesitas=DB::select('
        SELECT (case when  lingkar_perut>90 AND jk="laki-laki" then "Obesitas Sentral"
            when  lingkar_perut>80 AND jk="perempuan" then "Obesitas Sentral"
            when lingkar_perut<90 AND jk="laki-laki" then "Normal"
            when lingkar_perut<80 AND jk="perempuan" then "Normal"
			END)  AS obesitas FROM pasien WHERE id='.$id.'
        '); */

        Session()->put('sessionTanggal', $tanggal);
        Session()->put('idPasien', $id);
        Session()->put('jenis', 1);

        return view('pages.hasil_pengetahuanDetail',
        compact('pasien','response','pengetahuan'));
      //dd($skorMerahx);
    }
    public function detail_persepsi($tanggal,$id)
    {
        $response=DB::select('
        SELECT k.id as id,k.pertanyaan as pertanyaan from jawaban_kuesioner AS jk join kuesioner AS k ON
jk.kuesioner_id=k.id WHEREjk.jenis_id=2 AND jk.pasien_id='.$id.' and jk.tanggal="'.$tanggal.'"
ORDER BY k.id asc
        ');


        $pasien = pasien::find($id)->first();

        $persepsi=DB::select('
        SELECT (case when SUM(jk.jawaban)<=9 then "Kurang"
                     when SUM(jk.jawaban)<=19 then "Cukup"
                     when SUM(jk.jawaban)<=28 then "Baik"
			END)
        AS persepsi FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=2 limit 1
        ');
        Session()->put('sessionTanggal', $tanggal);
        Session()->put('idPasien', $id);
        Session()->put('jenis', 2);

        return view('pages.hasil_persepsiDetail',
        compact('pasien','response','persepsi'));
    }
    public function detail_stress($tanggal,$id)
    {
        $response=DB::select('
        SELECT k.id as id,k.pertanyaan as pertanyaan from jawaban_kuesioner AS jk join kuesioner AS k ON
jk.kuesioner_id=k.id WHERE  jk.jenis_id=3 AND jk.pasien_id='.$id.' and jk.tanggal="'.$tanggal.'"
ORDER BY k.id asc
        ');


        $pasien = pasien::find($id)->first();

        $stress=DB::select('
        SELECT (case when SUM(jk.jawaban)<=14 then "Ringan"
        when SUM(jk.jawaban)<=26 then "Sedang"
        when SUM(jk.jawaban)>26 then "Berat"
			END)
        AS stress FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=3 limit 1
        ');
        Session()->put('sessionTanggal', $tanggal);
        Session()->put('idPasien', $id);
        Session()->put('jenis', 3);

        return view('pages.hasil_stressDetail',
        compact('pasien','response','stress'));
    }
    public function detail_pengendalian($tanggal,$id)
    {
        $response=DB::select('
        SELECT k.id as id,k.pertanyaan as pertanyaan from jawaban_kuesioner AS jk join kuesioner AS k ON
jk.kuesioner_id=k.id WHERE jk.jenis_id=4 AND jk.pasien_id='.$id.' and jk.tanggal="'.$tanggal.'"
ORDER BY k.id asc
        ');


        $pasien = pasien::find($id)->first();
        $obatjenis="obat-obatan";
        $obat=DB::select('
        SELECT (case when SUM(jk.jawaban)<21 then "Tidak patuh"
                     when SUM(jk.jawaban)>=21 then "Patuh"
			END) AS obat FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=4 and k.sub_jenis=
 "'.$obatjenis.'" 
        ');
        $dietjenis="diet";
        $diet=DB::select('
        SELECT (case when SUM(jk.jawaban)<84 then "Tidak patuh"
                     when SUM(jk.jawaban)>=84 then "Patuh"
			END) AS diet FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=4 and k.sub_jenis=
 "'.$dietjenis.'"  
        ');
        
        $fisikjenis="aktivitas_fisik";
        $fisik=DB::select('
        SELECT (case when SUM(jk.jawaban)<14 then "Tidak patuh"
                     when SUM(jk.jawaban)>=14 then "Patuh"
			END) AS fisik FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=4 and k.sub_jenis=
 "'.$fisikjenis.'"
        ');
        
        $rokokjenis="merokok";
        $merokok=DB::select('
        SELECT (case when SUM(jk.jawaban)=0 then "Patuh"
                     when SUM(jk.jawaban)>0 then "Tidak patuh"
			END) AS merokok FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=4 and k.sub_jenis=
 "'.$rokokjenis.'"
        ');
        
        $bbjenis="manajemen_bb";
        $beratbadan=DB::select('
        SELECT (case when SUM(jk.jawaban)<40 then "Tidak Patuh"
                     when SUM(jk.jawaban)>=40 then "Patuh"
			END) AS beratbadan FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=4 and k.sub_jenis=
 "'.$bbjenis.'"
        ');
        
        $minumalkoholjenis="minum_alkohol";
        $minumalkohol2jenis="alkohol";
        $minumalkohol=DB::select('
        SELECT (case when SUM(jk.jawaban)=0 then "Patuh"
        when SUM(jk.jawaban)>0 then "Tidak patuh"
END)  AS minumalkohol FROM jawaban_kuesioner AS jk JOIN kuesioner AS k ON jk.kuesioner_id=k.id
 WHERE jk.pasien_id='.$id.' AND jk.tanggal="'.$tanggal.'" and jk.jenis_id=4 and k.sub_jenis=
 "'.$minumalkoholjenis.'" OR k.sub_jenis="'.$minumalkohol2jenis.'"
        ');        
       // dd($minumalkohol);
        Session()->put('sessionTanggal', $tanggal);
        Session()->put('idPasien', $id);
        Session()->put('jenis', 4);

        return view('pages.hasil_pengendalianDetail',
        compact('pasien','response','obat','diet','fisik','merokok','beratbadan','minumalkohol'));
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
