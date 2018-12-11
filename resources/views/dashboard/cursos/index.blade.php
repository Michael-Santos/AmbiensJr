@extends('layouts.admin.app')

@section('content')

<section id="cursos_db_home">
    <div class="container pt-3 border">
        <div class="container">
            <h1>Cursos</h1>
            <p class="text-justify">Área destinada à cursos<br>
            Escolha uma das seguintes opções ou veja a lista de cursos abaixo.<br></p>

            <div class="container px-0">
                <a class="btn btn-primary" href="{{ url('admin/cursos_cadastro') }}">Criar Curso</a>
                <a class="btn btn-primary" href="{{ url('admin/cursos_abertos') }}">Curso Abertos</a>
                <a class="btn btn-primary" href="{{ url('admin/cursos_historico') }}">Curso Finalizados</a>
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
                        <a href="{{ url('admin/cursos_abertos') }}">
                            <tr>
                                <td>Curso 1</td>
                                <td>XX/XX/XX</td>
                                <td>Sim</td>
                                <td>Sim</td>
                            </tr>
                        </a>
                        <tr>
                            <td>Curso 2</td>
                            <td>XX/XX/XX</td>
                            <td>Não</td>
                            <td>Não</td>
                        </tr>
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
                        <tr>
                            <td>Curso 1</td>
                            <td>XX/XX/XX</td>
                            <td>Sim</td>
                            <td>Sim</td>
                        </tr>
                        <tr>
                            <td>Curso 2</td>
                            <td>XX/XX/XX</td>
                            <td>Não</td>
                            <td>Não</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</section>

@endsection