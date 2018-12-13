@extends('layouts.admin.app')

@section('content')

<section id="membros_index">
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
    <div class="container pt-3">
        <h1>Membros</h1>
        <p class="text-justify">Área destinada à edição de membros<br>
        Você pode verificar os membros e editar seus dados ou criar </p><a class="btn btn-secondary" href="{{ route('membros.create') }}">Novo Membro</a>


        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Foto</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($membros as $membro)
                    <tr>
                        <td style="text-align: center;"><img src="{{asset ('img/placeholders/no_photo.jpg')}}" style="height: 7%;"></td>
                        <td>{{$membro->nome}}</td>
                        <td>{{$membro->setor}}</td>
                        <td style="text-align: center;">
                            <a href="{{ route('membros.edit', $membro->id) }}">
                                <img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;">
                            </a>
                        </td>
                        <td style="text-align: center;">
                            <a href="#" data-toggle="modal" data-target="#modal-delete-membro" data-remove=".membro-{{ $membro->id }}" data-url="{{ route('membros.destroy', $membro) }}">
                                <img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px">
                            </a>
                        </td>
                    </tr>
                    @enforeach
                </tbody>
            </table>

            <div class="pagination">
                {{ $membros->links() }}
            </div>
        </div>
    </div>

    <!-- Modal Exclusão -->
    <div id="modal-delete-membro" class="modal-delete modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete-membro" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-delete-membro">Confirmação para deletar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deletar mesmo o membro?
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

<script>

    /* MODAL DE DELEÇÃO */
    /* Passa os dados para o modal de deleção */
    $('#modal-delete-membro').on('shown.bs.modal', function (event) {
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
                        $('#resultado').append('Slide deletetado com sucesso');

                    } else {
                        console.log(data);
                    }
                });     
        });
    });

</script>

@endsection