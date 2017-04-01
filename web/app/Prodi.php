<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'program_studi';

    public function fakultas() {
    	return $this->belongsTo('App\Fakultas', 'id_fak', 'id_fak');
    }

    public function peserta() {
    	return $this->hasMany('App\Peserta', 'id_prodi', 'id_prodi');
    }
}
