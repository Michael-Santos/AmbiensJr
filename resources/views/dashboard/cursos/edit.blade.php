@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_curso">
	<div class="container">
		<h1>Editar Curso</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded" method="post" action="{{ route('eventos.update', $curso->id) }}" enctype="multipart/form-data" id="curso_form">
			@csrf
			@method('PATCH')
			<h3>Informações do curso</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="curso_nome">Nome do Curso</label>
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do curso" value="{{ old('nome') ?: $curso->nome }}"required>
				</div>

				<div class="form-group">
					<label for="descricao">Descrição do curso</label>
					<textarea class="form-control" name="descricao" placeholder="Digite a descrição do curso" id="descricao" rows="5" required>{{ old('descricao') ?: $curso->descricao }}</textarea>

				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="data_evento">Data de Realização</label>
						<input type="date" class="form-control" name="data_evento" id="data_evento" placeholder="DD/MM/AAAA" value="{{ old('data_evento') ?: $curso->data_evento }}" required>
					</div>

					<div class="form-group col-md-4">
						<label for="hora_evento">Hora do Evento</label>
						<input type="time" class="form-control" name="hora_evento" id="hora_evento" placeholder="HH:MM" value="{{ old('hora_evento') ?: $curso->hora_evento }}"required>
					</div>
				</div>

				 <div class="custom-file">
				    <input type="file" class="custom-file-input" name="imagem" id="imagem">
				    <label class="custom-file-label" for="imagem">Imagem/Banner para o curso</label>
				</div>

				<div class="form-row">
					<div class="form-check form-check-inline">
						@if($curso->inscricao == null)
						<input class="form-check-input" type="checkbox" name="inscricao" id="inscricao">
						@else
						<input class="form-check-input" type="checkbox" name="inscricao" id="inscricao" checked="true">
						@endif
						<label class="form-check-label" for="inscricao">Com Inscrição</label>
					</div>

					<div class="form-check form-check-inline">
						@if($curso->pagamento == null)
						<input class="form-check-input" type="checkbox" name="pagamento" id="pagamento">
						@else
						<input class="form-check-input" type="checkbox" name="pagamento" id="pagamento" checked="true">
						@endif
						<label class="form-check-label" for="pagamento">Com Pagamento</label>
					</div>
				</div>
			</div>

			<h3 class="mt-4">Informações de Inscrição</h3>
			<div class="border border px-3 py-3 my-2 rounded">
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="data_inicio_inscricao">Data da Abertura</label>
						<input type="date" class="form-control" name="data_inicio_inscricao" id="data_inicio_inscricao" value="{{ old('data_inicio_inscricao') ?: $curso->data_inicio_inscricao }}" placeholder="DD/MM/AAAA" >
					</div>

					<div class="form-group col-md-4">
						<label for="hora_inicio_inscricao">Hora de Abertura</label>
						<input type="time" class="form-control" name="hora_inicio_inscricao" id="hora_inicio_inscricao" value="{{ old('hora_inicio_inscricao') ?: $curso->hora_inicio_inscricao }}" placeholder="HH:MM">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="data_fim_inscricao">Data de Encerramento</label>
						<input type="date" class="form-control" name="data_fim_inscricao" id="data_fim_inscricao" value="{{ old('data_fim_inscricao') ?: $curso->data_fim_inscricao }}" placeholder="DD/MM/AAAA">
					</div>

					<div class="form-group col-md-4">
						<label for="hora_fim_inscricao">Hora do Encerramento</label>
						<input type="time" class="form-control" name="hora_fim_inscricao" id="hora_fim_inscricao" value="{{ old('hora_fim_inscricao') ?: $curso->hora_fim_inscricao }}"  placeholder="HH:MM">
					</div>
				</div>

				<div class="form-group row">
					<label for="numero_vagas" class="col-md-1">Vagas</label>
					<input type="number" class="form-control col-md-2" name="numero_vagas" id="numero_vagas" placeholder="Digite o número de vagas" value="{{ old('numero_vagas') ?: $curso->numero_vagas }}">
					<small id="vagas_help_block" class="form-text text-muted">
					  Se não houver limite de vagas, coloque o valor 0.
					</small>
				</div>
			</div>

			<h3 class="mt-4">Informações de Pagamento</h3>
			<div class="border border px-3 py-3 my-2 rounded">
				
				<div class="form-check form-check-inline">
					@if($curso->pagamento_na_hora == null)
					<input class="form-check-input" type="checkbox" name="pagamento_na_hora" id="pagamento_na_hora">
					@else
					<input class="form-check-input" type="checkbox" name="pagamento_na_hora" id="pagamento_na_hora" checked="true">
					@endif
					<label class="form-check-label" for="pagamento_na_hora">Pagamento Na Hora</label>
				</div>

				<div class="form-check form-check-inline">
					@if($curso->pagamento_antecipado == null)
					<input class="form-check-input" type="checkbox" name="pagamento_antecipado" id="pagamento_antecipado">
					@else
					<input class="form-check-input" type="checkbox" name="pagamento_antecipado" id="pagamento_antecipado" checked="true">
					@endif
					<label class="form-check-label" for="pagamento_antecipado">Pagamento Antecipado</label>
				</div>

				<div class="form-group row mt-3">
					<label for="valor" class="col-md-1 mr-2">Valor</label>
					<input type="text" class="form-control col-md-2" name="valor" id="valor" value="{{ old('valor') ?: $curso->valor }}" placeholder="xx,xx" >
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Atualizar Curso</button>

		</form>
	</div>
</section>

<script>
	$('input[name="valor"]').mask('00,00', {reverse: true});
	
	$("#curso_form").submit(function() {
	 	$('input[name="valor"]').unmask();
	});
</script>

@endsection