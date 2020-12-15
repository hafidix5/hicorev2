@extends('layouts.app', ['activePage' => 'Riwayat Kuesioner', 'titlePage' => __('Riwayat Kuesioner')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
         <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Hasil Rekomendasi Kuesioner</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body">
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="card text-center">
                        <h5 class="card-header">Pengetahuan Pasien Hipertensi</h5>
                        <div class="card-body ">
                            <a href="#" class="btn btn-primary disabled">
                                @foreach ($skorOren as $skor)
                                {{ $skor->skorOren }}
                                @endforeach
                                </a>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Persepsi Pasien Hipertensi</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                              @foreach ($skorKuning as $skor)
                              {{ $skor->skorKuning }}
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Tingkat Kepatuhan Obat</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                              @foreach ($skorHijau as $skor)
                              {{ $skor->skorHijau }}
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                    <div class="card text-center">
                       <h5 class="card-header">Penggunaan Obat-obatan</h5>
                       <div class="card-body">
                           <a href="#" class="btn btn-primary disabled">
                            @php
                            $minumobat="";
                        @endphp
                            @foreach ($skorBiruMObat as $skor)
                             {{ $skor->skorBiruMObat }}
                             @if ($skor->skorBiruMObat=="Tidak patuh")
                             @php
                                $minumobat="Minum Obat, ";
                            @endphp
                             @endif
                             @endforeach
                             </a>
                         </div>
                     </div>
                 </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Diet</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                                @php
                                 $diet="";
                            @endphp
                                @foreach ($skorBiruMDiet as $skor)
                              {{ $skor->skorBiruMDiet }}
                              @if ($skor->skorBiruMDiet=="Tidak patuh")
                              @php
                                 $diet="yes";
                             @endphp

                             @else
                              @endif
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Aktifitas Fisik</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                                @php
                                $aktifitas_fisik="";
                                $rekomendasidmo="";
                            @endphp
                                @foreach ($skorBiruMFisik as $skor)
                              {{ $skor->skorBiruMFisik }}
                              @if ($skor->skorBiruMFisik=="Tidak patuh")
                              @php
                                 $aktifitas_fisik="Aktifitas Fisik, ";
                             @endphp

                             @else
                              @endif
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                    <div class="card text-center">
                       <h5 class="card-header">Merokok</h5>
                       <div class="card-body">
                           <a href="#" class="btn btn-primary disabled">
                            @php
                                $merokok="";
                            @endphp
                            @foreach ($skorBiruMRokok as $skor)
                             {{ $skor->skorBiruMRokok }}
                             @if ($skor->skorBiruMRokok=="Tidak patuh")
                             @php
                                $merokok="yes";
                            @endphp

                            @else
                             @endif
                             @endforeach
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="col-sm">
                    <div class="card text-center">
                       <h5 class="card-header">Manajemen Berat Badan</h5>
                       <div class="card-body">
                           <a href="#" class="btn btn-primary disabled">
                            @php
                                $manajemenbb="";
                            @endphp

                            @foreach ($skorNavyBB as $skor)
                             {{ $skor->skorNavyBB }}
                             @if ($skor->skorNavyBB=="Tidak patuh")
                             @php
                                $manajemenbb="yes";
                            @endphp

                            @else
                             @endif
                             @endforeach
                             </a>
                         </div>
                     </div>
                 </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card text-center">
                           <h5 class="card-header">Alkohol</h5>
                           <div class="card-body">
                               <a href="#" class="btn btn-primary disabled">
                                @php
                                 $alkohol="";
                             @endphp
                                @foreach ($skorNavyAlkohol as $skor)
                                 {{ $skor->skorNavyAlkohol }}
                                 @if ($skor->skorNavyAlkohol=="Tidak patuh")
                              @php
                                  $alkohol="yes";
                             @endphp

                             @else
                              @endif
                                 @endforeach
                                 </a>
                             </div>
                         </div>
                     </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Stress Pasien Hipertensi</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                                @php
                                $stress="";
                            @endphp
                                @foreach ($skorBiru as $skor)
                              {{ $skor->skorBiru }}
                              @if ($skor->skorBiru!="Ringan")
                              @php
                                 $stress="Pengendalian Stres Pada Hipertensi, ";
                             @endphp

                             @else
                              @endif
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Status Berat Badan</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                              @foreach ($imt as $skor)
                              {{ $skor->imt }}
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Tekanan Darah</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                                @php
                                $hipetensiRekomendasi="";
                                $hipetensiRekomendasi2="";
                                $hipetensiRekomendasitopik="";
                            @endphp
                                @foreach ($tekanandarah as $skor)
                              {{ $skor->tekanandarah }}
                              @if (($skor->tekanandarah=="Hipertensi Derajat 1")||($skor->tekanandarah=="Hipertensi Derajat 2"))
                              @php
                                 $hipetensiRekomendasi="yes";
                                 $hipetensiRekomendasitopik="Pengenalan Hipertensi, Cara Mengukur Tekanan Darah, ";
                             @endphp
                              @endif
                              @if ($skor->tekanandarah=="Hipertensi Derajat 3")
                              @php
                                 $hipetensiRekomendasi2="yes";
                             @endphp
                              @endif
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>

                </div>
              </div>
              <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card text-center">
                           <h5 class="card-header">Rokok</h5>
                           <div class="card-body">
                               <a href="#" class="btn btn-primary disabled">
                                 @foreach ($rokok as $skor)
                                 {{ $skor->rokok }}
                                 @endforeach
                                 </a>
                             </div>
                         </div>
                     </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Obesitas</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                            @php
                                 $obesitas2="";
                             @endphp
                              @foreach ($obesitas as $skor)
                              {{ $skor->obesitas }}
                              @if ($skor->obesitas=="Obesitas Sentral")
                              @php
                                 $obesitas2="yes";
                             @endphp

                             @else
                              @endif
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>

                </div>
              </div>
              @if (($diet="yes")||($manajemenbb="yes")||($obesitas2="yes"))
                @php
                    $rekomendasidmo="Pengaturan Diet Hipertensi dan Cara Mengukur Berat Badan dan Lingkar Tubuh, ";
                @endphp
              @endif
              @if (($merokok="yes")||($alkohol="yes"))
              @php
                  $rekomendasima="Pengenalan Bahaya Rokok dan Alkohol Pada Hipertensi, ";
              @endphp
            @endif

              <h4>Rekomendasi :</h4>
              @if(($minumobat!="")|| ($aktifitas_fisik!="")|| ($rekomendasidmo!="")|| ($rekomendasima!="")||($stress!=""||($hipetensiRekomendasitopik!="")))
              <p>
                Silahkan bapak ibuk untuk mendengarkan kembali pendidikan kesehatan dengan topik {{$aktifitas_fisik}}{{$minumobat}}{{$rekomendasidmo}} {{$rekomendasima}} {{$stress}}{{$hipetensiRekomendasitopik}}
              </p>
              @endif
              <p>
                Segera hubungi petugas kesehatan melalui link whatsapp untuk melakukan konsultasi bila ada yang tidak dipahami
              </p>
              @if($hipetensiRekomendasi=="yes")
              <p>
                Bapak/ibu tetap terus mengkonsumsi obat hipertensi secara teratur. Bila obat habis segeralah datang ke puskesmas/ dokter keluarga dan lakukan perubahan gaya hidup tidak sehat menjadi sehat
              </p>
              @endif
              @if($hipetensiRekomendasi2=="yes")
              <p>
                Segera dan jangan menunda untuk memeriksakan diri ke dokter
              </p>
              @endif



              @if(Auth::check()&& Auth::user()->role  == "2")
              <a href="{{ route('downloadHasilKuesioner',$pasien->nama) }}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
              <h4>Pertanyaan kuesioner yang belum dijawab benar</h4>
              <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nomor
                  </th>
                  <th>
                    Pertanyaan
                  </th>

                </thead>
                <tbody>
                    @foreach ($response as $response)
                    <tr>

                        <td>{{ $response->id }}</td>
                        <td>{{ $response->pertanyaan}}</td>

                    </tr>

                @endforeach

                </tbody>
              </table>
            </div>
            @endif
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
