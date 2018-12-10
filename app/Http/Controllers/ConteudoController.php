<?php

namespace App\Http\Controllers;

use App\Conteudo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ConteudoController extends Controller
{
	/**
     * Gets the Conteudo form
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    	$conteudo_quem_somos = Conteudo::where('nome', "quem_somos")->firstOrCreate(
    		['nome' => 'quem_somos'],
    		['conteudo' => '']
    	);

    	$conteudo_missao = Conteudo::where('nome', "missao")->firstOrCreate(
    		['nome' => 'missao'],
    		['conteudo' => '']
    	);

    	$conteudo_visao = Conteudo::where('nome', "visao")->firstOrCreate(
    		['nome' => 'visao'],
    		['conteudo' => '']
    	);

    	$conteudo_valores = Conteudo::where('nome', "valores")->firstOrCreate(
    		['nome' => 'valores'],
    		['conteudo' => '']
    	);

        return view('dashboard/conteudo/index', [
        	"quem_somos" => $conteudo_quem_somos, 
        	"missao" => $conteudo_missao,
        	"visao" => $conteudo_visao,
        	"valores" => $conteudo_valores
    	]);
    }

    /**
     * Updates Quem Somos text
     *
     * @return \Illuminate\Http\Response
     */

    public function quem_somos(Request $request)
    {
        $conteudo_quem_somos = Conteudo::where('nome', "quem_somos")->firstOrNew(
    		['nome' => 'quem_somos'],
    		['conteudo' => '']
    	);

    	$conteudo_quem_somos->conteudo = $request->conteudo;
    	$conteudo_quem_somos->save();

    	return redirect()->route('conteudo.index')->with('success', 'Quem somos foi alterado com sucesso.');      
    }

    /**
     * Updates Missão text
     *
     * @return \Illuminate\Http\Response
     */

    public function missao(Request $request)
    {
        $conteudo_missao = Conteudo::where('nome', "missao")->firstOrNew(
    		['nome' => 'missao'],
    		['conteudo' => '']
    	);

    	$conteudo_missao->conteudo = $request->conteudo;
    	$conteudo_missao->save();

    	return redirect()->route('conteudo.index')->with('success', 'Missão foi alterada com sucesso.');
    }

    /**
     * Updates Visão text
     *
     * @return \Illuminate\Http\Response
     */

    public function visao(Request $request)
    {
        $conteudo_visao = Conteudo::where('nome', "visao")->firstOrNew(
    		['nome' => 'visao'],
    		['conteudo' => '']
    	);

    	$conteudo_visao->conteudo = $request->conteudo;
    	$conteudo_visao->save();

    	return redirect()->route('conteudo.index')->with('success', 'Visão foi alterada com sucesso.');
    }

    /**
     * Updates Valores text
     *
     * @return \Illuminate\Http\Response
     */

    public function valores(Request $request)
    {
        $conteudo_valores = Conteudo::where('nome', "valores")->firstOrNew(
    		['nome' => 'valores'],
    		['conteudo' => '']
    	);

    	$conteudo_valores->conteudo = $request->conteudo;
    	$conteudo_valores->save();

    	return redirect()->route('conteudo.index')->with('success', 'Valores foi alterado com sucesso.');
    }
}
