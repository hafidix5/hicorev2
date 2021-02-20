<?php

namespace App\Exports;

use App\jawaban_kuesioner;
use App\kuesioner;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
use Session;

class HasilKuesionerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

       // return jawaban_kuesioner::where('pasien_id', '=',auth()->user()->id,'and','tanggal','=','2020-08-10')->get();
        
        //$hasil=collect($hasil);
        //$kpengetahuan=kuesioner::where('jenis_id',1)->pluck('kunci') ->toarray();
        $jenis=0;
        $jenis=Session::get('jenis');
       // dd($jenis);
        if($jenis==1)       
        {
            $hasil=DB::table('jawaban_kuesioner')
            ->select('jawaban_kuesioner.tanggal','kuesioner.id','kuesioner.pertanyaan' 
            ,'jawaban_kuesioner.jawaban as isi','kuesioner.kunci','jawaban_kuesioner.jawaban')
            ->rightjoin('kuesioner','jawaban_kuesioner.kuesioner_id','=','kuesioner.id')
            ->where('jawaban_kuesioner.pasien_id','=',Session::get('idPasien'))
            ->where('jawaban_kuesioner.tanggal','=',Session::get('sessionTanggal'))
            ->where('jawaban_kuesioner.jenis_id','=',Session::get('jenis'))
            ->orderBy('jawaban_kuesioner.tanggal','ASC')
            ->get();

            $hasil=$hasil->toarray();
        
        $kpengetahuan=DB::table('kuesioner')->select ('kunci')->where('jenis_id','=',1)->get();
        $kpengetahuan=$kpengetahuan->toarray();
      //  $temp = [];
       
        for($i=0;$i<count($kpengetahuan);$i++)
        {
            if($hasil[$i]->jawaban==$kpengetahuan[$i]->kunci)
            {
                $hasil[$i]->jawaban=1;
            }
            else
            {
                $hasil[$i]->jawaban='0';
            }   
                     
        }
        $hasil=collect($hasil);
      //  $temp=collect($temp);      
        }
        else
        {
            $hasil=DB::table('jawaban_kuesioner')
            ->select('jawaban_kuesioner.tanggal','kuesioner.id','kuesioner.pertanyaan' 
            ,'jawaban_kuesioner.jawaban')
            ->rightjoin('kuesioner','jawaban_kuesioner.kuesioner_id','=','kuesioner.id')
            ->where('jawaban_kuesioner.pasien_id','=',Session::get('idPasien'))
            ->where('jawaban_kuesioner.tanggal','=',Session::get('sessionTanggal'))
            ->where('jawaban_kuesioner.jenis_id','=',Session::get('jenis'))
            ->orderBy('jawaban_kuesioner.tanggal','ASC')
            ->get();
        }
        dd($hasil);
        return $hasil;


       // $print=array_merge($hasil,$temp);
      
      // dd($hasil);
        
       
        /* $temp = [];
        for($i = 0; $i < count($hasil);$i++){
            if($hasil[$i]-> == $kpengetahuan[$i])
            {
                $temp[$i]=1;
            }
            else
            {
                $temp[$i]=0;
            }
        } */

       

        
    }
    public function headings(): array
    {
        
        return [
            'Tanggal',
            'Nomor',
            'Pertanyaan',            
            'Jawaban',
            'Kunci',
            'Nilai',          

        ];
        
    }
}
