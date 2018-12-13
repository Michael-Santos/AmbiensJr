<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\OrderContato;


class ContatoController extends Controller
{
    /**
     * Store the incoming contact message.
     *
     * @param  StoreContactMessage  $request
     * @return Response
     */
    public function store(Request $request)
    {
       
        $nome = $request->input('nome');
        $email = $request->input('email');
        $assunto = $request->input('assunto');
        $mensagem = $request->input('mensagem');

        Mail::to('michael-santos@outlook.com.br')->queue(new OrderContato($nome, $email, $assunto, $mensagem));

        if(Mail::failures()) {
            return redirect()->route('contato')->withInput()->withErrors(['error' => 'Não foi possível enviar o email']);
        } else {
            return redirect()->route('contato')->with(['success' => 'O email foi enviado com sucesso']);
        }
    }

}
