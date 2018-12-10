@extends('layouts.admin.app')

@section('content')

<section id="cursos_db_home">
    <div class="container">
        <h1>Cursos</h1>
        <p class="text-justify">Área destinada à edição de membros<br>
        Você pode verificar os membros e editar seus dados ou criar </p><a class="btn btn-secondary" href="{{ route('membros.create') }}">Novo Membro</a>


        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
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