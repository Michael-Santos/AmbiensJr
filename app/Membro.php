<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membros';

    protected $fillable = [
    	'id',
    	'nome',
    	'cargo',
    	'link_facebook',
    	'setor'
	];

	public function setor(){
		return $this->belongsTo('App\Setor', 'setor', 'id');
	}


}
