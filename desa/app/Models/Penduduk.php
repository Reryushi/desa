<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Penduduk extends Authenticatable
{
    use Notifiable;

    protected $table = 'penduduk';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function surat_ket_pengantar()
    {
        return $this->hasMany('App\Model_Layanan\KeteranganPengantar');
    }

    public function surat_ket_penduduk()
    {
        return $this->hasMany('App\Model_Layanan\KeteranganPenduduk');
    }

    public function surat_ket_kepolisian()
    {
        return $this->hasMany('App\Model_Layanan\KeteranganKepolisian');
    }
}
