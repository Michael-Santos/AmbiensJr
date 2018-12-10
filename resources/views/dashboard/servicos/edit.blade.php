@extends('layouts.admin.app')

@section('content')

<section id="editar_slide">
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

  <div class="container">
        <h1>Editar Slide</h1>
        <p>Preencha com os novos dados do servico.</p>

        <form class="border border-light px-1 py-3 rounded" action="{{ route('servicos.update', $servico) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <h3>Informações</h3>
            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="titulo">Título do Serviço</label>
                    <input type="text" class="form-control" name="titulo" value="{{ old('titulo') ?: $servico->titulo }}" id="titulo" placeholder="Nome do Serviço" required>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição do serviço</label>
                    <textarea class="form-control" placeholder="Digite a descrição do serviço" rows="5" id="descricao" name="descricao" required>{{ old('descricao') ?: $servico->descricao }}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Salvar alterações</button>

        </form>
    </div>
</section>

@endsection