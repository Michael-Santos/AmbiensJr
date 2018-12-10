<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
	protected $table = 'projetos';

    /**
     * Deletes the Project image
     * @return bool
     */

    public function deleteImagem()
    {
        if(Storage::disk('local')->exists('public/projetos/' . $this->url_imagem)) {
            return Storage::disk('local')->delete('public/projetos/' . $this->url_imagem);
        } else {
            return false;
        }
    }

    /**
     * Deletes the Project and their images
     * @return bool|null
     */

    public function delete()
    {
    	$this->deleteImagem();
        return parent::delete();
    }

    /**
     * Get the Project image
     * @return string
     */

    public function imagem()
    {
    	if($this->url_imagem == NULL || !Storage::disk('local')->exists('public/projetos/' . $this->url_imagem)) {
    		return '/img/no-logo-image-square.png';
    	} else {
    		return '/storage/projetos/' . $this->url_imagem;
    	}
    }
}
