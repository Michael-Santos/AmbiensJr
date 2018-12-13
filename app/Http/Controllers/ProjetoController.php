<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projetos = Projeto::orderByRaw('id')->paginate(5);
        return view('dashboard/projetos/index', ["projetos" => $projetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/projetos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'estado' => 'required',
            'imagem' => 'image'
        ]);

        $projeto = new Projeto();

        $projeto->titulo = $request->titulo;
        $projeto->descricao = $request->descricao;
        $projeto->estado = $request->estado;

        if($request->hasFile('imagem')){
            $projeto->url_imagem = uniqid() . '.' . $request->imagem->extension();
            $request->imagem->storeAs('public/projetos', $projeto->url_imagem);
        }

        $projeto->save();

        return redirect()->route('projetos.index')->with('success', 'Projeto cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function publico()
    {
       $projetos = Projeto::all()->sortByDesc('titulo');
        return view('/projetos')->with("projetos", $projetos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projeto = Projeto::find($id);        
        return view('dashboard/projetos/edit')->with("projeto", $projeto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Project $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        $validatedData = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'estado' => 'required',
            'imagem' => 'image'
        ]);

        $projeto->titulo = $request->titulo;
        $projeto->descricao = $request->descricao;
        $projeto->estado = $request->estado;

        if($request->hasFile('imagem')){
            $projeto->deleteImagem();
            $projeto->url_imagem = uniqid() . '.' . $request->imagem->extension();
            $request->imagem->storeAs('public/projetos', $projeto->url_imagem);
        }

        $projeto->save();

        return redirect()->route('projetos.edit', $projeto)->with('success', 'Projeto editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projeto = Projeto::find($id);

        if($projeto->delete()) {
            return response()->json([
                'status' => 'success',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
            ]);
        }
    }
}
