<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';

    public $primaryKey = 'id_peng';

    protected $fillable = [
    'lomba',
    'judul',
    'isi',
    ];
}
