@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_curso">
	<div class="container">
		<h1>Editar Membro</h1>
		<p>Edite o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded">
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="membro_nome">Nome do Membro</label>
					<input type="text" class="form-control" name="membro_nome" id="membro_nome" placeholder="Nome" required>
				</div>

				<div class="form-group">
					<label for="setor_membro">Setor</label>
					<select class="custom-select" name="setor_membro" id="setor_membro" required>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>
				</div>

				<div class="form-group">
					<label for="facebook_membro" >E-mail</label>
				    <input type="text" class="form-control" name="email_membro" id="email_membro" placeholder="Deixe vazio se não quiser este contato" required>
				</div>

				<div class="form-group">
				    <label for="facebook_membro">Facebook</label>
				    <input type="text" class="form-control" id="facebook_membro" placeholder="Deixe vazio se não quiser este contato">
				</div>

				<div class="form-group">
				    <label for="twitter_membro" >Twitter</label>
				    <input type="text" class="form-control" id="twitter_membro" placeholder="Deixe vazio se não quiser este contato">
				</div>

				<div class="form-group">
					<label for="instagram_membro">Instagram</label>
			      	<input type="text" class="form-control" id="instagram_membro" placeholder="Deixe vazio se não quiser este contato">

				<div>
					<label for="imagem_membro">Foto do membro</label>
					<div class="custom-file mb-3">
					 	<input type="file" class="custom-file-input" id="imagem_membro">
					 	<label class="custom-file-label" for="imagem_membro">Escolha uma foto</label>
					</div>
				</div>

			<button type="submit" class="btn btn-primary">Atualizar Membro</button>

		</form>
	</div>
</section>

@endsection