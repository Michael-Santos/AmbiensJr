<nav class="navbar navbar-dark text-white h5 navbar-expand-lg shadow" id="cabeca">
	<a class="navbar-brand" href="#">
		<img src="{{asset ('img/layout/logo.png')}}" id="cabeca" alt="">
	</a>

	<!-- Botao/Toggle para ajustar a barra de navegação -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<!-- DIV que sera ajustada na barra de navegação -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link active" href = "{{ url('') }}" id="" role="button">Início</a>
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
				<a class="nav-link" href = "{{ url('pseletivo') }}" id="" role="button">Processo Seletivo</a>
			</li>												
		</ul>
	</div>	
</nav>