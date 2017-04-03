<?php

namespace App\Http\Controllers\Tim;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Fakultas;

class TambahAnggotaController extends Controller
{
    public function tambah_anggota() 
    {
        $fakultas = Fakultas::all();
        return view('tim.anggota.tambah', [
            'fakultas' => $fakultas,
            ]);
    }

}
