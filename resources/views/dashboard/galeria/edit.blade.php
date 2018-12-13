@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_galeria">
	<div class="container pt-3">
		<h1>Editar Galeria</h1>
		<form class="form-inline" action="{{ route('galeria.update', $galeria) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
			<div class="form-group mb-3">
				<label for="galeria_nome">Nome da Galeria</label>
				<input type="text" class="form-control mx-3" name="galeria_nome" id="galeria_nome" placeholder="Nome" value="{{ old('galeria_nome') ?: $galeria->nome }}" required>
				<button type="submit" class="btn btn-primary">Salvar novo nome</button>
			</div>
		</form>

        <form class="form border px-3 pb-3 rounded" action="{{ route('galeria.updatefotos', $galeria) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
    		<div class="py-3">
    			<p>Adicionar mais fotos a galeria</p>
    			<input type="file" class="form-control-file" name="imgs_galeria[]" id="imgs_galeria[]" multiple>
    		</div>
            <button type="submit" class="btn btn-primary">Fazer Upload das fotos</button>
        </form>

		<br>
		<h2>Tabela de Fotos da Galeria</h2>
		<div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fotos as $foto)
                        <tr>
                            <td style="text-align: center;">
                                <a href="#" class="thumbnail"  data-toggle="modal" data-target="#modal-visualizar-foto" data-url-imagem="{{ 'storage/galeria/' . $galeria->nome . '/' . $foto->nome }}">
                                    <img src="{{asset ('storage/galeria/' . $galeria->nome . '/' . $foto->nome)}}" style="max-height: 30px">
                                </a>
                            </td>
                            <td style="vertical-align: center;">
                                <a href="#" data-toggle="modal" data-target="#modal-delete-galeria" data-remove=".foto-{{ $foto->id }}" data-url="{{ route('galeria.deletefoto', $galeria, $foto->id) }}">
                                    <img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px">
                                </a>
                            </td> 

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

	</div>

    <!-- Modal Visualização -->
    <div class="modal fade" id="modal-visualizar-foto" tabindex="-1" role="dialog" aria-labelledby="modal-visualizar-foto" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 90%"role="document">
            <div class="modal-dialog" style="display:table;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="image-gallery-title">
                        </h4>
                    </div>
                    <div class="modal-body">
                        <img id="imagem-foto" src="" style="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim Modal Visualização -->

    <!-- Modal Exclusão -->
    <div id="modal-delete-foto" class="modal-delete modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete-foto" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-delete-foto">Confirmação para deletar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deletar mesmo a foto?
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
    /* Ao exibir o modal de visualização*/
    /* Passa os dados para o modal de visualização */
    $('#modal-visualizar-foto').on('shown.bs.modal', function (event) {
        var url_imagem = $(event.relatedTarget).data('url-imagem');
        $('#imagem-foto').attr('src', url_imagem);
    });

    /* MODAL DE DELEÇÃO */
    /* Passa os dados para o modal de deleção */
    $('#modal-delete-foto').on('shown.bs.modal', function (event) {
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