<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = 'galerias';

    protected $fillable = [
    	'id',
        'nome'
    ];

    public function fotos()
    {
        return $this->hasMany('App\Foto');
    }
}
