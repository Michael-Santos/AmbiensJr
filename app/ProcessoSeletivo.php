<?php

namespace App;

use Storage;
use Illuminate\Database\Eloquent\Model;

class ProcessoSeletivo extends Model
{
    protected $table = 'processos_seletivos';

    /**
     * Deletes the pdf file
     * @return bool
     */

    public function deletePdf()
    {
    	if(Storage::disk('local')->exists('public/processo_seletivo_pdf/' . $this->url_pdf)) {
    		return Storage::disk('local')->delete('public/processo_seletivo_pdf/' . $this->url_pdf);
    	} else {
    		return false;
    	}
    } 

    /**
	* Get the check state for estado, descricao, pdf and link
	* @return checked or ""
    */

	public function exibeEstado()
	{
		return $this->estado ? "checked" : "" ;
	}

	public function exibeDescricao()
	{
		return $this->usa_descricao ? "checked" : "" ;
	}   	

	public function exibePdf()
	{
		return $this->usa_pdf ? "checked" : "" ;
	}

    public function exibeLink()
    {
    	return $this->usa_link_driver ? "checked" : "" ;
    }
}
