@extends('layouts.app')

@section('content')
    <!-- Container geral para exibição do conteúdo do evento-->
    <div class="container border rounded pt-3 pb-3">
        <!-- Exibição de informações básicas do curso -->
        <div class="media pt-3" >
            <img class="align-self-start mr-3 rounded"src="{{asset ('img/placeholders/equipe.png')}}" style="width: 50%">
            <div class="media-body">
                <h2 class="mt-0">Curso 1 - Curso sobre curso</h2>
                <p> <b>Descrição do curso vai aqui:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate augue at erat dictum, at congue eros dignissim. Ut laoreet leo ut interdum varius. Aliquam pharetra cursus augue eu luctus. Quisque a pulvinar dui. Maecenas et suscipit odio. In elementum, metus at gravida fringilla, ligula ante vulputate eros, sed laoreet nisi justo non quam. Nam lorem est, interdum quis risus eget, tincidunt bibendum mi. </p>
            </div>
        </div>
        
        <!-- Botão com collapse para mais informações -->
        <a class="btn btn-outline-info mb-2" data-toggle="collapse" href="#ev_1" role="button" aria-expanded="false" aria-controls="ev_1">Clique para obter mais detalhes sobre este evento</a>
        
        <!-- Exibição de mais informações -->
        <div class="collapse" id="ev_1">
            <div class="card card-body">
                Data do Evento: XX/XX/XXXX <br>
                Inscrição: Sim (Não) - Valor: R$ XX,XX
                <button class="btn btn-success">Inscreva-se</button>
                <button class="btn btn-warning">Para se inscrever você deve estar logado</button>
            </div>
        </div>
    </div>

@endsection