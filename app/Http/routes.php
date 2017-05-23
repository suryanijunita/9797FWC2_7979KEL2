<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');
Route::get('/','SesiController@index');
Route::get('level',['middleware'=>['web','level'],function(){
	return view('level/index');
}]);
Route::get('/',function(){
		if(Auth::user()->level=='admin'){
			return view('index');
		}else{
			return view('index1');
		}
		});
Route::group(['middleware'=>'web'],function (){
	
	Route::group(['middleware'=>'AutentifikasiUser'],function ()
	{
	Route::get('/home', function () {
	return view('home');
	});

	Route::get('/home1', function () {
	return view('home1');
	});

		Route::get('pegawai/tambah', 'PegawaiController@tambah');
		Route::get('pegawai', 'PegawaiController@awal'); 
		Route::get('pegawai/lihat/{pegawai}', 'PegawaiController@lihat');
		Route::post('pegawai/simpan', 'PegawaiController@simpan');
		Route::get('pegawai/edit/{pegawai}', 'PegawaiController@edit');
		Route::post('pegawai/edit/{pegawai}', 'PegawaiController@update');
		Route::get('pegawai/hapus/{pegawai}', 'PegawaiController@hapus');

		Route::get('skkrj/tambah', 'SkkrjController@tambah');
		Route::get('skkrj', 'SkkrjController@awal'); 
		Route::get('skkrj/lihat/{skkrj}', 'SkkrjController@lihat');
		Route::post('skkrj/simpan', 'SkkrjController@simpan');
		Route::get('skkrj/edit/{skkrj}', 'SkkrjController@edit');
		Route::post('skkrj/edit/{skkrj}', 'SkkrjController@update');
		Route::get('skkrj/hapus/{skkrj}', 'SkkrjController@hapus');

		Route::get('pendidikan/tambah', 'PendidikanController@tambah');
		Route::get('pendidikan', 'PendidikanController@awal'); 
		Route::get('pendidikan/lihat/{pendidikan}', 'PendidikanController@lihat');
		Route::post('pendidikan/simpan', 'PendidikanController@simpan');
		Route::get('pendidikan/edit/{pendidikan}', 'PendidikanController@edit');
		Route::post('pendidikan/edit/{pendidikan}', 'PendidikanController@update');
		Route::get('pendidikan/hapus/{pendidikan}', 'PendidikanController@hapus');

		Route::get('pengalamankrj/tambah', 'PengalamankrjController@tambah');
		Route::get('pengalamankrj', 'PengalamankrjController@awal'); 
		Route::get('pengalamankrj/lihat/{pengalamankrj}', 'PengalamankrjController@lihat');
		Route::post('pengalamankrj/simpan', 'PengalamankrjController@simpan');
		Route::get('pengalamankrj/edit/{pengalamankrj}', 'PengalamankrjController@edit');
		Route::post('pengalamankrj/edit/{pengalamankrj}', 'PengalamankrjController@update');
		Route::get('pengalamankrj/hapus/{pengalamankrj}', 'PengalamankrjController@hapus');


		Route::get('prestasi/tambah', 'PrestasiController@tambah');
		Route::get('prestasi', 'PrestasiController@awal'); 
		Route::get('prestasi/lihat/{prestasi}', 'PrestasiController@lihat');
		Route::post('prestasi/simpan', 'PrestasiController@simpan');
		Route::get('prestasi/edit/{prestasi}', 'PrestasiController@edit');
		Route::post('prestasi/edit/{prestasi}', 'PrestasiController@update');
		Route::get('prestasi/hapus/{prestasi}', 'PrestasiController@hapus');

		Route::get('pengguna/tambah', 'PenggunaController@tambah');//route membaca yg lebih spesifik dulu khususnya lebih didahulukan contoh khusus tambah = 'pengguna/tambah'
		Route::get('pengguna', 'PenggunaController@awal');//route membaca yg lebih spesifik dulu khususnya lebih didahulukan contoh khusus pengguna = 'pengguna'
		Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');
		Route::post('pengguna/simpan', 'PenggunaController@simpan');
		Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
		Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
		Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');

		Route::get('jabatan/tambah', 'JabatanController@tambah');
		Route::get('jabatan', 'JabatanController@awal');
		Route::get('jabatan/lihat/{jabatan}', 'JabatanController@lihat');
		Route::post('jabatan/simpan', 'JabatanController@simpan');
		Route::get('jabatan/edit/{jabatan}', 'JabatanController@edit');
		Route::post('jabatan/edit/{jabatan}', 'JabatanController@update');
		Route::get('jabatan/hapus/{jabatan}', 'JabatanController@hapus');

		Route::get('unitkerja/tambah', 'UnitkerjaController@tambah');
		Route::get('unitkerja', 'UnitkerjaController@awal');
		Route::get('unitkerja/lihat/{unitkerja}', 'UnitkerjaController@lihat');
		Route::post('unitkerja/simpan', 'UnitkerjaController@simpan');
		Route::get('unitkerja/edit/{unitkerja}', 'UnitkerjaController@edit');
		Route::post('unitkerja/edit/{unitkerja}', 'UnitkerjaController@update');
		Route::get('unitkerja/hapus/{unitkerja}', 'UnitkerjaController@hapus');

		Route::get('pangkat/tambah', 'PangkatController@tambah');
		Route::get('pangkat', 'PangkatController@awal');
		Route::get('pangkat/lihat/{pangkat}', 'PangkatController@lihat');
		Route::post('pangkat/simpan', 'PangkatController@simpan');
		Route::get('pangkat/edit/{pangkat}', 'PangkatController@edit');
		Route::post('pangkat/edit/{pangkat}', 'PangkatController@update');
		Route::get('pangkat/hapus/{pangkat}', 'PangkatController@hapus');
	
		Route::get('lokasikerja/tambah', 'LokasikerjaController@tambah');
		Route::get('lokasikerja', 'LokasikerjaController@awal');
		Route::get('lokasikerja/lihat/{lokasikerja}', 'LokasikerjaController@lihat');
		Route::post('lokasikerja/simpan', 'LokasikerjaController@simpan');
		Route::get('lokasikerja/edit/{lokasikerja}', 'LokasikerjaController@edit');
		Route::post('lokasikerja/edit/{lokasikerja}', 'LokasikerjaController@update');
		Route::get('lokasikerja/hapus/{lokasikerja}', 'LokasikerjaController@hapus');


		
		});
});

Route::get('/i', function () {
	return view('welcome');
});
Route::get('/a', function () {
	$tes = Auth::check() ? "Y":"N";
	return $tes;
});
Route::get('/b', function () {
	return view('index1');
});

/*Route::get('/login', function () {
    return view('login');
});*/