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
        $abertos = Evento::where('finalizado', '0')->orderby('data_evento')->get();
        $fechados = Evento::where('finalizado', '1')->orderby('data_evento')->get();
        return view('dashboard/cursos/index')->with('abertos', $abertos)->with('fechados', $fechados);
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
        if(!is_null($request->imagem)){
            $nome_img = uniqid() . '.' . $request->imagem->extension();
            $evento->url_imagem = $nome_img;
            $request->imagem->storeAs('public/eventos/', $nome_img);
        }else{
            $evento->url_imagem = null;
        }
    
        if($request->has('inscricao')) {
            $evento->inscricao = true;
            $evento->data_inicio_inscricao = $request->data_inicio_inscricao;
            $evento->hora_inicio_inscricao = $request->hora_inicio_inscricao;
            $evento->data_fim_inscricao = $request->data_fim_inscricao;
            $evento->hora_fim_inscricao = $request->hora_fim_inscricao;
            $evento->numero_vagas = $request->numero_vagas;
        }

        if($request->has('pagamento')) {
            $evento->pagamento = true;
            $evento->valor = $request->valor;
            if($request->has('pagamento_na_hora')) {
                $evento->pagamento_na_hora = true;
            }

            if($request->has('pagamento_antecipado')) {
                $evento->pagamento_antecipado = true;
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
        
    }

    public function publico()
    {
       $cursos = Evento::all()->sortByDesc('data_evento');
        return view('/cursos')->with("cursos", $cursos);
    }

    public function lista_abertos(){
        $cursos = Evento::where('finalizado', '0')->get();
        return view('dashboard/cursos/lista_abertos')->with("cursos", $cursos);
    }

    public function lista_fechados(){
        $cursos = Evento::where('finalizado', '1')->get();
        return view('dashboard/cursos/lista_fechados')->with("cursos", $cursos);
    }

    public function lista_presenca($id){
        $curso = Evento::find($id);
        return view('dashboard/cursos/lista_presenca')->with("cursos", $curso);
    }

    public function concluir($id){
        $curso = Evento::find($id);
        $curso->finalizado = true;
        $curso->save();
        $cursos = Evento::where('finalizado', '1')->get();
        return view('dashboard/cursos/lista_fechados')->with("cursos", $cursos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso = Evento::find($id);
        return view('dashboard/cursos/edit')->with("curso", $curso);
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
        
        $evento = Evento::find($id)->first();
        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        $evento->data_evento = $request->data_evento;
        $evento->hora_evento = $request->hora_evento;

        /* Tratar iamgem */
        if(!is_null($request->imagem)){
            $nome_img = uniqid() . '.' . $request->imagem->extension();
            $evento->url_imagem = $nome_img;
            $request->imagem->storeAs('public/eventos/', $nome_img);
        }else{
            $evento->url_imagem = null;
        }
    
        if($request->has('inscricao')) {
            $evento->inscricao = true;
            $evento->data_inicio_inscricao = $request->data_inicio_inscricao;
            $evento->hora_inicio_inscricao = $request->hora_inicio_inscricao;
            $evento->data_fim_inscricao = $request->data_fim_inscricao;
            $evento->hora_fim_inscricao = $request->hora_fim_inscricao;
            $evento->numero_vagas = $request->numero_vagas;
        }else{
            $evento->inscricao = false;
            $evento->data_inicio_inscricao = null;
            $evento->hora_inicio_inscricao = null;
            $evento->data_fim_inscricao = null;
            $evento->hora_fim_inscricao = null;
            $evento->numero_vagas = 0;
        }

        if($request->has('pagamento')) {
            $evento->pagamento = true;
            $evento->valor = $request->valor;
            if($request->has('pagamento_na_hora')) {
                $evento->pagamento_na_hora = true;
            }else{
                $evento->pagamento_na_hora = false;
            }

            if($request->has('pagamento_antecipado')) {
                $evento->pagamento_antecipado = true;
            }else{
                $evento->pagamento_antecipado = false;
            }
        }else{
            $evento->pagamento = false;
            $evento->valor = null;
            $evento->pagamento_na_hora = false;
            $evento->pagamento_antecipado = false;
        }

        $evento->save();

        return redirect()->route('eventos.index', $evento)->with('success', 'Curso cadastrado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);

        if($evento->delete()) {
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
