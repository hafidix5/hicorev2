@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Penyuluhan</h4>
        <p class="card-category">Pendidikan Kesehatan</p>
      </div>

      <div class="card-body">
        @if (session('status'))
        <div class="row">
          <div class="col-sm-12">
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span><h4>{{ session('status') }}<h4>

            </span>
            </div>
          </div>
        </div>
      @endif
      @foreach ($response as $response)
      <h4>{{$response->id}}. {{$response->nama}}</h4>
      <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$response->file}}?rel=0" allowfullscreen></iframe>
      </div>

      <br><br>
      @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
