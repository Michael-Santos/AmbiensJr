@extends('layouts.app')

@section('content')

<section id="eventos_db_home">
    <div class="container">
        <h1>Cursos</h1>
        <p>Área destinada à cursos<br>
        Escolha uma das seguintes opções ou veja a lista de cursos abaixo:</p>

        <div class="container">
            <a class="btn btn-secondary" href="{{ url('admin/cursos_cadastro') }}">Criar Curso</a>
            <a class="btn btn-secondary">Curso Abertos</a>
            <a class="btn btn-secondary">Curso Finalizados</a>
        </div>

        <div class="table-responsive mt-3">
            <table class="table tables-triped">
                <thead>
                    <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Data</th>
                        <th scope="col">Finalizado</th>
                        <th scope="col">Com Vagas</th>
                        <th scope="col">Pago</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Curso 1</td>
                        <td>XX/XX/XX</td>
                        <td>Sim</td>
                        <td>Sim</td>
                        <td>Sim</td>
                    </tr>
                    <tr>
                        <td>Curso 2</td>
                        <td>XX/XX/XX</td>
                        <td>Não</td>
                        <td>Não</td>
                        <td>Não</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection