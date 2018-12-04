@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_slide">
	<div class="container">
		<h1>Cadastrar Slide</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded" action="{{ route('slides.store') }}" enctype="multipart/form-data" method="post">
			@csrf
			<h3>Informações</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="titulo_slide">Título do Slide</label>
					<input type="text" class="form-control" name="titulo_slide" id="titulo_slide" placeholder="Título" required>
				</div>

				<div class="form-group">
					<label for="descricao_slide">Descrição do Slide</label>
					<input type="text" class="form-control" name="descricao_slide" id="descricao_slide" placeholder="Digite a descrição" required>
				</div>
				 <div class="form-group">
				 	<label for="img_slide">Foto do slide</label>
					<div class="custom-file">
					    <input type="file" class="custom-file-input" id="img_slide" name="img_slide">
					    <label class="custom-file-label" for="img_slide">Escolha a foto</label>
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar slides</button>

		</form>
	</div>
</section>

@endsection