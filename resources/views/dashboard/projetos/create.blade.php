@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_projeto">
	<div class="container">
		<h1>Cadastrar Projeto</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded" action="{{ route('projetos.store') }}" enctype="multipart/form-data" method="post">
			@csrf
			<h3>Informações Básicas</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="titulo">Título do Projeto</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" required>
				</div>

				<div class="form-group">
					<label for="descricao">Descrição do Projeto</label>
					<textarea class="form-control" id="descricao" rows="5" name="descricao" placeholder="Digite a descrição do projeto" required></textarea>
				</div>

				<div class="form-group">
				    <label for="estado">Estado do projeto</label>
				    <select class="form-control" id="estado" name="estado" required="">
						<option>Atual</option>
						<option>Pendente</option>
						<option>Cancelado</option>
				    </select>
				</div>

				<div class="form-group">
				    <label for="imagem">Imagem/Banner do projeto</label>
				    <input type="file" class="form-control-file" id="imagem" name="imagem">
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar projeto</button>

		</form>
	</div>
</section>

@endsection