<?php

namespace App\Http\Controllers;

use App\ProcessoSeletivo;
use Illuminate\Http\Request;

class ProcessoSeletivoController extends Controller
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
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $processo_seletivo = ProcessoSeletivo::first();

        if(empty($processo_seletivo)) {
            $processo_seletivo = new ProcessoSeletivo();

            $processo_seletivo->save();
        }

        return view('dashboard/processo_seletivo/edit', ["processo_seletivo" => $processo_seletivo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcessoSeletivo $processo_seletivo)
    {
        $processo_seletivo->estado = $request->has('estado') ? true : false;
        $processo_seletivo->descricao = $request->descricao;
        $processo_seletivo->usa_descricao = $request->has('usa_descricao') ? true : false;
        $processo_seletivo->data_final = $request->data_final;
        $processo_seletivo->hora_final = $request->hora_final;
        $processo_seletivo->link_driver = $request->link_driver;
        $processo_seletivo->usa_descricao = $request->has('usa_link_driver') ? true : false;

        if($request->hasFile('pdf')) {
            $processo_seletivo->deletePdf();
            $processo_seletivo->url_pdf = uniqid() . '.' . $request->pdf->extension();
            $request->pdf->storeAs('public/processo_seletivo_pdf', $processo_seletivo->url_pdf);
        }

        $processo_seletivo->save();

        return redirect()->route('processo.edit')->with('success', 'Processo seletivo editado com sucesso');
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
