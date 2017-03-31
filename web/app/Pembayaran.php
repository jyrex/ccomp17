<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $fillable = [
    'id_tim',
    'bukti',
    ];

    public function tim() {
    	return $this->hasOne('App\User', 'id');
    }
}
