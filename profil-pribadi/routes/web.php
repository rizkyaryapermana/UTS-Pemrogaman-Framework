<?php

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
Route::get('/', function () {
    return view ( 'home',[
"image" => 'arya.jpeg'
    
]);
});
Route::get('/biodata', function () {
    return view ('biodata',[
        "nama" => "Rizky Arya Permana",
        "nim" => "190451397045",
        "prodi" => "D4 Manajemen Informatika",
        "email" => "rizkyarya.19045@mhs.unesa.ac.id",
        "tempatlahir" => "Surabaya",
        "tanggallahir" => "7 Juni 2000",
        "image" => 'arya.jpg'

    ]);
});
