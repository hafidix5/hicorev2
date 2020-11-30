<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <div class="logo">
      <a href="#" class="simple-text logo-normal">
        {{ __('WEB HICORE') }}
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
          @if(Auth::check()&& Auth::user()->role  == "1")
          <li class="nav-item{{ $activePage ?? '' }}">
              <a class="nav-link" href="{{ route('dataDiri') }}">
                <i class="material-icons">content_paste</i>
                  <p>{{ __('Data Diri') }}</p>
              </a>
            </li>
        <li class="nav-item {{ $activePage ?? '' }}">
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
        </li>
        <li class="nav-item {{ $activePage ?? '' }}">
          <div class="collapse show" id="laravelExample">
            <ul class="nav">
              <li class="nav-item{{ $activePage ?? '' }}">
                <a class="nav-link" href="https://forms.gle/N44mhuwfwxNBDheQ9" target="_blank">
                  <i class="material-icons">info</i>
                  <p>{{ __('Partisipan Penelitian') }}</p>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ route('status_kesehatan') }}">
            <i class="material-icons">library_books</i>
              <p>{{ __('Status Kesehatan') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage ?? '' }}">
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
        </li>

          @endif

        @if(Auth::check()&& Auth::user()->role  == "2")
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
              <p>{{ __('Beranda') }}</p>
          </a>
        </li>
      </li>
      <li class="nav-item {{ $activePage ?? '' }}">
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
      </li>

        <li class="nav-item{{ $activePage ?? '' }}">
            <a class="nav-link" href="{{ route('table') }}">
              <i class="material-icons">face</i>
              <p>{{ __('Hasil & Rekomendasi') }}</p>
            </a>
      </li>

        @endif
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="{{ route('pendidikanKesehatan') }}">
            <i class="material-icons">face</i>
            <p>{{ __('Pendidikan Kesehatan') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="pilihGroup">
              <i class="material-icons">chat</i>
              <p>{{ __('Konsultasi Group WA') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSemXEphd8QqYxGC3f4lxoqeKkdfootLW6uLEOAYaCVnaNjjKg/viewform" target="_blank">
              <i class="material-icons">feedback</i>
              <p>{{ __('Tanggapan') }}</p>
            </a>
        </li>


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

        <li class="nav-item{{ $activePage ?? '' }}">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
        </li>

      </ul>
    </div>
</div>
