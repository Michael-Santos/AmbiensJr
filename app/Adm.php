<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Adm extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'role_id'
    ];

    protected $hidden = [
        'senha'
    ];

    public function roles()
    {
    	return $this->belongsTo('App\Role', 'foreign_key');
    }
}
