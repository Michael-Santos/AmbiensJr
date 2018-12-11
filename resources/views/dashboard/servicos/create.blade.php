@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_slide">
	<div class="container  pt-3">
		<h1>Cadastrar Serviço</h1>
		<p>Preencha o formulário abaixo e não esqueça de revisar antes de confirmar o cadatro.</p>

		<form class="border border-light px-1 py-3 rounded" action="{{ route('servicos.store') }}" method="post">
			@csrf
			<h3>Informações</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="titulo">Título do Slide</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Nome do serviço" required>
				</div>

				<div class="form-group">
					<label for="conteudo">Descrição do serviço</label>
					<textarea class="form-control rounded-0" id="descricao" name="descricao" placeholder="Digite a descrição do serviço" rows="5" required></textarea>
				</div>

			</div>

			<button type="submit" class="btn btn-primary">Cadastrar serviço</button>

		</form>
	</div>
</section>

@endsection