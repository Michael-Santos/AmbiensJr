<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
	protected $table = 'eventos_usuarios';

    protected $fillable = [
        'usuario_id', 
        'evento_id',
        'presenca'
    ];

}
