<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', function () {
    return view('halaman/view_home');
})->middleware('checkRole:admin');


//Route untuk Data Buku
Route::get('/buku', 'BukuController@bukutampil');

//Route untuk Data Mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@bukutampil');

//Route untuk Data Petugas
Route::get('/petugas', 'PetugasController@bukutampil');

//Route untuk Data Peminjaman
Route::get('/peminjaman', 'PeminjamanController@bukutampil');

Route::post('/buku/tambah','BukuController@bukutambah');

Route::put('/buku/edit/{idbuku}', 'BukuController@bukuedit');

Route::get('/buku/hapus/{idbuku}','BukuController@bukuhapus');

Route::get('/mahasiswa', 'MahasiswaController@mahasiswatampil');

Route::post('/mahasiswa/tambah','MahasiswaController@mahasiswatambah');

Route::put('/mahasiswa/edit/{idmahasiswa}', 'MahasiswaController@mahasiswaedit');

Route::get('/mahasiswa/hapus/{idmahasiswa}','MahasiswaController@mahasiswahapus');

Route::get('/petugas', 'PetugasController@petugastampil');

Route::post('/petugas/tambah','PetugasController@petugastambah');

Route::put('/petugas/edit/{idpetugas}', 'PetugasController@petugasedit');

Route::get('/petugas/hapus/{idpetugas}','PetugasController@petugashapus');

Route::get('/pinjam', 'PinjamController@pinjamtampil');

Route::post('/pinjam/tambah','PinjamController@pinjamtambah');

Route::put('/pinjam/edit/{idpinjam}', 'PinjamController@pinjamedit');

Route::get('/pinjam/hapus/{idpinjam}','PinjamController@pinjamhapus');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('halaman/view_pinjamtenan');
})->middleware('checkRole:user');//ojo diganti

Route::get('/pbuku', 'PBukuController@pinjamtampil');

Route::get('/pinjamtenan', 'PBukuController@pinjamtampil');
Route::post('/pinjamtenan/tambah','PBukuController@pinjamtambah');

// Route::get('/home', function () { return view('halaman/view_home'); })->middleware('checkRole:admin');
// Route::get('/pinjamtenan', function () { return view('halaman/view_pinjamtenan'); })->middleware('checkRole:user');
