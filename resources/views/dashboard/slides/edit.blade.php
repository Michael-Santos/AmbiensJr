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
        <p>Preencha com os novos dados do slide.</p>

        <form class="border border-light px-1 py-3 rounded" action="{{ route('slides.update', $slide) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <h3>Informações</h3>
            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="titulo_slide">Título do Slide</label>
                    <input type="text" class="form-control" name="titulo_slide" value="{{ old('titulo_slide') ?: $slide->titulo }}" id="titulo_slide" placeholder="Título" required>
                </div>

                <div class="form-group">
                    <label for="descricao_slide">Descrição do Slide</label>
                    <input type="text" class="form-control" name="descricao_slide" value="{{ old('descricao') ?: $slide->descricao }}" id="descricao_slide" placeholder="Digite a descrição" required>
                </div>
                 <div class="form-group">
                    <label for="img_slide">Foto do slide</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img_slide" name="img_slide" >
                        <label class="custom-file-label" for="img_slide">Escolha a foto</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Salvar alterações</button>

        </form>
    </div>
</section>

@endsection