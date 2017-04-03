<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    public $primaryKey = 'id_pembayaran';
    protected $fillable = [
    'id_tim',
    'bukti',
    'keterangan',
    ];

    public function tim() {
    	return $this->hasOne('App\User', 'id');
    }
}
