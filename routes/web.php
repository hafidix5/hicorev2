<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('/logout', function () {
    $update = User::where('id', Auth::user()->id)->first();

    $update->updated_at = Carbon::now()->format('Y-m-d H:i:s');
    $update->update();

    Auth::logout();
    return redirect('/login');

})->name('logout');



Route::get('/', 'PasienController@index')->name('dataDiri')->middleware('auth');


Auth::routes(['logout' => false]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
    Route::get('table-list', 'jawaban_kuesionerController@riwayat')->name('table');
    Route::get('riwayat', 'jawaban_kuesionerController@riwayatpribadi')->name('riwayat');

    Route::get('isi_kuesioner', 'KuesionerController@index')->name('typography');
    Route::get('status_kesehatan', 'status_kesehatanController@index')->name('status_kesehatan');
    Route::get('/riwayat/downloadHasilKuesioner/{id}','KuesionerController@export_excel')->name('downloadHasilKuesioner');
    Route::post('isi_kuesionerSave', 'jawaban_kuesionerController@store')->name('isi_kuesionerSave');
    Route::post('status_kesehatan.store', 'status_kesehatanController@store')->name('status_kesehatan.store');
    Route::get('status_kesehatan.create', 'status_kesehatanController@create')->name('status_kesehatan.create');
    Route::get('status_kesehatan.show/{id}', 'status_kesehatanController@show')->name('status_kesehatan.show');
    Route::get('status_kesehatan.hasil/{tgl}/{id}', 'status_kesehatanController@hasil')->name('status_kesehatan.hasil');
    Route::get('riwayatdetail/{tanggal}/DetailKuesioner/{id}', 'jawaban_kuesionerController@detail')->name('riwayatDetailKuesioner');
    Route::get('pendidikanKesehatan', 'edukasi_videoController@index')->name('pendidikanKesehatan');
        //Route::resource('isi_kuesioner', 'KuesionerController');

        Route::get('dataDiri', 'PasienController@index')->name('dataDiri');

        Route::get('icons', function () {
            return view('pages.icons');
        })->name('icons');

        Route::get('map', function () {
            return view('pages.map');
        })->name('map');

        Route::get('notifications', function () {
            return view('pages.notifications');
        })->name('notifications');

        Route::get('rtl-support', function () {
            return view('pages.language');
        })->name('language');

        Route::get('upgrade', function () {
            return view('pages.upgrade');
        })->name('upgrade');

        Route::group(['prefix' => 'notifconfig'], function () {
            Route::get('/', 'NotifConfigController@index');
            Route::post('/create', 'NotifConfigController@create');
        });

        Route::group(['prefix' => 'notifconfig2'], function () {
            Route::get('/', 'NotifConfig2Controller@index');
            Route::post('/create', 'NotifConfig2Controller@create');
        });

        Route::group(['prefix' => 'notifconfig3'], function () {
            Route::get('/', 'NotifConfig3Controller@index');
            Route::post('/create', 'NotifConfig3Controller@create');
        });

});
Route::post('pasien/store', ['as' => 'pasien.store', 'uses' => 'PasienController@store']);
Route::post('pasien/update', ['as' => 'pasien.update', 'uses' => 'PasienController@update']);

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


