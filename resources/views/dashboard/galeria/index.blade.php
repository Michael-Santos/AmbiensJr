@extends('layouts.admin.app')

@section('content')

<section id="cursos_db_home">
    <div class="container">
        <h1>Galeria</h1>
        <p class="text-justify">Área destinada à Galeria<br>
        Nesta área você pode: <a class="btn btn-outline-primary btn-sm" href="{{ url('admin/galeria_cadastro') }}">Adicionar uma Galeria</a><br>
        Ou então buscar por galerias existente abaixo para editar ou excluir</p>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Galeria</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Galeria 1</td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                    </tr>
                    <tr>
                        <td>Galeria 2</td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection