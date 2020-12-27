@extends('layouts.app', ['activePage' => 'Beranda', 'titlePage' => __('Konfigurasi')])

@section('content')
<div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ url('notifconfig/create') }}" class="form-horizontal">
            {{csrf_field()}}
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Konfigurasi') }}</h4>
              </div>
              <div class="card-body">

                @if($data == null)
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Pesan') }}</label>
                    <div >
                      <div class="form-group">
                        <textarea class="form-control" type="text" name="pesan" placeholder="{{ __('Pesan') }}"  required ></textarea>
                    </div>
                </div>

                  <div class="row">
                      <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Durasi Notif') }}</label>
                      <div class="col-sm-2">
                        <div class="form-group">
                          <input class="form-control"  type="number" name="waktu" placeholder="{{ __('1') }}"  required />
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('API') }}</label>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input class="form-control"  type="text" name="api" placeholder="{{ __('cxaxaxwxa') }}"  required />
                      </div>
                    </div>
                  </div>
                @else
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Pesan') }}</label>
                  <div >
                    <div class="form-group">
                      <input class="form-control"  value="{{ $data->pesan }}" type="text" name="pesan" placeholder="{{ __('Pesan') }}"  required ></input>
                    </div>
                  </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Durasi Notif') }}</label>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <input class="form-control"  value="{{ $data->durasi_hari }}" type="number" name="waktu" placeholder="{{ __('1') }}"  required />

                      </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('API') }}</label>
                    <div >
                      <div class="form-group">
                        <input class="form-control" value="{{ $data->api }}" type="text" name="api" placeholder="{{ __('XXSJENSWOW') }}"  required ></input>
                      </div>
                    </div>
                </div>

                @endif
              <div class="card-footer ml-auto mr-auto" style="center">
                <button type="submit" class="btn btn-primary">{{ __('Simpan ') }}</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush
