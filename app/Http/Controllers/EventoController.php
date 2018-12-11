<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/cursos/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/cursos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info($request);


        $validateData = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'data_evento' => 'required|date_format:Y-m-d',
            'hora_evento' => 'required|date_format:H:i',
            'imagem' => 'image',
            
            'data_inicio_inscricao' => 'nullable|date_format:Y-m-d',
            'hora_inicio_inscricao' => 'nullable|date_format:H:i',
            'data_fim_inscricao' => 'nullable|date_format:Y-m-d',
            'hora_fim_inscricao' => 'nullable|date_format:H:i',
            'numero_vagas' => 'nullable|integer',

            'valor' => 'nullable|integer'
        ]);
        
        $evento = new Evento();
        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->data_evento = $request->data_evento;
        $evento->hora_evento = $request->hora_evento;

        /* Tratar iamgem */
        if($request->hasFile('imagem')) {

        }
    
        if($request->has('inscricao')) {
            $evento->data_inicio_inscricao = $request->data_inicio_inscricao;
            $evento->hora_inicio_inscricao = $request->hora_inicio_inscricao;
            $evento->data_fim_inscricao = $request->data_fim_inscricao;
            $evento->hora_fim_inscricao = $request->hora_fim_inscricao;
            $evento->numero_vagas = $request->numero_vagas;
        }

        if($request->has('pagamento')) {
            if($request->has('pagamento_na_hora')) {
                $evento->pagamento_na_hora = true;
            }

            if($request->has('pagamento_andiatado')) {
                $evento->pagamento_andiatado = true;
            }
        }

        $evento->save();

        return redirect()->route('eventos.index', $evento)->with('success', 'Curso cadastrado com sucesso.');
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
