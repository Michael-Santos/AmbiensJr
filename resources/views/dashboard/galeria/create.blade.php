@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_galeria">
	<div class="container pt-3">
		<h1>Cadastrar Galeria</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded" action="{{ route('galeria.store') }}" enctype="multipart/form-data" method="post">
			@csrf
			<h3>Informações</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="galeria_nome">Nome da Galeria</label>
					<input type="text" class="form-control" name="galeria_nome" id="galeria_nome" placeholder="Nome" required>
				</div>

				<div class="form-group">
				    <label for="imgs_galeria">Escolha as fotos</label>
				    <input type="file" class="form-control-file" name="imgs_galeria[]" id="imgs_galeria" multiple>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar Galeria</button>

		</form>
	</div>
</section>

@endsection