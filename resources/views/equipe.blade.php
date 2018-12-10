@extends('layouts.app')

@section('content')
	<!-- EQUIPE -->
	<section id="team" class="pb-5">
	    <div class="container">

            <!-- TÍTULO -->
	        <h5 class="section-title h1">NOSSA EQUIPE</h5>

            <!-- IMAGEM DE TOPO DA EQUIPE -->
	        <img src="{{asset ('img/placeholders/equipe.png')}}" style="width: 100%; margin-bottom: 10px;">

            <!-- HEADER INDICIANDO SETOR -->
            <div class="card-header text-center text-white" style = 'background-color: #33AA33; margin-bottom: 15px;'>
                <h2>Setor</h2>
            </div>

            <!-- MEMBROS DO SETOR -->
            <div class="row">
                <!-- Membro -->
            <div class="col-sm-6 mb-3">
                <div class="card shadow">
                    <div class="row card-body">
                        <div class="col-sm-3">
                            <img class="rounded-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Nome</h5>
                            <p class="card-text">
                                Descrição
                                <br>
                                Descrição
                            </p>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- /Membro -->

            <!-- Membro -->
            <div class="col-sm-6 mb-3">
                <div class="card shadow">
                    <div class="row card-body">
                        <div class="col-sm-3">
                            <img class="rounded-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Nome</h5>
                            <p class="card-text">
                                Descrição
                                <br>
                                Descrição
                            </p>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- /Membro -->
            <!-- Membro -->
            <div class="col-sm-6 mb-3">
                <div class="card shadow">
                    <div class="row card-body">
                        <div class="col-sm-3">
                            <img class="rounded-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Nome</h5>
                            <p class="card-text">
                                Descrição
                                <br>
                                Descrição
                            </p>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- /Membro -->
            <!-- Membro -->
            <div class="col-sm-6 mb-3">
                <div class="card shadow">
                    <div class="row card-body">
                        <div class="col-sm-3">
                            <img class="rounded-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Nome</h5>
                            <p class="card-text">
                                Descrição
                                <br>
                                Descrição
                            </p>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- /Membro -->
            </div>


	        <div class="row">
	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/yasmin.png')}}" alt="card image"></p>
                                <h4 class="card-title">Yasmin Keiko Ueno</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b> Presidente <br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/stephany.png')}}" alt="card image"></p>
                                <h4 class="card-title">Stephany Nicolle</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b> Vice-Diretora<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/gabriela.png')}}" alt="card image"></p>
                                <h4 class="card-title">Gabriela Branco</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b> Recursos Humanos<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/matheus.png')}}" alt="card image"></p>
                                <h4 class="card-title">Matheus</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b> Jurídico/Financeiro<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/wilanys.png')}}" alt="card image"></p>
                                <h4 class="card-title">Wilanys</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b> Jurídico/Financeiro<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/rodrigo.jpg')}}" alt="card image"></p>
                                <h4 class="card-title">Rodrigo Formigon</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b> Marketing<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/veronica.png')}}" alt="card image"></p>
                                <h4 class="card-title">Veronica Almeida</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b>Marketing<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/fernanda.png')}}" alt="card image"></p>
                                <h4 class="card-title">Fernanda Torrell</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b>Relações Públicas e Projetos<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/isis.png')}}" alt="card image"></p>
                                <h4 class="card-title">Isis Minhós Yano</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b>Relações Públicas e Projetos<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/luany.png')}}" alt="card image"></p>
                                <h4 class="card-title">Luany Stefani</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b>Relações Públicas e Projetos<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/natalia.png')}}" alt="card image"></p>
                                <h4 class="card-title">Natalia Mendes</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b>Relações Públicas e Projetos<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	            <!-- MEMBRO -->
	            <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="frontside">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img class=" img-fluid" src="{{asset ('img/equipe/pedro.png')}}" alt="card image"></p>
                                <h4 class="card-title">Pedro Sales</h4><br>
                                <p class="card-text text-justify"> <b>Cargo:</b>Relações Públicas e Projetos<br><b>Contato:</b> ~Aqui vai contato~</p>
                            </div>
                        </div>
                    </div>
	            </div>

	        </div>
	    </div>
	</section>
	<!-- EQUIPE -->
@endsection