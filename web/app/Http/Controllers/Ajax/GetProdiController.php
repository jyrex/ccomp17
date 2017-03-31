<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prodi;

class GetProdiController extends Controller
{
    public function get_prodi($fak_id) {
    	$prodi = Prodi::where('id_fak', '=', $fak_id)->get();
    	return $prodi;
    }
}