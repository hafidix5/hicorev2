@extends('layouts.app', ['activePage' => 'Data Diri', 'titlePage' => __('Data Diri')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('pasien.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Data Pasien') }}</h4>
              </div>
              <div class="card-body ">
                <iframe src="{{ asset('material') }}/img/silence.mp3" type="audio/mp3" allow="autoplay" id="audio" style="display: none"></iframe>
                <audio id="player" autoplay loop>
                  <source src="{{ asset('material') }}/img/hicore.mp3" type="audio/mp3">
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
                <input type="hidden" name="id" value="{{ $pasien->id }}">
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Nama Lengkap') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" id="input-nama" type="text" placeholder="{{ __('Nama') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true" readonly/>
                      @if ($errors->has('nama'))
                        <span id="nama-error" class="error text-danger" for="input-nama">{{ $errors->first('nama') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('HP') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('hp') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('hp') ? ' is-invalid' : '' }}" name="hp" id="input-hp" type="phone" placeholder="{{ __('Nomor HP') }}" value="{{ $pasien->hp ?? '' }}" required readonly/>
                      @if ($errors->has('hp'))
                        <span id="hp-error" class="error text-danger" for="input-hp">{{ $errors->first('hp') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Tanggal lahir') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('tgl_lahir') ? ' is-invalid' : '' }}" name="tgl_lahir" id="input-tgl_lahir" type="date" placeholder="{{ __('') }}" value="{{ $pasien->tgl_lahir ?? ''  }}" required />
                        @if ($errors->has('tgl_lahir'))
                          <span id="tgl_lahir-error" class="error text-danger" for="input-tgl_lahir">{{ $errors->first('tgl_lahir') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Jenis kelamin') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('jk') ? ' has-danger' : '' }}">
                        <select class="form-control" name="jk" id="jk">
                          @if($pasien->jk)
                          <option value="{{ $pasien->jk ?? ''  }}" selected>{{ $pasien->jk ?? ''  }}</option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                          @endif
                        </select>
                        @if ($errors->has('jk'))
                          <span id="jk-error" class="error text-danger" for="input-jk">{{ $errors->first('jk') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Alamat tinggal') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('alamat') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" id="input-alamat" type="text" placeholder="{{ __('alamat tempat tinggal') }}" value="{{ $pasien->alamat ?? ''  }}" required />
                        @if ($errors->has('alamat'))
                          <span id="alamat-error" class="error text-danger" for="input-alamat">{{ $errors->first('alamat') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Pekerjaan') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('pekerjaan') ? ' has-danger' : '' }}">
                        <select class="form-control" name="pekerjaan" id="pekerjaan">
                          @if($pasien->pekerjaan)
                          <option value="{{ $pasien->pekerjaan ?? ''  }}" selected>{{ $pasien->pekerjaan ?? ''  }}</option>
                          @endif
                          <option value="Ibu rumah tangga">Ibu rumah tangga</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="PNS">PNS</option>
                          <option value="Petani/Buruh">Petani/Buruh</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Tidak bekerja">Tidak bekerja</option>
                        </select>
                        @if ($errors->has('pekerjaan'))
                          <span id="pekerjaan-error" class="error text-danger" for="input-pekerjaan">{{ $errors->first('pekerjaan') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Tingkat Pendidikan') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('pendidikan') ? ' has-danger' : '' }}">
                        <select class="form-control" name="pendidikan" id="pendidikan">
                            @if($pasien->pendidikan)
                            <option value="{{ $pasien->pendidikan ?? ''  }}" selected>{{ $pasien->pendidikan ?? ''  }}</option>
                            @endif
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                        </select>
                        @if ($errors->has('pendidikan'))
                          <span id="pendidikan-error" class="error text-danger" for="input-pendidikan">{{ $errors->first('pendidikan') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Adakah keluarga (orangtua,kakek/nenek) yang memiliki Penyakit  Hipertensi') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('riwayat_hipertensi_kel') ? ' has-danger' : '' }}">
                        <select class="form-control" name="riwayat_hipertensi_kel" id="riwayat_hipertensi_kel">
                            @if($pasien->riwayat_hipertensi_kel)
                            <option value="{{ $pasien->riwayat_hipertensi_kel ?? ''  }}" selected>{{ $pasien->riwayat_hipertensi_kel ?? ''  }}</option>
                            @endif
                          <option value="ada">Ada</option>
                          <option value="tidak">Tidak</option>
                          </select>
                        @if ($errors->has('riwayat_hipertensi_kel'))
                          <span id="riwayat_hipertensi_kel-error" class="error text-danger" for="input-riwayat_hipertensi_kel">{{ $errors->first('riwayat_hipertensi_kel') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Sebutkan Siapa') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('sebutkan_siapa') ? ' has-danger' : '' }}">
                        <select class="form-control" name="sebutkan_siapa" id="sebutkan_siapa">
                            @if($pasien->sebutkan_siapa)
                            <option value="{{ $pasien->sebutkan_siapa ?? ''  }}" selected>{{ $pasien->sebutkan_siapa ?? ''  }}</option>
                            @endif
                          <option value="tidak ada">Tidak Ada</option>
                          <option value="ayah">Ayah</option>
                          <option value="ibu">Ibu</option>
                          <option value="kakek">Kakek</option>
                          <option value="nenek">Nenek</option>
                          </select>
                        @if ($errors->has('sebutkan_siapa'))
                          <span id="sebutkan_siapa-error" class="error text-danger" for="input-sebutkan_siapa">{{ $errors->first('sebutkan_siapa') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Lama menderita hipertensi ') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('lama_hipertensiTahun') ? ' has-danger' : '' }} col-sm-2">
                        <input class="form-control{{ $errors->has('lama_hipertensiTahun') ? ' is-invalid' : '' }} " name="lama_hipertensiTahun" id="input-lama_hipertensiTahun" type="number" placeholder="{{ __('') }}" value="{{ $pasien->lama_hipertensiTahun ?? ''  }}" required /> Tahun
                        <input class="form-control{{ $errors->has('lama_hipertensi') ? ' is-invalid' : '' }} " name="lama_hipertensi" id="input-lama_hipertensi" type="number" placeholder="{{ __('') }}" value="{{ $pasien->lama_hipertensi ?? ''  }}" required /> Bulan

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Adakah Penyakit lain yang dimiliki selain hipertensi') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('penyakit_lain_cek') ? ' has-danger' : '' }}">
                        <select class="form-control" name="penyakit_lain_cek" id="penyakit_lain_cek">
                            @if($pasien->penyakit_lain_cek)
                            <option value="{{ $pasien->penyakit_lain_cek ?? ''  }}" selected>{{ $pasien->penyakit_lain_cek ?? ''  }}</option>
                            @endif
                          <option value="tidak ada">Tidak Ada</option>
                          <option value="ada">Ada</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Sebutkan penyakit tersebut') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('penyakit_lain') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('penyakit_lain') ? ' is-invalid' : '' }}" name="penyakit_lain" id="input-penyakit_lain" type="text" placeholder="{{ __('') }}" value="{{ $pasien->penyakit_lain ?? ''  }}" required />
                        @if ($errors->has('penyakit_lain'))
                          <span id="penyakit_lain-error" class="error text-danger" for="input-penyakit_lain">{{ $errors->first('penyakit_lain') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Apakah anda teratur kontrol setiap bulan ke Pelayanan kesehatan') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('teratur_kontrol') ? ' has-danger' : '' }}">
                        <select class="form-control" name="teratur_kontrol" id="teratur_kontrol">
                            @if($pasien->teratur_kontrol)
                            <option value="{{ $pasien->teratur_kontrol ?? ''  }}" selected>{{ $pasien->teratur_kontrol ?? ''  }}</option>
                            @endif
                          <option value="iya">Iya</option>
                          <option value="tidak">Tidak</option>
                          </select>
                        @if ($errors->has('teratur_kontrol'))
                          <span id="teratur_kontrol-error" class="error text-danger" for="input-teratur_kontrol">{{ $errors->first('teratur_kontrol') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Jika tidak teratur kontrol, apa alasannya ') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('alasan') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('alasan') ? ' is-invalid' : '' }}" name="alasan" id="input-alasan" type="text" placeholder="{{ __('') }}" value="{{ $pasien->alasan ?? ''  }}" required />
                        @if ($errors->has('alasan'))
                          <span id="alasan-error" class="error text-danger" for="input-alasan">{{ $errors->first('alasan') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Nama obat hipertensi yang diminum saat ini') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('konsumsi_obat') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('konsumsi_obat') ? ' is-invalid' : '' }}" name="konsumsi_obat" id="input-konsumsi_obat" type="text" placeholder="{{ __('') }}" value="{{ $pasien->konsumsi_obat ?? ''  }}" required />
                        @if ($errors->has('konsumsi_obat'))
                          <span id="konsumsi_obat-error" class="error text-danger" for="input-konsumsi_obat">{{ $errors->first('konsumsi_obat') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Tinggal serumah bersama dengan ') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('tinggal_dengan') ? ' has-danger' : '' }}">
                        <select class="form-control" name="tinggal_dengan" id="tinggal_dengan">
                            @if($pasien->tinggal_dengan)
                            <option value="{{ $pasien->tinggal_dengan ?? ''  }}" selected>{{ $pasien->tinggal_dengan ?? ''  }}</option>
                            @endif
                          <option value="pasangan">Pasangan</option>
                          <option value="sendiri">Sendiri</option>
                          <option value="anak">Anak</option>
                          <option value="saudara">Saudara</option>
                          </select>
                        @if ($errors->has('tinggal_dengan'))
                          <span id="tinggal_dengan-error" class="error text-danger" for="input-tinggal_dengan">{{ $errors->first('tinggal_dengan') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Pilih tempat berobat') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('jenis_tempat_berobat') ? ' has-danger' : '' }}">
                        <select class="form-control" name="jenis_tempat_berobat" id="jenis_tempat_berobat">
                            @if($pasien->jenis_tempat_berobat)
                            <option value="{{ $pasien->jenis_tempat_berobat ?? ''  }}" selected>{{ $pasien->jenis_tempat_berobat ?? ''  }}</option>
                            @endif
                            <option value="puskemas">Puskemas</option>
                            <option value="klinik">Klinik</option>
                            <option value="rumah sakit">Rumah Sakit</option>
                        </select>
                        @if ($errors->has('jenis_tempat_berobat'))
                          <span id="jenis_tempat_berobat-error" class="error text-danger" for="input-jenis_tempat_berobat">{{ $errors->first('jenis_tempat_berobat') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">{{ __('Nama tempat berobat') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('nama_tempat_berobat') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('nama_tempat_berobat') ? ' is-invalid' : '' }}" name="nama_tempat_berobat" id="input-nama_tempat_berobat" type="text" placeholder="{{ __('') }}" value="{{ $pasien->nama_tempat_berobat ?? ''  }}" required />
                        @if ($errors->has('nama_tempat_berobat'))
                          <span id="nama_tempat_berobat-error" class="error text-danger" for="input-nama_tempat_berobat">{{ $errors->first('nama_tempat_berobat') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('user_id') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('user_id') ? ' is-invalid' : '' }}" name="user_id" id="user_id" type="text" placeholder="{{ __('') }}" value="{{ old('name', auth()->user()->id) }}" required="true" aria-required="true" hidden/>
                        @if ($errors->has('user_id'))
                          <span id="user_id-error" class="error text-danger" for="input-user_id">{{ $errors->first('user_id') }}</span>
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
