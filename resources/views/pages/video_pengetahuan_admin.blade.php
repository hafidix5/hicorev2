@extends('layouts.app', ['activePage' => '' , 'titlePage' => __('')])


@section('content')
  <div class="content">
    
      <div class="row">
      <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Video Pengetahuan Hipertensi</h4>
      </div>
        <div class="col-md-12">

            <div class="card-body">
               
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                        <th>
                            Nomor
                        </th>
                      <th>
                        Video
                      </th>
                      <th>
                        Nama
                      </th>
                    <th>
                        Aksi
                    </th>

                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                        @foreach ($response as $response)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$response->video}}?rel=0" allowfullscreen></iframe>
                            </div>
                            </td>
                            <td>{{ $response->nama }}</td>
                            <td>
                            
                                  <a class="nav-link" href="{{ route('video_pengetahuan.edit',$response->id)  }}">
                                    <i class="material-icons">verified_user </i> Edit
                                  </a>
                                 
                                   <a class="nav-link" href="{{ route('video_pengetahuan.destroy',$response->id) }}">
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
                    <a href="{{ url('video_pengetahuan.insert') }}" class="btn btn-xs btn-info pull-left ml-auto">Tambah</a>
                </div>
            </div>

  </div>
@endsection

