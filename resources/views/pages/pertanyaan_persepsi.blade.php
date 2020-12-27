@extends('layouts.app', ['activePage' => '' , 'titlePage' => __('')])


@section('content')
  <div class="content">
    
      <div class="row">
      <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Pertanyaan Persepsi</h4>
      </div>
        <div class="col-md-12">

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
                            Nomor
                        </th>
                      <th>
                        Pertanyaan
                      </th>

                    <th>
                        Aksi
                    </th>

                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                        @foreach ($pertanyaan_persepsi as $pertanyaan_persepsi)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pertanyaan_persepsi->pertanyaan }}</td>

                            <td>
                                <a class="nav-link" href="{{ route('pertanyaan_persepsi.edit',$pertanyaan_persepsi->id) }}">
                                    <i class="material-icons">edit</i> Edit
                                  </a>
                                   <a class="nav-link" href="{{ route('pertanyaan_persepsi.hapus',$pertanyaan_persepsi->id) }}">
                                    <i class="material-icons">remove_circle</i> Hapus
                                  </a>
                            </td>
                        </tr>
                        <php
                        $no++;
                         ?>
                    @endforeach

                    </tbody>
                  </table>

                </form>

                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('pertanyaan_persepsi.insert') }}" class="btn btn-xs btn-info pull-left ml-auto">Tambah</a>
                </div>
            </div>

  </div>
@endsection
