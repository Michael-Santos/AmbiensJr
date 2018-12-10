@extends('layouts.admin.app')

@section('content')

<section id="projetos_db_home">
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

        <h1>Projetos</h1>
        <p class="text-justify">Área destinada à Projetos<br>
        Nesta área você pode: <a class="btn btn-outline-primary btn-sm" href="{{ route('projetos.create') }}">Adicionar um Projeto</a><br>
        Ou então buscar por projetos existente abaixo para editar ou excluir</p>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Projeto</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($projetos as $projeto)
                    <tr class="projeto-{{ $projeto->id }}">
                    <td>{{ $projeto->titulo }}</td>
                    
                    <td style="text-align: center;">
                        <a href="{{ route('projetos.edit', $projeto->id) }}">
                            <img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;">
                        </a>
                    </td>

                    <td style="text-align: center;">
                        <a href="#" data-toggle="modal" data-target="#modal-delete-projeto" data-remove=".projeto-{{ $projeto->id }}" data-url="{{ route('projetos.destroy', $projeto) }}">
                            <img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px">
                        </a>
                    </td>
                    </tr>
                    @endforeach                
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Exclusão -->
    <div id="modal-delete-projeto" class="modal-delete modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete-projeto" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-delete-slide">Confirmação de deletamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deletar mesmo deletar o slide?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-delete" id="btn-delete" data-url="">
              <span class="mr-1">Deletar</span>
              <i class="icon fas fa-lg fa-trash"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Modal Exclusão -->

</section>

@endsection