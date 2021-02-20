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
                                {{$skor}}
                                </a>
                        </div>
                      </div>
                  </div>
                  </div>
                  

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
