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
					<label for="curso_nome">Nome do Curso</label>
					<input type="text" class="form-control" name="curso_nome" id="curso_nome" placeholder="Nome" required>
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

			<h3 class="mt-4">Informações de Inscrição</h3>
			<div class="border border px-3 py-3 my-2 rounded">
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="data_abetura">Data da Abertura</label>
						<input type="date" class="form-control" name="data_abetura" id="data_abetura" placeholder="DD/MM/AAAA" required>
					</div>

					<div class="form-group col-md-4">
						<label for="hora_abertura">Hora de Abertura</label>
						<input type="time" class="form-control" name="hora_abertura" id="hora_abertura" placeholder="HH:MM" required>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="data_encerramento">Data de Encerramento</label>
						<input type="date" class="form-control" name="data_encerramento" id="data_encerramento" placeholder="DD/MM/AAAA" required>
					</div>

					<div class="form-group col-md-4">
						<label for="hora_encerramento">Hora do Encerramento</label>
						<input type="time" class="form-control" name="hora_encerramento" id="hora_encerramento" placeholder="HH:MM" required>
					</div>
				</div>

				<div class="form-group row">
					<label for="num_vagas" class="col-md-1">Vagas</label>
					<input type="number" class="form-control col-md-2" name="num_vagas" id="num_vagas" placeholder="0" required>
					<small id="vagas_help_block" class="form-text text-muted">
					  Se não houver limite de vagas, coloque o valor 0.
					</small>
				</div>
			</div>

			<h3 class="mt-4">Informações de Pagamento</h3>
			<div class="border border px-3 py-3 my-2 rounded">
				
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" name="pagar_nahora" id="pagar_nahora">
					<label class="form-check-label" for="pagar_nahora">Pagamento Na Hora</label>
				</div>

				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" name="pagar_antecipado" id="pagar_antecipado">
					<label class="form-check-label" for="pagar_antecipado">Pagamento Antecipado</label>
				</div>

				<div class="form-group row mt-3">
					<label for="valor_curso" class="col-md-1">Valor</label>
					<input type="text" class="form-control col-md-2" name="valor_curso" id="valor_curso" placeholder="R$ XX,XX" required>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Cadastrar Curso</button>

		</form>
	</div>
</section>

@endsection