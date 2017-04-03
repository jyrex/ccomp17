<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengumuman;
use Auth;

class HomeController extends Controller
{
    public function index() {
    	$pengumuman = Pengumuman::where('lomba', '=', Auth::user()->lomba)
    		->orWhere('lomba', '=', 'Umum')
    		->orderBy('created_at', 'desc')
    		->get();
    	return view('tim.home',[
    		'pengumuman' => $pengumuman,
    		]);
    }
}
