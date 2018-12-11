<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$galeria['galerias'] = Galeria::orderByRaw('id')->paginate(5);
        return view('dashboard/galeria/index', $galeria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/galeria/create');
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

        $validatedData = $request->validate([
            'galeria_nome' => 'required',
        ]);

        $galeria = new Galeria();
        $galeria->nome = $request->galeria_nome;

        $galeria->save();

        foreach ($request->imgs_galeria as $foto) {
        	$nova_foto = new Foto();
        	Log::info("Criado objeto de foto");
            $nova_foto->nome = uniqid() . '.' . $foto->extension();
        	$nova_foto->galeria = $galeria->id;
        	$foto->storeAs('public/galeria/' , $nova_foto->nome);
            Log::info($nova_foto->nome . " salva");

            $nova_foto->save();
        }

        return redirect()->route('galeria.index')->with('success', 'Galeria cadastrada com sucesso.');
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
    	$galeria = Galeria::find($id);   
        return view('dashboard/galeria/edit')->with("galeria", $galeria);
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
    	$galeria = Galeria::find($id);

        return redirect()->route('galeria.edit', $galeria)->with('success', 'Galeria alterada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = Galeria::find($id);

        if($galeria->delete()) {
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
