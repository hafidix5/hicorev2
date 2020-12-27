@extends('layouts.app', ['activePage' => '', 'titlePage' => __('')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('pertanyaan_pengendalian.update',$pertanyaan_pengendalian->id ) }}" autocomplete="off" class="form-horizontal">
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
                    <input class="form-control{{ $errors->has('pertanyaan') ? ' is-invalid' : '' }}" name="pertanyaan" id="input-pertanyaan" type="text" placeholder="{{ __('pertanyaan') }}" value="{{$pertanyaan_pengendalian->pertanyaan}}" required="true" aria-required="true"/>
                      @if ($errors->has('pertanyaan'))
                        <span id="pertanyaan-error" class="error text-danger" for="input-pertanyaan">{{ $errors->first('pertanyaan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Jenis Pengendalian') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('jenis_pengendalian') ? ' has-danger' : '' }}">
                        <select class="form-control" class="form-control" name="jenis_pengendalian" id="jenis_pengendalian">
                          <option value="obat-obatan">Obat-obatan</option>                            
                           <option value="diet">Diet</option>
                           <option value="aktivitas_fisik">Aktivitas Fisik</option>
                           <option value="merokok">Merokok</option>
                           <option value="manajemen_bb">Manajemen Berat Badan</option>
                           <option value="minum_alkohol">Minum Alkohol</option>
                           <option value="alkohol">Alkohol</option>
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
