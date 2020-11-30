@extends('layouts.app', ['activePage' => 'Status Kesehatan', 'titlePage' => __('Status Kesehatan')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('status_kesehatan.create') }}" class="btn btn-xs btn-info pull-left ml-auto">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                <div class="row">
                  <div class="col-sm-12">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                      <span>{{ session('status') }}</span>
                    </div>
                  </div>
                </div>
              @endif
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                      <th>
                        Tanggal Pengisian
                      </th>
                                         <th>
                        Aksi
                    </th>
                    </thead>
                    <tbody>
                        @foreach ($hasil_kesehatan as $hasil_kesehatan)
                        <tr >
                            <td>{{ $hasil_kesehatan->tgl_mengisi }}</td>
                            <th>
                               <a class="nav-link" href="{{ route('status_kesehatan.show',$hasil_kesehatan->id) }}">
                                    <i class="material-icons"> </i> Lihat
                                  </a>
                                  <a class="nav-link" href="{{ route('status_kesehatan.hasil',[$hasil_kesehatan->tgl_mengisi,$hasil_kesehatan->pasien_id,]) }}">
                                    <i class="material-icons"> </i> Hasil
                                  </a>

                            </th>
                        </tr>
                    @endforeach

                    </tbody>
                  </table>

                </form>

                </div>
              </div>
            </div>


  </div>
@endsection
