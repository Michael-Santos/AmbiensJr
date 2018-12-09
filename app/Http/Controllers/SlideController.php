<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['slides'] = Slide::orderByRaw('id')->paginate(5);
        return view('dashboard/slides/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/slides/create');
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
            'titulo_slide' => 'required',
            'descricao_slide' => 'required',
            'img_slide' => 'image | required'
        ]);

        $slide = new Slide();
        $slide->titulo = $request->titulo_slide;
        $slide->descricao = $request->descricao_slide;
        
        $slide->url_imagem = uniqid() . '.' . $request->img_slide->extension();
        $request->img_slide->storeAs('public/slides', $slide->url_imagem);

        $slide->save();

        return redirect()->route('slides.index', $slide)->with('success', 'Slide cadastrado com sucesso.');
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
        $slide = Slide::find($id);        
        return view('dashboard/slides/edit')->with("slide", $slide);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        $validatedData = $request->validate([
            'titulo_slide' => 'required',
            'descricao_slide' => 'required',
            'img_slide' => 'image'
        ]);

        $slide->titulo = $request->titulo_slide;
        $slide->descricao = $request->descricao_slide;
        
        
        if($request->hasFile('img_slide')) {
            $slide->deleteImagem();
            $slide->url_imagem = uniqid() . '.' . $request->img_slide->extension();
            $request->img_slide->storeAs('public/slides', $slide->url_imagem);
        }

        $slide->save();

        return redirect()->route('slides.edit', $slide)->with('success', 'Slide alterado com sucesso.');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);

        if($slide->delete()) {
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
