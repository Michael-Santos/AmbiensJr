@extends('layouts.admin.app')

@section('content')

<section id="cursos_historico">
    <div class="container pt-3">
        <h1>Cursos Realizados</h1>
        <p class="text-justify"> Tabela de cursos já concluídos e seus dados</p>
        <div class="container">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Data</th>
                            <th scope="col">Vagas Limite</th>
                            <th scope="col">Inscritos</th>
                            <th scope="col">Presentes</th>
                            <th scope="col">Ausentes</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Valor Adquirido</th>
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
                                <td>Sem inscrição</td>
                                <td>Sem inscrição</td>
                            @else
                                <td>{{$curso->numero_vagas}}</td>
                                <td>{{$curso->incritos}}</td>
                                <td>{{$curso->incritos}}</td>
                                <td>{{$curso->incritos}}</td>
                            @endif

                            @if($curso->pagamento == false)
                                <td>Gratuito</td>
                                <td>Nenhum</td>
                            @else
                                <td>{{$curso->valor}}</td>
                                <td>{{$curso->valor * $curso->incritos}}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection