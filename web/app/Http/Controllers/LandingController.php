<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengumuman;

class LandingController extends Controller
{
    public function pengumuman() 
    {
    	$pengumuman = Pengumuman::where('lomba', '=', 'Umum')
    		->orderBy('created_at', 'desc')
    		->take(1)
    		->get();
    	return view('landing',[
    		'pengumuman' => $pengumuman,
    		]);
    }
}
