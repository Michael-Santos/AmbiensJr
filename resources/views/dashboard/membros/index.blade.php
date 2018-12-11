@extends('layouts.admin.app')

@section('content')

<section id="membros_index">
    <div class="container pt-3">
        <h1>Membros</h1>
        <p class="text-justify">Área destinada à edição de membros<br>
        Você pode verificar os membros e editar seus dados ou criar </p><a class="btn btn-secondary" href="{{ route('membros.create') }}">Novo Membro</a>


        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;"><img src="{{asset ('img/placeholders/no_photo.jpg')}}" style="height: 7%;"></td>
                        <td>Batatinha 1</td>
                        <td>Sim</td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><img src="{{asset ('img/placeholders/no_photo.jpg')}}" style="height: 7%;"></td>
                        <td>Batatinha 2</td>
                        <td>Não</td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection