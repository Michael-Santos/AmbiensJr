@extends('layouts.app')

@section('content')

<section id="lista_presenca">
    <div class="container">
        <h1>Lista de Presença</h1>
        <p class="text-justify"> Lista de presença do curso *nome do curso*</p>
        <p class="text-justify"> Data de realização: DD/MM/YYYY</p>
        <p class="text-justify"> Espera-se XX presentes</p>
        <div class="container">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Inscrição</th>
                            <th scope="col">Pago</th>
                            <th scope="col">Presente</th>
                            <th scope="col" style="text-align: center;">Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Astheobaldo</td>
                            <td>XX/XX/XXXX</td>
                            <td>Sim</td>
                            <td><button type="button" class="btn btn-success btn-sm">Presente</button></td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                        </tr>
                        <tr>
                            <td>Lizandren</td>
                            <td>XX/XX/XXXX</td>
                            <td>Não</td>
                            <td><button type="button" class="btn btn-warning btn-sm">Ausente</button></td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection