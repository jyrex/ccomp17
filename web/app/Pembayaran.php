<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    public function tim() {
    	return $this->hasOne('App\User', 'id');
    }
}
