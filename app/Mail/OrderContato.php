<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderContato extends Mailable
{
    use Queueable, SerializesModels;

    protected $nome;
    protected $email;
    protected $telefone;
    protected $assunto;
    protected $mensagem;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $email, $assunto, $mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->assunto = $assunto;
        $this->mensagem = $mensagem;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('michael@sou-foda.com.br')
                    ->replyTo($this->email)
                    ->subject($this->assunto)
                    ->view('mails.contato')
                    ->with([
                        'mailName' => $this->nome,
                        'mailEmail' => $this->email,
                        'mailMessage' => $this->mensagem,
                    ]);

    }
}
