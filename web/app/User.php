<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tim', 
        'email', 
        'password', 
        'lomba_diikuti',
        'hp',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pembayaran() {
        return $this->hasOne('App\Pembayaran');
    }

    public function peserta() {
        return $this->belongsToMany('App\Peserta', 'partisipasi');
    }

    public function submission() {
        return $this->hasMany('App\submission');
    }
}
