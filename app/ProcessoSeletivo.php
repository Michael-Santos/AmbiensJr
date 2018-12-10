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


    public function deletePdf(){
    	if($this->usa_pdf && Storage::disk('local')->exists('public/processo_seletivo_pdf/' . $this->url_pdf)) {
    		return Storage::disk('local')->delete('public/processo_seletivo_pdf/' . $this->url_pdf);
    	} else {
    		return false;
    	}
    } 

    /**
	* Get the check state for desricao, pdf and link
	* @return checked or ""
    */

	public function exibe_descricao()
	{
		return $this->usa_descricao ? "checked" : "" ;
	}   	

	public function exibe_pdf()
	{
		return $this->usa_pdf ? "checked" : "" ;
	}

    public function exibe_link()
    {
    	return $this->usa_link_driver ? "checked" : "" ;
    }
}
