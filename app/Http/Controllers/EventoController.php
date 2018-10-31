<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
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
        return view('eventos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'incricao' => 'boolean',
            'data_evento' => 'required|date_format:Y-m-d',
            'hora_evento' => 'required|date_format:H:i',
            'data_inscricao' => 'required|date_format:Y-m-d',
            'hora_inscricao' => 'required|date_format:H:i',
            'imagem' => 'image'
        ]);

        $evento = new Evento();
        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->incricao = 1;
        $evento->data_evento = $request->data_evento;
        $evento->hora_evento = $request->hora_evento;
        $evento->data_inscricao = $request->data_inscricao;
        $evento->hora_inscricao = $request->hora_inscricao;
        $evento->imagem = null;

        $evento->save();
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
