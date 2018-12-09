@extends('layouts.admin.app')

@section('content')

<section id="cursos_db_home">
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
        <h1>Slides</h1>
        <p class="text-justify">Área destinada à slides<br>
        Nesta área você pode: <a class="btn btn-outline-primary btn-sm" href="{{ route('slides.create') }}">Adicionar um slide</a><br>
        Ou então buscar por slides existente abaixo para editar ou excluir</p>

        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Visualizar</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                        <th scope="col" style="text-align: center;">Excluir</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($slides as $slide)
                    <tr>
                        <td>{{ $slide->titulo }}</td>
                        
                        <td style="text-align: center;">
                        	<a href="#" class="thumbnail"  data-toggle="modal" data-target="#image-gallery{{ $slide->id }}">
                        		<img src="{{asset ('img/icones/visualizar.svg')}}" style="height: 25px;">
                        	</a>
                        </td>
                        
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>

                        <td style="text-align: center;">
                        	<a href="#" data-toggle="modal" data-target="#modal-delete-slide" data-remove="slide-{{ $slide->id }}" data-url="{{ route('slides.destroy', $slide) }}">
		                    	<img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px">
		                  	</a>
		            	</td>                     
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
				{{ $slides->links() }}
			</div>

        </div>
    </div>

    <!-- Modal Visualização -->
	@foreach($slides as $slide)
	<div class="modal fade" id="image-gallery{{ $slide->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-dialog" style="display:table;">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		                <h4 class="modal-title" id="image-gallery-title"></h4>
		            </div>
		            <div class="modal-body">
		                <img src="{{ asset('/storage/slides/'.$slide->url_imagem) }}">
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	@endforeach
	<!-- Fim Modal Visualização -->
</section>




<!-- Modal Exclusão -->
<div id="modal-delete-slide" class="modal-delete modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete-slide" aria-hidden="true">
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
        <button class="btn btn-secot btn-delete" id="btn-delete" data-url="">
          <span class="mr-1">Deletar</span>
          <i class="icon fas fa-lg fa-trash"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<script>
	/* Ao exibir o modal de visualização*/
	

	/* MODAL DE DELEÇÃO */

	/*Ao pressionar o botão de deleção faz a deleção */
	$("#btn-delete").click(function(event){
		var url = $(this).data(url);
		var token = $('meta[name=csrf-token]').attr('content');

		$.post(url, { _method: "delete", _token: token })
	});

	/* Passa os dados para o modal de deleção */
	$('#modal-delete-slide').on('shown.bs.modal', function (event) {
		var data = $(event.relatedTarget).data();
		$('#btn-delete', this).data('url', data.url)
	});

</script>



@endsection