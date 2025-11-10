<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UmurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// menampilkan output
Route::get('/profile', function () {
    return "Hallo saya sedang belajar Laravel";
});

// Menampilkan Halaman
Route::get('/halaman-contoh', function () {
    return view('halaman.contoh');
});

Route::get('/tujuanaja', function () {
    return view('halaman.tujuan');
})->name('halamantujuan');

// route dengan parameter 
// parameter wajib
Route::get('mobil/{param}', function ($param) {
    // $data = $param;
    // return "hallo saya punya mobil ".$param;

    // menampilkan di halaman contoh
    return view('halaman.contoh', compact('param'));
});

// optional parameter
Route::get('motor/{param?}', function ($param = 'honda') {
    return "hallo saya punya motor " . $param;
});

// group dibuat apabila ada prefix/middleware yang sama.

// list training
//  /training/programming/laravel
//  /training/programming/golang
//  /training/programming/webbasic
//  /training/programming/react
//  /training/networking/mtcna
//  /training/networking/ccna
//  /training/networking/mtcre

// group programming.
Route::prefix('training')->group(function () {

    // group untuk programming
    Route::prefix('programming')->group(function () {
        Route::get('laravel', function () {
            return "selamat datang di kelas laravel";
        })->name('kelas.laravel');
        Route::get('web-basic', function () {
            return "selamat datang di kelas web-basic";
        })->name('kelas.web-basic');
    });

    // prefix untuk networking
    Route::prefix('network')->group(function () {
        Route::get('mtcna', function () {
            return "selamat datang di kelas mtcna";
        })->name('kelas.mtcna');
        Route::get('mtcre', function () {
            return "selamat datang di kelas mtcre";
        })->name('kelas.mtcre');
    });
});


// Memanggil Route dengan action yang ada pada controller
Route::get('halaman-pertama', [PageController::class,'halamanPertama'])
->name('halaman.pertama');

Route::get('halaman-kedua', [PageController::class,'halamanKedua'])
->name('halaman.kedua');


// cetak dibaca sebagai parameter
Route::get('movie-cetak', [MovieController::class, 'cetakFilm'])->name('movie.cetak');

Route::resource('movie', MovieController::class);

// Route tentang umur 
Route::prefix('umur')->group(function(){

    // Halaman Form Umur
    Route::get('form-umur', [UmurController::class, 'form'])
    ->name('umur.form');

    // Halaman Tujuan
    Route::get('sukses', [UmurController::class, 'sukses'])
    ->middleware('umur')->name('umur.sukses');

    // Proses Membaca data umur
    Route::post('proses', [UmurController::class, 'proses'])
    ->name('umur.proses');

});



