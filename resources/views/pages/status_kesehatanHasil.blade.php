@extends('layouts.app', ['activePage' => ''])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
         <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Hasil status kesehatan</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body">
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="card text-center">
                        <h5 class="card-header">Tekanan Darah</h5>
                        <div class="card-body ">
                            <a href="#" class="btn btn-primary disabled">
                                @foreach ($tekanandarah as $tekanandarahs)
                                {{$tekanandarahs->tekanandarah}}
                                @endforeach

                                </a>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm">
                     <div class="card text-center">
                        <h5 class="card-header">Indek Masa Tubuh</h5>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary disabled">
                                @foreach ($imt as $imts)
                                {{$imts->imt}}
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
                                @foreach ($obesitas as $obesitass)
                                {{$obesitass->obesitas}}
                                @endforeach
                              </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm">
                    <div class="card text-center">
                       <h5 class="card-header">Rokok</h5>
                       <div class="card-body">
                           <a href="#" class="btn btn-primary disabled">
                            @foreach ($rokok as $rokoks)
                                {{$rokoks->rokok}}
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
</div>
@endsection
