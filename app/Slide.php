<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slides';

    protected $fillable = [
    	'id',
        'titulo',
        'descricao',
        'url_imagem'
    ];
}
