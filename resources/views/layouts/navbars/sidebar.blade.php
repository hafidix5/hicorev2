<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        {{ __('WEB HICORE') }}
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
          @if(Auth::check()&& Auth::user()->role  == "1")
          <li class="nav-item {{ $activePage ?? '' }}">
            <div class="collapse show" id="laravelExample">
              <ul class="nav">
                <li class="nav-item{{ $activePage ?? '' }}">
                  <a class="nav-link" href="https://forms.gle/N44mhuwfwxNBDheQ9" target="_blank">
                    <i class="material-icons">info</i>
                    <p>{{ __('Kesediaan partisipan') }}</p>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item{{ $activePage ?? '' }}">
              <a class="nav-link" href="{{ route('dataDiri') }}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Data Diri') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#pengetahuan" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Pengetahuan
                    </a>
                <ul class="collapse list-unstyled" id="pengetahuan">
                    <li class="nav-link">
                        <a  href="{{ route('isi_pengetahuan') }}">Isi kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_pengetahuan') }}">Video</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#persepsi" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Persepsi
                    </a>
                <ul class="collapse list-unstyled" id="persepsi">
                    <li class="nav-link">
                        <a  href="{{ route('isi_persepsi') }}">Isi kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat_persepsi') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_persepsi') }}">Video</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#stress" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Tingkat Stress
                    </a>
                <ul class="collapse list-unstyled" id="stress">
                    <li class="nav-link">
                        <a  href="{{ route('isi_stress') }}">Isi kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat_stress') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_stress') }}">Video</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#kesehatan" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Pemeriksaan status Kesehatan
                    </a>
                <ul class="collapse list-unstyled" id="kesehatan">
                    <li class="nav-link">
                        <a  href="{{ route('status_kesehatan.create') }}">Isi kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('status_kesehatan') }}">Hasil kuesioner</a>
                    </li>
                </ul>
              </li>

              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#hipertensi" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Pengendalian diri penderita hipertensi
                    </a>
                <ul class="collapse list-unstyled" id="hipertensi">
                    <li class="nav-link">
                        <a  href="{{ route('isi_pengendalian') }}">Isi kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat_pengendalian') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_pengendalian') }}">Video</a>
                    </li>
                </ul>
              </li>



        {{-- <li class="nav-item{{ $activePage ?? '' }}">
            <a class="nav-link" href="{{ route('typography') }}">
              <i class="material-icons">library_books</i>
                <p>{{ __('Isi Kuesioner') }}</p>
            </a>
          </li>
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ route('riwayat') }}">
            <i class="material-icons">content_paste</i>
              <p>{{ __('Hasil & Rekomendasi') }}</p>
          </a>
        </li> --}}

          @endif

        @if(Auth::check()&& Auth::user()->role  == "2")
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
              <p>{{ __('Beranda') }}</p>
          </a>
        </li>
      </li>
     <!--  <li class="nav-item {{ $activePage ?? '' }}">
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage ?? '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <i class="material-icons">perm_identity</i>
                <p>{{ __('Profil') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li> -->
      <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#pengetahuan" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Pengetahuan
                    </a>
                <ul class="collapse list-unstyled" id="pengetahuan">
                    <li class="nav-link">
                        <a  href="{{ route('pertanyaan_pengetahuan') }}">Daftar Pertanyaan</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_pengetahuan') }}">Daftar Video</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#persepsi" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Persepsi
                    </a>
                <ul class="collapse list-unstyled" id="persepsi">
                    <li class="nav-link">
                        <a  href="{{ route('pertanyaan_persepsi') }}">Daftar Pertanyaan</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat_persepsi') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_persepsi') }}">Daftar Video</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#stress" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Tingkat Stress
                    </a>
                <ul class="collapse list-unstyled" id="stress">
                    <li class="nav-link">
                        <a  href="{{ route('pertanyaan_stress') }}">Daftar Pertanyaan</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat_stress') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_stress') }}">Daftar Video</a>
                    </li>
                </ul>
              </li>
              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#kesehatan" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Pemeriksaan status Kesehatan
                    </a>
                <ul class="collapse list-unstyled" id="kesehatan">
                    <li class="nav-link">
                        <a  href="{{ route('status_kesehatan.create') }}">Daftar Pertanyaan</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('status_kesehatan') }}">Hasil kuesioner</a>
                    </li>
                </ul>
              </li>

              <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#hipertensi" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">grading</i>
                     Pengendalian diri penderita hipertensi
                    </a>
                <ul class="collapse list-unstyled" id="hipertensi">
                    <li class="nav-link">
                        <a  href="{{ route('pertanyaan_pengendalian') }}">Daftar Pertanyaan</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('riwayat_pengendalian') }}">Hasil kuesioner</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ route('video_pengendalian') }}">Daftar Video</a>
                    </li>
                </ul>
              </li>

       <!--  <li class="nav-item{{ $activePage ?? '' }}">
            <a class="nav-link" href="{{ route('table') }}">
              <i class="material-icons">face</i>
              <p>{{ __('Hasil & Rekomendasi') }}</p>
            </a>
      </li> -->
      <li class="nav-item{{ $activePage ?? '' }}">
                <a href="#notifikasi" data-toggle="collapse" aria-expanded="false" class="nav-link">
                     <i class="material-icons">build</i>
                     Pengaturan Notifikasi
                    </a>
                <ul class="collapse list-unstyled" id="notifikasi">
                    <li class="nav-link">
                        <a  href="{{ url('notifconfig/') }}">Notifikasi 1</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ url('notifconfig2/') }}">Notifikasi 2</a>
                    </li>
                    <li class="nav-link">
                      <a  href="{{ url('notifconfig3/') }}">Notifikasi 3</a>
                    </li>
                </ul>
     <!--          </li>
      <li class="nav-item{{ $activePage ?? '' }}">
        <a class="nav-link" href="{{ url('notifconfig/') }}">
          <i class="material-icons">build</i>
          <p>{{ __('Konfigurasi Notifikasi') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ url('notifconfig2/') }}">
            <i class="material-icons">build</i>
            <p>{{ __('Konfigurasi Notifikasi 2') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ url('notifconfig3/') }}">
            <i class="material-icons">build</i>
            <p>{{ __('Konfigurasi Notifikasi 3') }}</p>
          </a>
        </li>
        <li class="nav-link">
                      <a  href="{{ route('riwayat_pengendalian') }}">Hasil kuesioner</a>
                    </li> -->
        @endif
        {{-- <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ route('pendidikanKesehatan') }}">
            <i class="material-icons">face</i>
            <p>{{ __('Pendidikan Kesehatan') }}</p>
          </a>
        </li> --}}
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="pilihGroup">
              <i class="material-icons">chat</i>
              <p style="word-break:break;white-space:normal;">{{ __('Konsultasi WA dengan petugas kesehatan') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSemXEphd8QqYxGC3f4lxoqeKkdfootLW6uLEOAYaCVnaNjjKg/viewform" target="_blank">
              <i class="material-icons">feedback</i>
              <p>{{ __('Tanggapan') }}</p>
            </a>
        </li>



          <li class="nav-item {{ $activePage ?? '' }}">
            <div class="collapse show" id="laravelExample">
              <ul class="nav">
                <li class="nav-item{{ $activePage ?? '' }}">
                  <a class="nav-link" href="{{ route('profile.edit') }}">
                    <i class="material-icons">perm_identity</i>
                    <p>{{ __('Ubah Akun') }}</p>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item{{ $activePage ?? '' }}">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Keluar') }}

            <i class="material-icons">settings_power</i>

            </a>
          </li>

      </ul>
    </div>
</div>
