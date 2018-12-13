@extends('layouts.app')

@section('content')
<section id="contact">
	<div class="container">
	<div class="well well-sm">
	<h3><strong>Contato</strong></h3>
	</div>

		<div class="row">
		<div class="col-md-7">  
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.6444081532377!2d-47.52917808549868!3d-23.581211384672976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDM0JzUyLjQiUyA0N8KwMzEnMzcuMiJX!5e0!3m2!1spt-BR!2sbr!4v1541053313760" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

			<div class="col-md-5">
			
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

			<h4><strong>Formulário para contato</strong></h4>
				<form method="post" action="{{ route('contato.store') }}">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control" name="nome" value="" placeholder="Nome">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" value="" placeholder="E-mail">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="assunto" value="" placeholder="Assunto">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
					</div>
					<button class="btn btn-default" type="submit" name="button">
						<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar
					</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection