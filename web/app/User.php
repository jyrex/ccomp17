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
        'lomba',
        'hp',
        'id_ketua',
        'submission',
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
        return $this->belongsToMany('App\Peserta', 'partisipasi', 'id', 'NIM');
    }

    public function partisipasi() {
        return $this->hasMany('App\Partisipasi', 'id_tim', 'id');
    }
}
