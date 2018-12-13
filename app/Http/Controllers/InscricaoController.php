<?php

namespace App\Http\Controllers;

use App\Inscricao;
use App\Evento;
use Illuminate\Http\Request;

class InscricaoController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($user, $curso)
    {
        $evento = Evento::find($curso);

        if(($evento->inscricao == true) && ($evento->numero_vagas == $inscritos)){
            return redirect()->route('cursos')->with('error', 'Erro, sem vagas.');
        }else{
            $inscricao = new Inscricao();
            $inscricao->usuario_id = $user;
            $inscricao->curso_id = $curso;
            $inscricao->save();
            return redirect()->route('cursos')->with('success', 'Curso cadastrado com sucesso.');
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($curso)
    {
        $lista = Inscricao::where('usuario_id' => $user);
        return view('dashboard/cursos/lista_presenca')->with("lista", $lista);
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
    public function update($curso, $user, $mode)
    {

        $att = Inscricao::where(['usuario_id' => $user, 'evento_id' => $curso]);
        //mode 1 é prenca, outro é ausencia
        if($mode == 1){
            $att->presenca = true;
        }else{
            $att->presenca = false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($curso, $user)
    {
        $remov = Inscricao::where(['usuario_id' => $user, 'evento_id' => $curso]);
        $remov->delete();
    }
}
