@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_galeria">
	<div class="container">
		<h1>Cadastrar Galeria</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded">
			<h3>Informações</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="galeria_galeria">Nome da Galeria</label>
					<input type="text" class="form-control" name="galeria_galeria" id="galeria_nome" placeholder="Nome" required>
				</div>

				<div class="form-group">
					<label for="galeria_descricao">Descrição da galeria</label>
					<input type="text" class="form-control" name="galeria_descricao" id="galeria_descricao" placeholder="Descrição breve..." required>
				</div>


				<div class="form-group">
				    <label for="img_galeria">Escolha as fotos</label>
				    <input type="file" class="form-control-file" id="img_galeria" multiple>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar Galeria</button>

		</form>
	</div>
</section>

@endsection