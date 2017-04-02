<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partisipasi extends Model
{
    protected $table ='partisipasi';

    protected $fillable = [
        'NIM', 'id_tim',
    ];
    
    public function peserta() {
        return $this->belongsTo('App\Peserta', 'NIM', 'NIM');
    }

    public function tim() {
        return $this->belongsTo('App\User', 'id', 'id_tim');
    }
    
}
