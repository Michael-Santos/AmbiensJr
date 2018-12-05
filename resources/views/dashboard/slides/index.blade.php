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
                        
                       <!-- <td style="text-align: center;"><a href="#" data-toggle="modal" data-target="#myModalclass="fa fa-eye">a</a></td> -->

                    	<td><div class="col-lg-3 col-md-4 col-xs-6 thumb">
            			<a class="thumbnail" href="#" data-toggle="modal" data-target="#image-gallery{{ $slide->id }}">
               				<i class="fas fa-eye"></i>
           				</a>
        				</div>
            			</td>
                        
                        <td style="text-align: center;"><img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;"></td>
                        <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>

@foreach($slides as $slide)
<div class="modal fade" id="image-gallery{{ $slide->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
@endforeach


@endsection