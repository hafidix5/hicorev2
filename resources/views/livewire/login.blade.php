<div>
@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('material') }}/img/login.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
  @extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('')])
  <div class="container" style="height: auto;">
    <div class="row align-items-center">
      <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
        {{--  <h3>{{ __('Log in to see how you can speed up your web development with out of the box CRUD for #User Management and more.') }} </h3>  --}}
      </div>
      <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

        {{-- TRIGGERRR --}}
        <input wire:poll='notifikasi' hidden>
        <input wire:poll='notifikasi2' hidden>
        <input wire:poll='notifikasi3' hidden>


        <form class="form" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="card card-login card-hidden mb-3">
            <div class="card-header card-header-primary text-center">
              <h4 class="card-title"><strong>{{ __('WEB HiCORE') }}</strong></h4>

            </div>
            <div class="card-body">
              <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">phone</i>
                    </span>
                  </div>
                  <input type="number" name="email" class="form-control" placeholder="{{ __('Nomor HP') }}" value="" required>
                </div>
                @if ($errors->has('email'))
                  <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                    <strong>{{ $errors->first('email') }}</strong>
                  </div>
                @endif
              </div>
              <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="text" name="password" id="password" class="form-control" placeholder="Tanggal Lahir" value="" required>
                </div>
                @if ($errors->has('password'))
                  <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                    <strong>{{ $errors->first('password') }}</strong>
                  </div>
                @endif
              </div>
            </div>
            <div class="card-footer justify-content-center">
              <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Masuk') }}</button>
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-6">
              {{-- @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-light">
                      <small>{{ __('Lupa Password ?') }}</small>
                  </a>
              @endif --}}
              <a href="{{ asset('material') }}/img/panduan_hicore.html" target="_blank" class="text-light">
                  <button style="cursor: pointer;">   <h4>{{ __('Lihat Panduan') }}</h4> </button>
              </a>
          </div>
          <div class="col-6 text-right">
              <a href="{{ route('register') }}" class="text-light">
                  <button style="cursor: pointer;">   <h4>{{ __('Daftar Akun Baru') }}</h4> </button>
              </a><br>

          </div>
        </div>
      </div>
    </div>
  </div>
    @include('layouts.footers.guest')
  </div>
</div>


</div>






