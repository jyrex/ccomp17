<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';

    public function tim() {
        return $this->belongsToMany('App\User', 'partisipasi');
    }

    public function prodi() {
    	return $this->belongsTo('App\Ugm', 'id_prodi');
    }
}
