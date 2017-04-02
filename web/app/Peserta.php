<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';

    protected $fillable = [
        'NIM', 
        'nama_lengkap', 
        'id_prodi', 
        'ktm',
    ];

    public $timestamps = false;

    public function tim() {
        return $this->belongsToMany('App\User', 'partisipasi', 'NIM', 'id');
    }

    public function prodi() {
    	return $this->belongsTo('App\Prodi', 'id_prodi', 'id_prodi');
    }

    public function partisipasi() {
        return $this->hasMany('App\Partisipasi', 'NIM', 'NIM');
    }
}
