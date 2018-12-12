@extends('layouts.admin.app')

@section('content')

<section id="cursos_db_home">
    <div class="container pt-3">
        <div class="container">
            <h1>Cursos</h1>
            <p class="text-justify">Área destinada à cursos<br>
            Escolha uma das seguintes opções ou veja a lista de cursos abaixo.<br></p>

            <div class="container px-0">
                <a class="btn btn-primary" href="{{ route('cursos.create') }}">Criar Curso</a>
                <a class="btn btn-primary" href="{{ route('cursos.lista_abertos') }}">Curso Abertos</a>
                <a class="btn btn-primary" href="{{ route('cursos.lista_fechados') }}">Curso Finalizados</a>
            </div>            
        </div>

        <div class="container my-3">
            <h3>Cursos em Andamento</h3>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Data</th>
                            <th scope="col">Inscrição</th>
                            <th scope="col">Pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($abertos as $aberto)
                        <tr>
                            <td>{{$aberto->nome}}</td>
                            <td>{{$aberto->data_evento}}</td>

                            @if($aberto->inscricao == true)
                            <td>Sim</td>
                            @elseif($aberto->inscricao == false)
                            <td>Não</td>
                            @endif

                            @if($aberto->pagamento == true)
                            <td>Sim</td>
                            @elseif($aberto->pagamento == false)
                            <td>Não</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container">
            <h3>Cursos Finalizados</h3>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Data</th>
                            <th scope="col">Inscrição</th>
                            <th scope="col">Pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fechados as $fechado)
                        <tr>
                            <td>{{$fechado->nome}}</td>
                            <td>{{$fechado->data_evento}}</td>

                            @if($fechado->inscricao == true)
                            <td>Sim</td>
                            @elseif($fechado->inscricao == false)
                            <td>Não</td>
                            @endif

                            @if($fechado->pagamento == true)
                            <td>Sim</td>
                            @elseif($fechado->pagamento == false)
                            <td>Não</td>
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