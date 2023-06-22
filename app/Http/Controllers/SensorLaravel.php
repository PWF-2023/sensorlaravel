<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class SensorLaravel extends Controller
{
    public function bacasuhu()
    {
        //baca nilai /isi tabel tb_sensor dan ambil nilai suhu
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan baca suhu (buat vie bacasuhu)
        return view('bacasuhu', ['nilaisensor' => $sensor]);
    }

    public function bacakelembaban()
    {
        //baca nilai /isi tabel tb_sensor dan ambil nilai suhu
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan baca suhu (buat vie bacasuhu)
        return view('bacakelembaban', ['nilaisensor' => $sensor]);
    }

    public function simpansensor()
    {
        MSensor::where('id', '1')->update(['suhu' => request()->nilaisuhu, 'kelembaban' => request()->nilaikelembaban]);
    }
}
