<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Slide extends Model
{
    protected $table = 'slides';

    protected $fillable = [
    	'id',
        'titulo',
        'descricao',
        'url_imagem'
    ];

    /**
     * Deletes the slide image
     * @return bool
     */

    public function deleteImagem()
    {
        if(Storage::disk('local')->exists('public/slides/' . $this->url_imagem)) {
        	Log::info("Deu bom");
            return Storage::disk('local')->delete('public/slides/' . $this->url_imagem);
        } else {
        	Log::info("Deu ruim");
            return false;
        }
    }

    /**
     * Deletes the Slide and their images
     * @return bool|null
     */

    public function delete(){
    	$this->deleteImagem();
        return parent::delete();
    }

    /**
     * Get the slide image
     * @return string
     */

    public function imagem()
    {
    	if($this->url_imagem == NULL || !Storage::disk('local')->exists('public/' . $this->url_imagem)) {
    		return '/img/no-logo-image-square.png';
    	} else {
    		return '/storage/slides/' . $this->url_imagem;
    	}
    }


}
