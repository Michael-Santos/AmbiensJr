<?php

namespace App\Http\Controllers;

use App\Galeria;
use App\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

        if(!is_null($request->imgs_galeria)){
	        foreach ($request->imgs_galeria as $foto) {
	        	$nova_foto = new Foto();
	            $nova_foto->nome = uniqid() . '.' . $foto->extension();
	        	$nova_foto->galeria = $galeria->id;
	        	$foto->storeAs('public/galeria/' . $galeria->nome, $nova_foto->nome);

	            $nova_foto->save();
	        }
	    }else{
	    	Storage::disk('local')->makeDirectory('public/galeria/' . $galeria->nome);
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
    	$fotos = Galeria::find($id)->fotos;
        return view('dashboard/galeria/edit')->with("galeria", $galeria)->with("fotos", $fotos);
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

    	$validatedData = $request->validate([
            'galeria_nome' => 'required',
        ]);

        if($galeria->nome != $request->galeria_nome)
        {
        	Storage::move('public/galeria/'.$galeria->nome, 'public/galeria/'.$request->galeria_nome);
        	$galeria->nome = $request->galeria_nome;
        	$galeria->save();
        }

        return redirect()->route('galeria.edit', $galeria)->with('success', 'Galeria alterada com sucesso.');
    }

    public function updatefotos(Request $request, Galeria $galeria)
    {
    	if($galeria->nome != $request->galeria_nome)
        {
	    	foreach ($request->imgs_galeria as $foto) {
	        	$nova_foto = new Foto();
	            $nova_foto->nome = uniqid() . '.' . $foto->extension();
	        	$nova_foto->galeria = $galeria->id;
	        	$foto->storeAs('public/galeria/' . $galeria->nome, $nova_foto->nome);

	            $nova_foto->save();
	        }
    	}

        return redirect()->route('galeria.edit', $galeria)->with('success', 'Fotos adicionadas com sucesso.');
    }

    public function deletefoto(Request $request, $galeria, $foto)
    {
    	$remover = Foto::find($foto);
    	Log::info($remover);
    	//Storage::delete('public/galeria/' . $galeria . '/' . $remover->nome);
    	//$remover->delete();

    	return redirect()->route('galeria.edit', $galeria)->with('success', 'Foto removida com sucesso.');
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
        	Storage::deleteDirectory('public/galeria/' . $galeria->nome);
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
