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
				<a class="navbar-brand" href="#">
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
								<a class="nav-link" href = "{{ url('contato') }}" id="" role="button">Contato</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href = "{{ url('pseletivo') }}" id="" role="button">Processo Seletivo</a>
							</li>												
					</ul>
				</div>	
			</nav>
		</header>

		
<!-- CONTAINER PRINCIPAL -->


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