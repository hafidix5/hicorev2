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
                             @foreach ($skorBiruMObat as $skor)
                             {{ $skor->skorBiruMObat }}
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
                              @foreach ($skorBiruMDiet as $skor)
                              {{ $skor->skorBiruMDiet }}
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
                              @foreach ($skorBiruMFisik as $skor)
                              {{ $skor->skorBiruMFisik }}
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
                             @foreach ($skorBiruMRokok as $skor)
                             {{ $skor->skorBiruMRokok }}
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
                             @foreach ($skorNavyBB as $skor)
                             {{ $skor->skorNavyBB }}
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
                                 @foreach ($skorNavyAlkohol as $skor)
                                 {{ $skor->skorNavyAlkohol }}
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
                              @foreach ($skorBiru as $skor)
                              {{ $skor->skorBiru }}
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Indeks Masa Tubuh</h5>
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
                              @foreach ($tekanandarah as $skor)
                              {{ $skor->tekanandarah }}
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
                              @foreach ($obesitas as $skor)
                              {{ $skor->obesitas }}
                              @endforeach
                              </a>
                          </div>
                      </div>
                  </div>

                </div>
              </div>


          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
