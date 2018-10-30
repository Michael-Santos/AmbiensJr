<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{
    protected $fillable = [
        'nome', 'email', 'senha', 'role_id',
    ];
}
