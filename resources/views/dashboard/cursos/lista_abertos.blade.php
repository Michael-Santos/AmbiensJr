@extends('layouts.admin.app')

@section('content')

<section id="cursos_abertos">
    <div class="container pt-3">
        <h1>Cursos Abertos</h1>
        <p>Tabela de cursos em andamento.<br>
        Você pode alterar informações ou acessar as listas de presença</p>

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
                                <td>Sem inscrição</td>
                            @else
                                <td>{{$curso->numero_vagas}}</td>
                                <td>{{$curso->incritos}}</td>
                            @endif

                            @if($curso->pagamento == false)
                                <td>Gratuito</td>
                            @else
                                <td>{{$curso->valor}}</td>
                            @endif
                            <td style="text-align: center;">
                                <a href="{{ route('cursos.edit', $curso->id) }}">
                                    <img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('cursos.lista_presenca', $curso->id) }}">
                                    <img src="{{asset ('img/icones/lista.png')}}" style="height: 25px">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('cursos.destroy', $curso->id) }}">
                                    <img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('cursos.concluir', $curso->id) }}">
                                    <img src="{{asset ('img/icones/concluir.png')}}" style="height: 25px">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</section>
@endsection