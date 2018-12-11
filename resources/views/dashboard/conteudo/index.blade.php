@extends('layouts.admin.app')

@section('content')

<section class="mt-4" id="adm_pseletivo">
    <div class="container pt-3">
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

        <h1>Editar Conteúdo</h1>
        <p class="text-justify">Área destinada à Edição do conteúdo da página principal.<br>

        <form class="border border-light px-1 py-3 rounded" method="post" action="{{ route('conteudo.update.quem_somos') }}">
            @csrf
            @method('PATCH')

            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="conteudo_quem_somos">Quem somos?</label>
                    <textarea class="form-control" rows="5" placeholder="Digite o texto" name="conteudo" id="conteudo_quem_somos">{{ $quem_somos->conteudo }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>

        <form class="border border-light px-1 py-3 rounded" method="post" action="{{ route('conteudo.update.missao') }}">
            @csrf
            @method('PATCH')

            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="conteudo_missao">Missão</label>
                    <textarea class="form-control" rows="5" placeholder="Digite o texto" name="conteudo" id="conteudo_missao">{{ $missao->conteudo }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>

        <form class="border border-light px-1 py-3 rounded" method="post" action="{{ route('conteudo.update.visao') }}">
            @csrf
            @method('PATCH')

            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="conteudo_visao">Visão</label>
                    <textarea class="form-control" rows="5" placeholder="Digite o texto" name="conteudo" id="conteudo_visao">{{ $visao->conteudo }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>

        <form class="border border-light px-1 py-3 rounded" method="post" action="{{ route('conteudo.update.valores') }}">
            @csrf
            @method('PATCH')

            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="conteudo_valores">Valores</label>
                    <textarea class="form-control" rows="5" placeholder="Digite o texto" name="conteudo" id="conteudo_valores">{{ $valores->conteudo }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </form>


    </div>



</section>

@endsection