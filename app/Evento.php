<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'data_evento',
        'hora_evento',
        'inscricao',
        'pagamento',
        'url_imagem',
        'inscritos',
        'valor',
        'data_inicio_inscricao',
        'hora_inicio_inscricao',
        'data_fim_inscricao',
        'hora_fim_inscricao',
        'numero_vagas',
        'pagamento_na_hora',
        'pagamento_antecipado',
        'finalizado'
    ];

    public function usuarios()
    {
    	return $this->belongsToMany('App\Usuario', 'eventos_usuarios', 'evento_id', 'usuario_id');
    }
}