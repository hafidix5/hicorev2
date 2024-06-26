@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('pertanyaan_pengetahuan.update',$pertanyaan_pengetahuan->id ) }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('PUT')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Ubah Pertanyaan') }}</h4>
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
                  <label class="col-sm-2 col-form-label">{{ __('Pertanyaan') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('pertanyaan') ? ' has-danger' : '' }}">
                    <input class="form-control{{ $errors->has('pertanyaan') ? ' is-invalid' : '' }}" name="pertanyaan" id="input-pertanyaan" type="text" placeholder="{{ __('pertanyaan') }}" value="{{$pertanyaan_pengetahuan->pertanyaan}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan'))
                        <span id="pertanyaan-error" class="error text-danger" for="input-pertanyaan">{{ $errors->first('pertanyaan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Kunci') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('kunci') ? ' has-danger' : '' }}">
                        <select class="form-control" class="form-control" name="kunci" id="kunci">
                        <option value="1">Benar</option>                            
                           <option value="0">Salah</option>                           
                          </select>
                      
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
