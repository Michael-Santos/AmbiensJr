@extends('layouts.app')

@section('content')

<section id="userarea">
    <div class="container">
        <!-- Container com informações do usuário -->   
        <div class="container mb-3" >
            <div class="media">
                <img class="mr-5" src="{{asset ('img/placeholders/no_photo.jpg')}}" style="width: 25%">
                <div class="media-body">
                    <h2 class="mt-0 mb-3">Nome Pessoa</h2>
                    <b>Email: </b> umemail@email.com<br>
                    <br><b>Eventos que participou: </b> 30
                    <br><b>Eventos que faltou: </b> 2
                    <br><b>Certificados disponíveis: </b> 28
                    <br>
                </div>  
            </div>
        </div>

        <div id="accordion">
            <div class="card">
                <div class="card-header btn collapsed" data-toggle="collapse" data-target="#cursos_feitos" aria-expanded="false" aria-controls="cursos_feitos" id="btn_cursos_feitos">
                    <h5 class="mb-0">
                        Cursos Feitos
                    </h5>
                </div>

                <div id="cursos_feitos" class="collapse show" aria-labelledby="btn_cursos_feitos" data-parent="#accordion">
                    <div class="card-body">
                        Em seguida, estarão os cursos em que se inscreveu e participou. Assim que um curso for finalizado e analizado pela Ambiens, seu certificado estará diponível.
                        <div class="table-responsive">
                            <table class="table tables-triped">
                                <thead>
                                    <tr>
                                        <th scope="col">Curso</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Certificado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Curso 1</td>
                                        <td>XX/XX/XX</td>
                                        <td><button class="btn btn-success btn-sm">PDF</button></th>
                                    </tr>
                                    <tr>
                                        <td>Curso 2</td>
                                        <td>XX/XX/XX</td>
                                        <td><button class="btn btn-dark btn-sm" disabled>Indisponivel</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
             <div class="card">
                <div class="card-header btn collapsed" data-toggle="collapse" data-target="#cursos_faltou" aria-expanded="false" aria-controls="cursos_faltou" id="btn_cursos_faltou">
                    <h5 class="mb-0">
                        Cursos que Faltou
                    </h5>
                </div>

                <div id="cursos_faltou" class="collapse" aria-labelledby="btn_cursos_faltou" data-parent="#accordion">
                    <div class="card-body">
                        Em seguida, estarão os cursos em que se inscreveu e participou. Assim que um curso for finalizado e analizado pela Ambiens, seu certificado estará diponível.
                        <div class="table-responsive">
                            <table class="table tables-triped">
                                <thead>
                                    <tr>
                                        <th scope="col">Curso</th>
                                        <th scope="col">Data</th>
                                        <th scope="col">Pago</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Curso 1</td>
                                        <td>XX/XX/XX</td>
                                        <td>Sim</td>
                                    </tr>td
                                    <tr>
                                        <td>Curso 2</td>
                                        <td>XX/XX/XX</td>
                                        <td>Não</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection