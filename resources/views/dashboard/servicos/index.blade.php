@extends('layouts.admin.app')

@section('content')

<section id="servicos_db_home">
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
        <div id="resultado">
        </div>

        <h1>Serviços</h1>
        <p class="text-justify">Área destinada à Serviços<br>
        Nesta área você pode: <a class="btn btn-outline-primary btn-sm" href="{{ route('servicos.create') }}">Adicionar um serviço</a><br>
        Ou então buscar por serviço existente abaixo para editar ou excluir</p>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach($servicos as $servico)
                    <tr class="servico-{{ $servico->id }}">
                    <td>{{ $servico->titulo }}</td>
                    
                    <td style="text-align: center;">
                        <a href="{{ route('servicos.edit', $servico->id) }}">
                            <img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;">
                        </a>
                    </td>

                    <td style="text-align: center;">
                        <a href="#" data-toggle="modal" data-target="#modal-delete-servico" data-remove=".servico-{{ $servico->id }}" data-url="{{ route('servicos.destroy', $servico) }}">
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
    <div id="modal-delete-servico" class="modal-delete modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete-servico" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-delete-slide">Confirmação de deletamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deletar mesmo deletar o serviço?
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

</section>

<script>
  /* MODAL DE DELEÇÃO */
  /* Passa os dados para o modal de deleção */
  $('#modal-delete-servico').on('shown.bs.modal', function (event) {
    var botaoConfirmacao = $(this).find('#btn-delete');
    var botaoDeletar = $(event.relatedTarget);
    var elementoRemover = $(botaoDeletar.data('remove'));
    var modal = $(this);
    var url = botaoDeletar.data('url');
    var token = $('meta[name=csrf-token]').attr('content');

    botaoConfirmacao.off('click').click(function (event) {
      $.post(url, { _method: "delete", _token: token })
        .done(function (data) {
          if (data.status == 'success'){
            modal.modal('hide');
            elementoRemover.remove();
            $('#resultado').attr('class', 'alert alert-success')
            $('#resultado').append('Servico deletetado com sucesso');

          } else {
            console.log(data);
          }
        });   
    });
  });
</script>
@endsection