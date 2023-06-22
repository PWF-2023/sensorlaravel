<?php

use Illuminate\Support\Facades\Route;
// panggil controller SensorLaravel
use App\Http\Controllers\SensorLaravel;

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
    return view('monitoring');
});

// route untuk baca suhu
Route::get('/bacasuhu', [SensorLaravel::class, 'bacasuhu']);
//route untuk kelembaban
Route::get('/bacakelembaban', [SensorLaravel::class, 'bacakelembaban']);
// route untuk menyimpan nilai sensor ke tb_sensor
Route::get('/simpan/{nilaisuhu}/{nilaikelembaban}', [SensorLaravel::class, 'simpansensor']);
