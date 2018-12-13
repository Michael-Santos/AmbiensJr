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
        'email',
    	'link_facebook',
        'link_twitter',
        'link_instagram',
    	'setor'        
	];

	public function setor(){
		return $this->belongsTo('App\Setor', 'setor', 'id');
	}
}
