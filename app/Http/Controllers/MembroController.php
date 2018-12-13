<?php

namespace App\Http\Controllers;

use App\Membro;
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
        $data['membros'] = Membro::orderByRaw('id')->paginate(5);
        return view('dashboard/membros/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/membros/create');
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

        $membro = new Membro();
        $membro->nome = $request->membro_nome;
        $membro->cargo = $request->cargo_membro;
        $membro->setor = $request->setor_membro;
        $membro->email = $request->email_membro;
        $membro->link_facebook = $request->facebook_membro;
        $membro->link_twitter = $request->twitter_membro;
        $membro->link_instagram = $request->instagram_membro;


        if(!is_null($request->imagem_membro)){
                $membro->imagem = uniqid() . '.' . $request->imagem_membro->extension();
                $request->imagem_membro->storeAs('public/membros/' . $membro->imagem);
        }

        $membro->save();

        return redirect()->route('membros.index')->with('success', 'Membro cadastrado com sucesso.');
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
        $membro = Membro::find($id);

        return view('dashboard/membro/edit')->with("membro", $membro);
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
        $membro = Membro::find($id);
        
        $membro->nome = $request->membro_nome;
        $membro->cargo = $request->cargo_membro;
        $membro->setor = $request->setor_membro;
        $membro->email = $request->email_membro;
        $membro->link_facebook = $request->facebook_membro;
        $membro->link_twitter = $request->twitter_membro;
        $membro->link_instagram = $request->instagram_membro;


        if(!is_null($request->imagem_membro)){
                $membro->imagem = uniqid() . '.' . $request->imagem_membro->extension();
                $request->imagem_membro->storeAs('public/membros/' . $membro->imagem);
        }

        $membro->save();

        return redirect()->route('membros.index')->with('success', 'Membro alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membro = Membro::find($id);
        if($membro->delete()) {
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
