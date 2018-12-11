@extends('layouts.admin.app')

@section('content')

<section id="editar_projeto">
	@if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    @if($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          <span>{{ $error }}</span>
          <br>
        @endforeach
      </div>
    @endif

	<div class="container  pt-3">
		<h1>Editar Projeto</h1>

		<form class="border border-light px-1 py-3 rounded" action="{{ route('projetos.update', $projeto) }}" enctype="multipart/form-data" method="post">
			@csrf
			@method('PATCH')
			<h3>Informações</h3>
			<div class="border px-3 py-3 my-2 rounded">
				<div class="form-group">
					<label for="titulo">Título do Projeto</label>
					<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="{{ $projeto->titulo }}" required>
				</div>

				<div class="form-group">
					<label for="descricao">Descrição do Projeto</label>
					<textarea class="form-control" id="descricao" rows="5" name="descricao" placeholder="Digite a descrição do projeto" required>{{ $projeto->descricao }}</textarea>
				</div>

				<div class="form-group">
				    <label for="estado">Estado do projeto</label>
				    <select class="form-control" id="estado" name="estado" required>
						<option {{ $projeto->estado == "Atual" ? "selected" : "" }}>Atual</option>
						<option {{ $projeto->estado == "Pendente" ? "selected" : "" }}>Pendente</option>
						<option {{ $projeto->estado == "Cancelado" ? "selected" : "" }}>Cancelado</option>
				    </select>
				</div>

				<div class="form-group">
				    <label for="imagem">Imagem/Banner do projeto</label>
				    <input type="file" class="form-control-file" id="imagem" name="imagem">
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Editar projeto</button>

		</form>
	</div>
</section>

@endsection