<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'fotos';

    protected $fillable = [
    	'id',
        'galeria',
        'nome'
    ];

    /**
     * Obtém todos os membros de um setor
     * @return App\Membro collection
     */

    public function Galeria()
    {
    	return $this->belongsTo('App\Galeria', 'foreign_key');
    }
}
