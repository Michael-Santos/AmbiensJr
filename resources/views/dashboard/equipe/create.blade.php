@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_curso">
	<div class="container">
		<h1>Cadastrar Membro</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded">
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="membro_nome">Nome do Membro</label>
					<input type="text" class="form-control" name="membro_nome" id="membro_nome" placeholder="Nome" required>
				</div>

				<div class="form-group">
					<label for="curso_descricao">Descrição do Curso</label>
					<input type="text" class="form-control" name="curso_descricao" id="curso_descricao" placeholder="Descrição breve..." required>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="curso_data">Data de Realização</label>
						<input type="date" class="form-control" name="curso_data" id="curso_data" placeholder="DD/MM/AAAA" required>
					</div>

					<div class="form-group col-md-4">
						<label for="hora_curso">Hora do Evento</label>
						<input type="time" class="form-control" name="hora_curso" id="hora_curso" placeholder="HH:MM" required>
					</div>
				</div>

				 <div class="custom-file">
				    <input type="file" class="custom-file-input" id="img_curso">
				    <label class="custom-file-label" for="img_curso">Imagem/Banner para o curso</label>
				</div>

				<div class="form-row">
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="curso_vagas" id="curso_vagas">
						<label class="form-check-label" for="curso_vagas">Com Inscrição</label>
					</div>

					<div class="form-check form-check-inline">
						<input class="form-check-input" type="checkbox" name="curso_pago" id="curso_pago">
						<label class="form-check-label" for="curso_pago">Com Pagamento</label>
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar Curso</button>

		</form>
	</div>
</section>

@endsection