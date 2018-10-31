<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
	$table = 'eventos_usuarios';
    protected $fillable = [
        'usuario_id', 'evento_id', 'inscricao',
    ];

}
