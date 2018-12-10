<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $table = 'conteudos';

    protected $primaryKey = 'nome';

    protected $fillable = [
    	'nome',
    	'conteudo'
    ];
}
