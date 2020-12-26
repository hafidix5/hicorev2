@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Persepsi  Hipertensi</h4>
      </div>

      <div class="card-body">        
      @foreach ($response as $response)
      
      <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$response->video}}?rel=0" allowfullscreen></iframe>
      </div>

      <br><br>
      @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
