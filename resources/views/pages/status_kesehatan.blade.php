@extends('layouts.app', ['activePage' => 'Status Kesehatan', 'titlePage' => __('Status Kesehatan')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('status_kesehatan.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')
            @if (session('alert'))
                <div class="alert alert-danger">
                    {{ session('alert') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('status_kesehatan') }}" class="btn btn-xs btn-info pull-left ml-auto">Kembali</a>
                </div>
            </div>
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Tambah Status Kesehatan') }}</h4>
              </div>
              <div class="card-body ">
              <iframe src="{{ asset('material') }}/img/silence.mp3" type="audio/mp3" allow="autoplay" id="audio" style="display: none"></iframe>
                <audio id="player" autoplay>
                  <source src="{{ asset('material') }}/img/pemeriksaan_kesh.mp3" type="audio/mp3">
              </audio>
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
                  <label class="col-sm-3 col-form-label">{{ __('Tanggal Pemeriksaan') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tgl_pemeriksaan') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('tgl_pemeriksaan') ? ' is-invalid' : '' }}"
                      name="tgl_pemeriksaan" id="input-tgl_pemeriksaan" type="date" placeholder="{{ __('tgl_pemeriksaan') }}" required="true" aria-required="true"/>
                      @if ($errors->has('tgl_pemeriksaan'))
                        <span id="tgl_pemeriksaan-error" class="error text-danger" for="input-tgl_pemeriksaan">{{ $errors->first('tgl_pemeriksaan') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Tekanan darah') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('sistol') ? ' has-danger' : '' }} ">
                        <input class="form-control{{ $errors->has('sistol') ? ' is-invalid' : '' }} " name="sistol" id="input-sistol" type="number" placeholder="{{ __('sistol') }}" required />
                        <input class="form-control{{ $errors->has('diastol') ? ' is-invalid' : '' }} " name="diastol" id="input-diastol" type="number" placeholder="{{ __('diastol') }}" required /> mmhg

                      </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Tanggal Menimbang') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('tgl_menimbang') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('tgl_menimbang') ? ' is-invalid' : '' }}"
                        name="tgl_menimbang" id="input-tgl_menimbang" type="date" placeholder="{{ __('tgl_menimbang') }}" required="true" aria-required="true"/>
                        @if ($errors->has('tgl_menimbang'))
                          <span id="tgl_menimbang-error" class="error text-danger" for="input-tgl_menimbang">{{ $errors->first('tgl_menimbang') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Berat Badan') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('berat') ? ' has-danger' : '' }} ">
                        <input class="form-control{{ $errors->has('berat') ? ' is-invalid' : '' }} " name="berat" id="input-berat" type="number" placeholder="{{ __('kg') }}" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Tinggi Badan') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('tinggi') ? ' has-danger' : '' }} ">
                        <input class="form-control{{ $errors->has('tinggi') ? ' is-invalid' : '' }} " name="tinggi" id="input-tinggi" type="number" placeholder="{{ __('cm') }}" required />
                         </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Tanggal Pengukuran') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('tgl_pengukuran') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('tgl_pengukuran') ? ' is-invalid' : '' }}"
                        name="tgl_pengukuran" id="input-tgl_pengukuran" type="date" placeholder="{{ __('tgl_pengukuran') }}" required="true" aria-required="true"/>
                        @if ($errors->has('tgl_pengukuran'))
                          <span id="tgl_pengukuran-error" class="error text-danger" for="input-tgl_pengukuran">{{ $errors->first('tgl_pengukuran') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Lingkar Perut') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('lingkar_perut') ? ' has-danger' : '' }} ">
                        <input class="form-control{{ $errors->has('lingkar_perut') ? ' is-invalid' : '' }} " name="lingkar_perut" id="input-lingkar_perut" type="number" placeholder="{{ __('cm') }}" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Apakah anda merokok ?') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('perokok_cek') ? ' has-danger' : '' }}">
                        <select class="form-control" name="perokok_cek" id="perokok_cek">

                          <option value="iya">iya</option>
                          <option value="sudah berhenti">sudah berhenti</option>
                          <option value="tidak pernah">tidak pernah</option>
                          </select>
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Jika Iya, Berapa batang rokok yang anda hisap perhari') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('batangperhari') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('batangperhari') ? ' is-invalid' : '' }}" name="batangperhari" id="input-batangperhari" type="number" placeholder="{{ __('batang') }}"  required />
                      @if ($errors->has('batangperhari'))
                        <span id="batangperhari-error" class="error text-danger" for="input-batangperhari">{{ $errors->first('batangperhari') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Jika sudah berhenti, sudah berapa lama anda berhenti merokok') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group ">
                        <input class="form-control{{ $errors->has('berhentitahun') ? ' is-invalid' : '' }} " name="berhentitahun" id="input-berhentitahun" type="number" placeholder="{{ __('tahun') }}" required />
                        <input class="form-control{{ $errors->has('berhentibulan') ? ' is-invalid' : '' }} " name="berhentibulan" id="input-berhentibulan" type="number" placeholder="{{ __('bulan') }}" required />
                        <input class="form-control{{ $errors->has('berhentihari') ? ' is-invalid' : '' }} " name="berhentihari" id="input-berhentihari" type="number" placeholder="{{ __('hari') }}" required />

                      </div>
                    </div>
                </div>

                  <div class="row">
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('pasien_id') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('pasien_id') ? ' is-invalid' : '' }}" name="pasien_id" id="pasien_id" type="text" placeholder="{{ __('') }}" value="{{ $pasien->id }}" required="true" aria-required="true" hidden/>
                        @if ($errors->has('pasien_id'))
                          <span id="pasien_id-error" class="error text-danger" for="input-pasien_id">{{ $errors->first('pasien_id') }}</span>
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
