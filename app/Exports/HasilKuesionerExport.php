<?php

namespace App\Exports;

use App\jawaban_kuesioner;
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
        $hasil=DB::table('jawaban_kuesioner')
        ->select('kuesioner.id','kuesioner.pertanyaan','jawaban_kuesioner.jawaban'
        ,'jawaban_kuesioner.tanggal')
        ->rightjoin('kuesioner','jawaban_kuesioner.kuesioner_id','=','kuesioner.id')
        ->where('jawaban_kuesioner.pasien_id','=',Session::get('idPasien'))
        ->where('jawaban_kuesioner.tanggal','=',Session::get('sessionTanggal'))
        ->where('jawaban_kuesioner.jenis_id','=',Session::get('jenis'))
        ->orderBy('jawaban_kuesioner.tanggal','ASC')
        ->get();

        return $hasil;
    }
    public function headings(): array
    {
        return [
            'Nomor',
            'Pertanyaan',
            'jawaban',
            'tanggal',

        ];
    }
}
