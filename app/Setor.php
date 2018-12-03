<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setores';

    protected $fillable = [
    	'id',
        'nome'
    ];

    /**
     * Obtém todos os membros de um setor
     * @return App\Membro collection
     */

    public function membros(){
    	return $this->hasMany('App\Membro', 'setor', 'id');
    }

}
