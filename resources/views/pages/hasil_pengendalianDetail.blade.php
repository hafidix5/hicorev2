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
                        <h5 class="card-header">Penggunaan Obat-Obatan</h5>
                        <div class="card-body ">
                            <a href="#" class="btn btn-primary disabled">
                                 @php
                                 $obatr="";
                             @endphp
                             @foreach ($obat as $skor)
                              {{ $skor->obat }}
                              
                              @if ($skor->obat=="Tidak patuh")
                              @php
                                 $obatr="yes";
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
                        <h5 class="card-header">Diet</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">                              
                              @php
                                 $dietr="";
                             @endphp
                             @foreach ($diet as $skor)
                              {{ $skor->diet }}
                              
                              @if ($skor->diet=="Tidak patuh")
                              @php
                                 $dietr="yes";
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
                                 $fisikr="";
                             @endphp
                             @foreach ($fisik as $skor)
                              {{ $skor->fisik }}
                              
                              @if ($skor->fisik=="Tidak patuh")
                              @php
                                 $fisikr="yes";
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
                                 $merokokr="";
                             @endphp
                             @foreach ($merokok as $skor)
                              {{ $skor->merokok }}
                              
                              @if ($skor->merokok=="Tidak patuh")
                              @php
                                 $merokokr="yes";
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
                        <h5 class="card-header">Manajemen Berat Badan</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">                            
                              @php
                                 $beratbadanr="";
                             @endphp
                             @foreach ($beratbadan as $skor)
                              {{ $skor->beratbadan }}
                             
                              @if ($skor->beratbadan=="Tidak patuh")
                              @php
                                 $beratbadanr="yes";
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
                        <h5 class="card-header">Minum Alkohol</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                            
                              @php
                                 $minumalkoholr="";
                             @endphp
                             @foreach ($minumalkohol as $skor)
                              {{ $skor->minumalkohol }}
                              
                              @if ($skor->minumalkohol=="Tidak patuh")
                              @php
                                 $minumalkoholr="yes";
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
              @php
              $rekomendasidmo="";
              $rekomendasima="";
              @endphp
              @if (($dietr="yes")||($beratbadanr="yes"))
                @php
                    $rekomendasidmo="Pengaturan Diet Hipertensi dan Manajemen Berat Badan, ";
                @endphp
              @endif
              @if (($merokokr="yes"))
              @php
                  $rekomendasima="Pengenalan Bahaya Rokok Pada Hipertensi, ";
              @endphp
            @endif
            @if (($minumalkoholr="yes"))
              @php
                  $rekomendasima2="Pengenalan Alkohol Pada Hipertensi, ";
              @endphp
            @endif

              <h4>Rekomendasi :</h4>
              @if(($obatr!="")|| ($fisikr!="")|| ($rekomendasidmo!="")|| ($rekomendasima!="")|| ($rekomendasima2!=""))
              <p>
                Silahkan bapak ibuk untuk mendengarkan kembali pendidikan kesehatan dengan topik {{$rekomendasidmo}} {{$rekomendasima}} {{$rekomendasima2}}
              </p>
              @endif
              <p>
                Segera hubungi petugas kesehatan melalui link whatsapp untuk melakukan konsultasi bila ada yang tidak dipahami
              </p>
              



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
