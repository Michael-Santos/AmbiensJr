@extends('layouts.admin.app')

@section('content')

<section id="cursos_abertos">
    <div class="container">
        <h1>Cursos Abertos</h1>
        <p class="text-justify"> Tabela de cursos em andamento. Por aqui pode-se mudar informações dos cursos ainda não concluídos, bem como acessar a lista de presença para alterá-la ou cadastrar mais participantes.</p>
        <div class="container">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Data</th>
                            <th scope="col">Vagas Limite</th>
                            <th scope="col">Inscritos</th>
                            <th scope="col">Valor</th>
                            <th scope="col" style="text-align: center;">Editar</th>
                            <th scope="col" style="text-align: center;">Lista de Presença</th>
                            <th scope="col" style="text-align: center;">Excluir</th>
                            <th scope="col" style="text-align: center;">Concluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <td>{{$curso->nome}}</td>
                            <td>{{$curso->data_evento}}</td>
                            @if($curso->numero_vagas == 0)
                            <td>Sem inscrição</td>
                            @else
                            <td>{{$curso->numero_vagas}}</td>
                            @endif
                            <td>{{$curso->}}</td>
                            <td>{{$curso->}}</td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/lista.png')}}" style="height: 25px"></td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection