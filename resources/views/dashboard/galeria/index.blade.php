@extends('layouts.admin.app')

@section('content')

<section id="galeria_index">
    <div class="container  pt-3">
        <h1>Galeria</h1>
        <p class="text-justify">Área destinada à Galeria<br>
        Nesta área você pode: <a class="btn btn-outline-primary btn-sm" href="{{ route('galeria.create') }}">Adicionar uma Galeria</a><br>
        Ou então buscar por galerias existente abaixo para editar ou excluir</p>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Galeria</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($galerias as $galeria)
                    <tr>
                        <td>{{$galeria->nome}}</td>
                        <td style="text-align: center;">
                            <a href="{{ route('galeria.edit', $galeria) }}">
                                <img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;">
                            </a>
                        </td>
                        <td style="text-align: center;">
                            <a href="#" data-toggle="modal" data-target="#modal-delete-galeria" data-remove=".galeria-{{ $galeria->id }}" data-url="{{ route('galeria.destroy', $galeria) }}">
                                <img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px">
                            </a>
                        </td>       
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{ $galerias->links() }}
            </div>
        </div>
    </div>

    <!-- Modal Exclusão -->
    <div id="modal-delete-galeria" class="modal-delete modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete-galeria" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-delete-galeria">Confirmação para deletar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deletar mesmo a galeria?
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
    $('#modal-delete-galeria').on('shown.bs.modal', function (event) {
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
                        $('#resultado').append('Galeria deletetada com sucesso');

                    } else {
                        console.log(data);
                    }
                });     
        });
    });

</script>
@endsection