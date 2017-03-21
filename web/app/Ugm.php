<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ugm extends Model
{
    protected $table = 'ugm';

    public function peserta() {
    	return $this->hasMany('App\Peserta');
    }
}
