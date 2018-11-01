<!DOCTYPE html>
<html lang="en">
	<head>
		<title>AmbiensJr</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Dependencias locais -->
		<link rel = "stylesheet" href="{{asset ('css/custom.css')}}">
		<script src="{{asset ('js/custom.js')}}"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-dark navbar-expand-lg shadow" id="cabeca">
				<a class="navbar-brand" href="#">
					<img src="//placehold.it/150x150/ccc" id="cabeca" alt="">
				</a>

				<!-- Botao/Toggle para ajustar a barra de navegação -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<!-- DIV que sera ajustada na barra de navegação -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>										
					</ul>
				</div>	
			</nav>
		</header>

		<div class = "container">
			<div id="carrossel" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carrossel" data-slide-to="0" class="active"></li>
			    <li data-target="#carrossel" data-slide-to="1"></li>
			    <li data-target="#carrossel" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="//placehold.it/1280x400/777" alt="First slide">
				  <div class="carousel-caption d-none d-md-block text-dark">
				    <h4>Slide 1</h4>
				    <p>Descrição slide 1</p>
				  </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="//placehold.it/1280x400/999" alt="Second slide">
				  <div class="carousel-caption d-none d-md-block text-dark">
				    <h4>Slide 2</h4>
				    <p>Descrição slide 2</p>
				  </div>		      
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="//placehold.it/1280x400/bbb" alt="Third slide">
				  <div class="carousel-caption d-none d-md-block text-dark">
				    <h4>Slide 3</h4>
				    <p>Descrição slide 3</p>
				  </div>			      
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carrossel" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carrossel" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>


		<div class="container" id="tresbox">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="single_what_we_do">
						<div class = "top_line"></div>
						<div class="what_we_do_figure">
							<i class='fa fa-globe' style='font-size:48px;color:green'></i>
						</div>
						<h4 class="what_we_do_title">Missao</h4>
						<div class="what_we_do_content">Lorem ipsum dolor amet, consectetur adipiscing elit eiusmod.</div>
						<a class="what_we_do_icon" href="#">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="single_what_we_do">
						<div class = "top_line"></div>
						<div class="what_we_do_figure">
							<i class='fa fa-heart' style='font-size:48px;color:green'></i>
						</div>
						<h4 class="what_we_do_title">Valores</h4>
						<div class="what_we_do_content">Lorem ipsum dolor amet, consectetur adipiscing elit eiusmod.</div>
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="single_what_we_do">
						<div class = "top_line"></div>
						<div class="what_we_do_figure">
							<i class='fa fa-eye' style='font-size:48px;color:green'></i>
						</div>
						<h4 class="what_we_do_title">Visão</h4>
						<div class="what_we_do_content">Lorem ipsum dolor amet, consectetur adipiscing elit eiusmod.</div>
						<a class="what_we_do_icon" href="#">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class = "container">
			<div class="text-center text-white">
				<div class="card-header" style = 'background-color: #33AA33; margin-bottom: 15px;'>
					<h2>Serviços</h2>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> Serviço I</i>
							</div>
							<div class="what_we_do_content">Lorem ipsum dolor amet, consectetur adipiscing elit eiusmod.</div>
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> Serviço II</i>
							</div>
							<div class="what_we_do_content">Lorem ipsum dolor amet, consectetur adipiscing elit eiusmod.</div>
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> Serviço III</i>
							</div>
							<div class="what_we_do_content">Lorem ipsum dolor amet, consectetur adipiscing elit eiusmod.</div>
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> Serviço IV</i>
							</div>
							<div class="what_we_do_content">Lorem ipsum dolor amet, consectetur adipiscing elit eiusmod.</div>
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
						</div>
					</div>				
				</div>
			</div>
		</div>


		<footer class="footer rodape">
			<div class="container">
				<div class = "row p-1">
					<div class = "col-sm-5">
						<span>Ambiens Jr - Empresa Júnior da Biologia.<br>
						Todos os direitos reservados.<br>
						Atualizado 2018</span>
					</div>
					<div class = "col-sm-5">
						<span>Rodovia João Leme dos Santos, km 110, Sorocaba, São Paulo, Brasil<br>
						Bairro Itinga CEP 18052 - 780<br>
						ambiensjr@gmail.com<br>
						</span>
					</div>				
					<div class = "col-sm-2 redes-sociais">
						<a href = "https://www.facebook.com/empresaAmbiensjr/"><i class='fa fa-facebook-official' style='font-size:36px;color:green; font-weight: bold'></i></a>
						<a href = "#"><i class='fa fa-instagram' style='font-size:36px;color:green; font-weight: bold'></i></a>
					</div>														
				</div>
			</div>
		</footer>

	</body>
</html>