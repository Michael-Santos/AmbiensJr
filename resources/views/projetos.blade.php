@extends('layouts.app')

@section('content')

<div class="container">
        @foreach($projetos as $projeto)
        <!-- Container geral para exibição do conteúdo do evento-->
        <div class="container border rounded pt-3 pb-3">
            <!-- Exibição de informações básicas do curso -->
            <div class="media pt-3 mb-3" >
                @if($projeto->url_imagem == null)
                <img class="align-self-start mr-3 rounded"src="{{asset ('img/placeholders/equipe.png')}}" style="width: 50%">
                @else
                <img class="align-self-start mr-3 rounded"src="{{asset ('storage/projetos/' . $projeto->url_imagem)}}" style="width: 50%">
                @endif
                <div class="media-body">
                    <h2 class="mt-0">{{$projeto->titulo}}</h2>
                    <p>{{$projeto->descricao}}</p>
                    <p>Estado: {{$projeto->estado}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection()