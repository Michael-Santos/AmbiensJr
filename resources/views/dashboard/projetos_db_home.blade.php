@extends('layouts.app')

@section('content')

<section id="cursos_db_home">
    <div class="container">
        <h1>Cursos</h1>
        <p class="text-justify">Área destinada à Projetos<br>
        Nesta área você pode: <a class="btn btn-outline-primary btn-sm" href="{{ url('admin/projetos_cadastro') }}">Adicionar um Projeto</a><br>
        Ou então buscar por projetos existente abaixo para editar ou excluir</p>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Projeto</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Projeto 1</td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                    </tr>
                    <tr>
                        <td>Projeto 2 agdkhagkdgaiks</td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection