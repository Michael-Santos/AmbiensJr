<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
