<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conteudo;
use App\Slide;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conteudo_quem_somos = Conteudo::where('nome', "quem_somos")->first();
        $conteudo_missao = Conteudo::where('nome', "missao")->first();
        $conteudo_visao = Conteudo::where('nome', "visao")->first();
        $conteudo_valores = Conteudo::where('nome', "valores")->first();
        $slides = Slide::orderByRaw('id')->get();
        $num_slides = $slides->count();

        return view('home', [
            "conteudo_quem_somos" => $conteudo_quem_somos, 
            "conteudo_missao" => $conteudo_missao,
            "conteudo_visao" => $conteudo_visao,
            "conteudo_valores" => $conteudo_valores,
            "slides" => $slides,
            "num_slides" => $num_slides
        ]);
    }
}
