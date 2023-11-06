<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatNilaiController extends Controller
{

    public function dataMahasiswa(){
        $mhs1 = 'fawwaz'; $asal1 = 'Jakarta';
        $mhs2 = 'inaya'; $asal2 = 'Depok';
        return view('coba.data', compact('mhs1','mhs2','asal1','asal2'));

    }
}