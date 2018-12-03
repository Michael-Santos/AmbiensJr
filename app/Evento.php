<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'inscricao',
        'data_evento',
        'hora_evento',
        'data_incricao',
        'hora_inscricao'
    ];

    public function usuarios()
    {
    	return $this->belongsToMany('App\Usuario', 'eventos_usuarios', 'evento_id', 'usuario_id');
    }
}