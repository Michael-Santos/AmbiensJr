<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function adms()
    {
    	return $this->hasMany('App\Adm');
    }
}
