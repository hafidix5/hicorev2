@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('video_stress.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Tambah video stress hipertensi') }}</h4>
              </div>
              <div class="card-body ">
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
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nama/Judul') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" id="input-nama" type="text" placeholder="{{ __('') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('nama'))
                        <span id="nama-error" class="error text-danger" for="input-nama">{{ $errors->first('nama') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Link Video (setelah watch?v=)') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('video') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('video') ? ' is-invalid' : '' }}" name="video" id="input-video" type="text" placeholder="{{ __('Contoh : https://www.youtube.com/watch?v=vtt_kJ4kLFw') }}" value="" required="true" aria-required="true"/>
                      @if ($errors->has('video'))
                        <span id="video-error" class="error text-danger" for="input-video">{{ $errors->first('video') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">                 
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('jenis_id') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('jenis_id') ? ' is-invalid' : '' }}" name="jenis_id" id="input-jenis_id" type="number" placeholder="{{ __('') }}" value="3" required="true" aria-required="true" hidden/>
                      @if ($errors->has('jenis_id'))
                        <span id="jenis_id-error" class="error text-danger" for="input-jenis_id">{{ $errors->first('jenis_id') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection
