<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submission';

    public function tim() {
    	return $this->belongsTo('App\User', 'id_tim');
    }
}
