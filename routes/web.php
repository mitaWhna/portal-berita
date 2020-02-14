<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Relasi
Route::get('penulis',function(){
	$penulis = \App\User::find(1);

	foreach ($penulis->artikel as $data) {
		echo "Judul : $data->judul<br>";
		echo "Deskripsi : $data->deskripsi<br>";
		echo "Slug : $data->slug";
		echo "<hr>";
	}
});

//Relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1',function(){

	# mencari mahasiswa dengan nim
	$mahasiswa = Mahasiswa::where('nim','=','101010');

	// menampilkan nama wali dari mahasiswa tsb
	return $mahasiswa->wali->nama; 
});
Route::get('relasi-2',function(){

	//mencari mahasiswa dengan nim
	$mahasiswa = Mahasiswa::where('nim','=','101010')->first();
});
Route::get('relasi-3',function(){
	// mencari dosen yang bernama abdul mustafa
	$dosen = Dosen::where('nama','=','Abdul Mustafa')->first();

	// menampilkan seluruh data mahasiswa daari dosen abdul mustafa
	foreach ($dosen->mahasiswa as $temp)
		echo '<li> Nama  : '. $temp->nama.
	         '<strong>' . $temp->nim . '</strong></li>';
});
Route::get('relasi-4',function(){
	#mencari data mahasiswa yang memiliki nama Syahrul
	$novay = Mahasiswa::where('nama','=','Syahrul')->first();
	//menampilkan seluruh data hobi yang bernama syahrul
	foreach ($novay->hobi as $temp)
		echo '<li>' .$temp->hobi . '</li>';
});
Route::get('relasi-5',function(){
	
	});

	Route::get('/home','HomeController@index')->name('home');
	Route::resource('siswa','SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('tabungan/report','TabunganController@jumlah_tabungan');
Route::resource('tabungan', 'TabunganController');

