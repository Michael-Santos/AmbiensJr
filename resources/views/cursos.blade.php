@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($cursos as $curso)
        <!-- Container geral para exibição do conteúdo do evento-->
        <div class="container border rounded pt-3 pb-3">
            <!-- Exibição de informações básicas do curso -->
            <div class="media pt-3 mb-3" >
                @if($curso->url_imagem == null)
                <img class="align-self-start mr-3 rounded"src="{{asset ('img/placeholders/equipe.png')}}" style="width: 50%">
                @else
                <img class="align-self-start mr-3 rounded"src="{{asset ('storage/eventos/' . $curso->url_imagem)}}" style="width: 50%">
                @endif
                <div class="media-body">
                    <h2 class="mt-0">{{$curso->nome}}</h2>
                    <p>{{$curso->descricao}}</p>
                </div>
            </div>
            
            <!-- Botão com collapse para mais informações -->
            <a class="btn btn-outline-info mb-2" data-toggle="collapse" href="#{{'ev' . $curso->id}}" role="button" aria-expanded="false" aria-controls="{{'ev' . $curso->id}}">Clique para obter mais detalhes sobre este evento</a>
            
            <!-- Exibição de mais informações -->
            <div class="collapse" id="{{'ev' . $curso->id}}">
                <div class="card card-body">
                    Data do Evento: {{$curso->data_evento}} às {{$curso->hora_evento}}<br>
                    @if($curso->inscricao == true)
                        Inscrição: Sim
                        @if($curso->pagamento == true)
                            - Valor: R$ {{$curso->valor}} (
                            @if($curso->pagamento_na_hora == true && $curso->pagamento_antecipado == true)
                                Na hora / Antecipado
                            @elseif($curso->pagamento_antecipado == true)
                                Antecipado
                            @else
                                Na hora
                            @endif
                                )
                        @else
                            (Gratuito)
                        @endif
                    @else
                        Sem Inscrições
                    @endif

                    @if($curso->inscricao == true)
                    <button class="btn btn-success">Inscreva-se</button>
                    <button class="btn btn-danger" disabled>Sem vagas</button>
                    <button class="btn btn-warning">Para se inscrever você deve estar logado</button>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection