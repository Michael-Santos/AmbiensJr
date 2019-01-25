@extends('layouts.app')

@section('content')
	<!-- EQUIPE -->
	<section id="team" class="pb-5">
	    <div class="container">

            <!-- TÍTULO -->
	        <h5 class="section-title h1">NOSSA EQUIPE</h5>

            <!-- IMAGEM DE TOPO DA EQUIPE -->
	        <img src="{{asset ('img/equipe/equipe.jpg')}}" style="width: 100%; margin-bottom: 10px;">

            <br>
            <br>
            <br>
            <!-- HEADER INDICIANDO SETOR -->
            <div class="card-header text-center text-white rounded" style = 'background-color: #33AA33; margin-bottom: 15px;'>
                <h2>Administração</h2>
            </div>

            <!-- MEMBROS DO SETOR -->
            <div class="row">
                <!-- Membro -->
            <div class="col-sm-6 mb-3">
                <div class="card shadow">
                    <div class="row card-body">
                        <div class="col-sm-3">
                            <img class="rounded-circle" src="{{asset ('img/equipe/matheus.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Matheus</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/gabriela.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Gabriela</h5>
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

            
            <br>
            <br>
            <br>
            <!-- HEADER INDICIANDO SETOR -->
            <div class="card-header text-center text-white" style = 'background-color: #33AA33; margin-bottom: 15px;'>
                <h2>Marketing</h2>
            </div>

            <!-- MEMBROS DO SETOR -->
            <div class="row">
                <!-- Membro -->
            <div class="col-sm-6 mb-3">
                <div class="card shadow">
                    <div class="row card-body">
                        <div class="col-sm-3">
                            <img class="rounded-circle" src="{{asset ('img/equipe/veronica.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Veronica</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/rodrigo.jpg')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Rodrigo</h5>
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

            <br>
            <br>
            <br>
            <!-- HEADER INDICIANDO SETOR -->
            <div class="card-header text-center text-white" style = 'background-color: #33AA33; margin-bottom: 15px;'>
                <h2>Projetos</h2>
            </div>

            <!-- MEMBROS DO SETOR -->
            <div class="row">
                <!-- Membro -->
            <div class="col-sm-6 mb-3">
                <div class="card shadow">
                    <div class="row card-body">
                        <div class="col-sm-3">
                            <img class="rounded-circle" src="{{asset ('img/equipe/fernanda.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Fernanda</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/isis.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Isis</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/luany.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Luany</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/natalia.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Natália</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/pedro.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Pedro</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/stephany.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Stephany</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/wilanys.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Wylanis</h5>
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
                            <img class="rounded-circle" src="{{asset ('img/equipe/yasmin.png')}}" alt="Generic placeholder image" width="120" height="120">
                        </div>
                        <div class = "col-sm-9 mt-3">
                            <h5 class="card-title">Yasmin</h5>
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
	</section>
	<!-- EQUIPE -->
@endsection