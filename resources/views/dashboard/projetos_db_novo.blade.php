@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_curso">
	<div class="container">
		<h1>Cadastrar Curso</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded">
			<h3>Informações Básicas</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="curso_nome">Nome do Projeto</label>
					<input type="text" class="form-control" name="curso_nome" id="curso_nome" placeholder="Nome" required>
				</div>

				<div class="form-group">
					<label for="curso_descricao">Descrição do Projeto</label>
					<input type="text" class="form-control" name="curso_descricao" id="curso_descricao" placeholder="Descrição breve..." required>
				</div>

				<div class="form-group">
				    <label for="img_curso">Imagem/Banner para o curso</label>
				    <input type="file" class="form-control-file" id="img_curso">
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar Projeto</button>

		</form>
	</div>
</section>

@endsection