<!DOCTYPE html>
<html lang="en">
	<head>
		<title>AmbiensJr - Template</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Dependencias locais -->
		<link rel = "stylesheet" href="{{asset ('css/custom.css')}}">
		<script src="{{asset ('js/custom.js')}}"></script>

		<!-- Dependencias CDN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-dark text-white h5 navbar-expand-lg shadow" id="cabeca">
				<a class="navbar-brand" href="{{url ('teste')}}">
					<img src="{{asset ('img/placeholders/logo.png')}}" id="cabeca" alt="">
				</a>

				<!-- Botao/Toggle para ajustar a barra de navegação -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<!-- DIV que sera ajustada na barra de navegação -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href = "{{ url('teste') }}" id="" role="button">Início</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "{{ url('equipe') }}" id="" role="button">Equipe</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "{{ url('projetos') }}" id="" role="button">Projetos</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "{{ url('cursos') }}" id="" role="button">Cursos</a>
							</li>		
							<li class="nav-item">
								<a class="nav-link" href = "{{ url('galeria') }}" id="" role="button">Galeria</a>
							</li>	
							<li class="nav-item">
								<a class="nav-link active" href = "{{ url('contato') }}" id="" role="button">Contato</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "{{ url('pseletivo') }}" id="" role="button">Processo Seletivo</a>
							</li>												
					</ul>
				</div>	
			</nav>
		</header>

		
		<section id="contact">
			<div class="container">
			<div class="well well-sm">
			<h3><strong>Contato</strong></h3>
			</div>

				<div class="row">
				<div class="col-md-7">  
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.6444081532377!2d-47.52917808549868!3d-23.581211384672976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDM0JzUyLjQiUyA0N8KwMzEnMzcuMiJX!5e0!3m2!1spt-BR!2sbr!4v1541053313760" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

					<div class="col-md-5">
					<h4><strong>Formulário para contato</strong></h4>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" name="" value="" placeholder="Nome">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="" value="" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" name="" value="" placeholder="Telefone">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="" rows="3" placeholder="Mensagem"></textarea>
							</div>
							<button class="btn btn-default" type="submit" name="button">
								<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
							</button>
						</form>
					</div>
				</div>
			</div>
		</section>


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