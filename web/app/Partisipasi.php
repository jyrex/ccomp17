<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partisipasi extends Model
{
    protected $table ='partisipasi';

    protected $fillable = [
        'NIM', 'id_tim',
    ];

}
