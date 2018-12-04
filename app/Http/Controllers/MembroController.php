<?php

namespace App\Http\Controllers;

use App\Setor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nome' => 'required'
        ]);

        /* Verifica se existe o setor selecionado, caso não existe retorna erro, caso contrário salva */
        if (!empty($request->setor)){
            if ($existeSetor = DB::table('setores')->where('id', $request->setor)->doesntExist()){
                $response = array(
                  'status' => 'error',
                  'msg' => 'Não existe o setor informado'
                );
                return response()->json($response);
            }
        }

        $setor = new Membro();
        $setor->nome = $request->nome;
        $setor->
        $setor->save();

        $response = array(
          'status' => 'success',
          'msg' => 'Setor cadastrado com sucesso'
        );
        return response()->json($response);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
