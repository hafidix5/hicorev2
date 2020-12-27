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
    Route::get('riwayat_persepsi', 'jawaban_kuesionerController@riwayatpribadi_persepsi')->name('riwayat_persepsi');
    Route::get('riwayat_stress', 'jawaban_kuesionerController@riwayatpribadi_stress')->name('riwayat_stress');
    Route::get('riwayat_pengendalian', 'jawaban_kuesionerController@riwayatpribadi_pengendalian')->name('riwayat_pengendalian');
    Route::get('riwayat_admin', 'jawaban_kuesionerController@riwayatpribadi_admin')->name('riwayat_admin');
    Route::get('riwayat_persepsi_admin', 'jawaban_kuesionerController@riwayatpribadi_persepsi_admin')->name('riwayat_persepsi_admin');
    Route::get('riwayat_stress_admin', 'jawaban_kuesionerController@riwayatpribadi_stress_admin')->name('riwayat_stress_admin');
    Route::get('riwayat_pengendalian_admin', 'jawaban_kuesionerController@riwayatpribadi_pengendalian_admin')->name('riwayat_pengendalian_admin');
    Route::get('isi_persepsi', 'KuesionerController@index')->name('isi_persepsi');
    Route::get('isi_pengetahuan', 'KuesionerController@indexpengetahuan')->name('isi_pengetahuan');
    Route::get('isi_stress', 'KuesionerController@indexstress')->name('isi_stress');
    Route::get('isi_pengendalian', 'KuesionerController@indexpengendalian')->name('isi_pengendalian');
    Route::get('status_kesehatan', 'status_kesehatanController@index')->name('status_kesehatan');
    Route::get('status_kesehatan_admin', 'status_kesehatanController@index_admin')->name('status_kesehatan_admin');
    Route::get('/riwayat/downloadHasilKuesioner/{id}','KuesionerController@export_excel')->name('downloadHasilKuesioner');
    Route::post('isi_persepsiSave', 'jawaban_kuesionerController@store')->name('isi_persepsiSave');
    Route::post('isi_pengetahuanSave', 'jawaban_kuesionerController@storepengetahuan')->name('isi_pengetahuanSave');
    Route::post('isi_stressSave', 'jawaban_kuesionerController@storestress')->name('isi_stressSave');
    Route::post('isi_pengendalianSave', 'jawaban_kuesionerController@storepengendalian')->name('isi_pengendalianSave');

    Route::post('status_kesehatan.store', 'status_kesehatanController@store')->name('status_kesehatan.store');
    Route::get('status_kesehatan.create', 'status_kesehatanController@create')->name('status_kesehatan.create');
    Route::get('status_kesehatan.show/{id}', 'status_kesehatanController@show')->name('status_kesehatan.show');
    Route::get('status_kesehatan.hasil/{tgl}/{id}', 'status_kesehatanController@hasil')->name('status_kesehatan.hasil');
    Route::get('riwayatdetail/{tanggal}/DetailKuesioner/{id}/pengetahuan', 'jawaban_kuesionerController@detail')->name('riwayatDetailKuesioner_pengetahuan');
    Route::get('riwayatdetail/{tanggal}/DetailKuesioner/{id}/persepsi', 'jawaban_kuesionerController@detail_persepsi')->name('riwayatDetailKuesioner_persepsi');
    Route::get('riwayatdetail/{tanggal}/DetailKuesioner/{id}/stress', 'jawaban_kuesionerController@detail_stress')->name('riwayatDetailKuesioner_stress');
    Route::get('riwayatdetail/{tanggal}/DetailKuesioner/{id}/pengendalian', 'jawaban_kuesionerController@detail_pengendalian')->name('riwayatDetailKuesioner_pengendalian');
    
    Route::get('pendidikanKesehatan', 'edukasi_videoController@index')->name('pendidikanKesehatan');

    Route::get('video_pengetahuan', 'jenisController@video_pengetahuan')->name('video_pengetahuan');
    Route::get('video_persepsi', 'jenisController@video_persepsi')->name('video_persepsi');
    Route::get('video_stress', 'jenisController@video_stress')->name('video_stress');
    Route::get('video_pengendalian', 'jenisController@video_pengendalian')->name('video_pengendalian');

    Route::get('video_pengetahuan_admin', 'jenisController@video_pengetahuan_admin')->name('video_pengetahuan_admin');
    Route::get('video_pengetahuan.hapus', 'jenisController@video_pengetahuan_hapus')->name('video_pengetahuan.hapus');
    Route::get('video_pengetahuan.edit/{id}', 'jenisController@video_pengetahuan_edit')->name('video_pengetahuan.edit');
    Route::get('video_pengetahuan.insert', 'jenisController@video_pengetahuan_insert')->name('video_pengetahuan.insert');
    Route::post('video_pengetahuan.store', 'jenisController@video_pengetahuan_store')->name('video_pengetahuan.store');
    Route::get('video_pengetahuan.destroy/{id}', 'jenisController@video_pengetahuan_destroy')->name('video_pengetahuan.destroy');
    Route::put('video_pengetahuan.update/{id}', ['as' => 'video_pengetahuan.update', 'uses' => 'jenisController@video_pengetahuan_update']);

    Route::get('video_persepsi_admin', 'jenisController@video_persepsi_admin')->name('video_persepsi_admin');
    Route::get('video_persepsi.hapus', 'jenisController@video_persepsi_hapus')->name('video_persepsi.hapus');
    Route::get('video_persepsi.edit/{id}', 'jenisController@video_persepsi_edit')->name('video_persepsi.edit');
    Route::get('video_persepsi.insert', 'jenisController@video_persepsi_insert')->name('video_persepsi.insert');
    Route::post('video_persepsi.store', 'jenisController@video_persepsi_store')->name('video_persepsi.store');
    Route::get('video_persepsi.destroy/{id}', 'jenisController@video_persepsi_destroy')->name('video_persepsi.destroy');
    Route::put('video_persepsi.update/{id}', ['as' => 'video_persepsi.update', 'uses' => 'jenisController@video_persepsi_update']);

    Route::get('video_stress_admin', 'jenisController@video_stress_admin')->name('video_stress_admin');
    Route::get('video_stress.hapus', 'jenisController@video_stress_hapus')->name('video_stress.hapus');
    Route::get('video_stress.edit/{id}', 'jenisController@video_stress_edit')->name('video_stress.edit');
    Route::get('video_stress.insert', 'jenisController@video_stress_insert')->name('video_stress.insert');
    Route::post('video_stress.store', 'jenisController@video_stress_store')->name('video_stress.store');
    Route::get('video_stress.destroy/{id}', 'jenisController@video_stress_destroy')->name('video_stress.destroy');
    Route::put('video_stress.update/{id}', ['as' => 'video_stress.update', 'uses' => 'jenisController@video_stress_update']);

    Route::get('video_pengendalian_admin', 'jenisController@video_pengendalian_admin')->name('video_pengendalian_admin');
    Route::get('video_pengendalian.hapus', 'jenisController@video_pengendalian_hapus')->name('video_pengendalian.hapus');
    Route::get('video_pengendalian.edit/{id}', 'jenisController@video_pengendalian_edit')->name('video_pengendalian.edit');
    Route::get('video_pengendalian.insert', 'jenisController@video_pengendalian_insert')->name('video_pengendalian.insert');
    Route::post('video_pengendalian.store', 'jenisController@video_pengendalian_store')->name('video_pengendalian.store');
    Route::get('video_pengendalian.destroy/{id}', 'jenisController@video_pengendalian_destroy')->name('video_pengendalian.destroy');
    Route::put('video_pengendalian.update/{id}', ['as' => 'video_pengendalian.update', 'uses' => 'jenisController@video_pengendalian_update']);

    Route::get('video_persepsi', 'jenisController@video_persepsi')->name('video_persepsi');
    Route::get('video_stress', 'jenisController@video_stress')->name('video_stress');
    Route::get('video_pengendalian', 'jenisController@video_pengendalian')->name('video_pengendalian');
        //Route::resource('isi_kuesioner', 'KuesionerController');
        Route::get('pertanyaan_pengetahuan', 'kuesionerController@showPengetahuan')->name('pertanyaan_pengetahuan');
        Route::get('pertanyaan_pengetahuan.insert', 'kuesionerController@insertPengetahuan')->name('pertanyaan_pengetahuan.insert');
        Route::post('pertanyaan_pengetahuan.store', ['as' => 'pertanyaan_pengetahuan.store', 'uses' => 'kuesionerController@storePengetahuan']);
        Route::get('pertanyaan_pengetahuan.edit/{id}', ['as' => 'pertanyaan_pengetahuan.edit', 'uses' => 'kuesionerController@editPengetahuan']);
        Route::put('pertanyaan_pengetahuan.update/{id}', ['as' => 'pertanyaan_pengetahuan.update', 'uses' => 'kuesionerController@updatePengetahuan']);
        Route::get('pertanyaan_pengetahuan.hapus/{id}', ['as' => 'pertanyaan_pengetahuan.hapus', 'uses' => 'kuesionerController@destroyPengetahuan']);
    
        Route::get('pertanyaan_persepsi', 'kuesionerController@showpersepsi')->name('pertanyaan_persepsi');
        Route::get('pertanyaan_persepsi.insert', 'kuesionerController@insertpersepsi')->name('pertanyaan_persepsi.insert');
        Route::post('pertanyaan_persepsi.store', ['as' => 'pertanyaan_persepsi.store', 'uses' => 'kuesionerController@storepersepsi']);
        Route::get('pertanyaan_persepsi.edit/{id}', ['as' => 'pertanyaan_persepsi.edit', 'uses' => 'kuesionerController@editpersepsi']);
        Route::put('pertanyaan_persepsi.update/{id}', ['as' => 'pertanyaan_persepsi.update', 'uses' => 'kuesionerController@updatepersepsi']);
        Route::get('pertanyaan_persepsi.hapus/{id}', ['as' => 'pertanyaan_persepsi.hapus', 'uses' => 'kuesionerController@destroypersepsi']);

        Route::get('pertanyaan_stress', 'kuesionerController@showstress')->name('pertanyaan_stress');
        Route::get('pertanyaan_stress.insert', 'kuesionerController@insertstress')->name('pertanyaan_stress.insert');
        Route::post('pertanyaan_stress.store', ['as' => 'pertanyaan_stress.store', 'uses' => 'kuesionerController@storestress']);
        Route::get('pertanyaan_stress.edit/{id}', ['as' => 'pertanyaan_stress.edit', 'uses' => 'kuesionerController@editstress']);
        Route::put('pertanyaan_stress.update/{id}', ['as' => 'pertanyaan_stress.update', 'uses' => 'kuesionerController@updatestress']);
        Route::get('pertanyaan_stress.hapus/{id}', ['as' => 'pertanyaan_stress.hapus', 'uses' => 'kuesionerController@destroystress']);

        Route::get('pertanyaan_pengendalian', 'kuesionerController@showpengendalian')->name('pertanyaan_pengendalian');
        Route::get('pertanyaan_pengendalian.insert', 'kuesionerController@insertpengendalian')->name('pertanyaan_pengendalian.insert');
        Route::post('pertanyaan_pengendalian.store', ['as' => 'pertanyaan_pengendalian.store', 'uses' => 'kuesionerController@storepengendalian']);
        Route::get('pertanyaan_pengendalian.edit/{id}', ['as' => 'pertanyaan_pengendalian.edit', 'uses' => 'kuesionerController@editpengendalian']);
        Route::put('pertanyaan_pengendalian.update/{id}', ['as' => 'pertanyaan_pengendalian.update', 'uses' => 'kuesionerController@updatepengendalian']);
        Route::get('pertanyaan_pengendalian.hapus/{id}', ['as' => 'pertanyaan_pengendalian.hapus', 'uses' => 'kuesionerController@destroypengendalian']);

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


