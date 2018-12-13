<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conteudo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conteudo_quem_somos = Conteudo::where('nome', "quem_somos")->get();
        $conteudo_missao = Conteudo::where('nome', "missao")->get();
        $conteudo_visao = Conteudo::where('nome', "visao")->get();
        $conteudo_valores = Conteudo::where('nome', "valores")->get();

        return view('home', [
            "quem_somos" => $conteudo_quem_somos, 
            "missao" => $conteudo_missao,
            "visao" => $conteudo_visao,
            "valores" => $conteudo_valores
        ]);
    }
}
