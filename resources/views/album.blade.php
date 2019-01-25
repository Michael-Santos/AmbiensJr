@extends('layouts.app')

@section('content')	
	<!-- Container Principal -->
      <div class="container mt-3">
				<div class="row">
					<div class = "row">
						<!-- Div que contém a thumb da img e a/href para o modal -->
						<!-- Quase todo estático, mudar apenas data-title/data-image/img src -->
						<!-- data-image-id é de uso interno do JS, não mexer -->
						
						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/1.png')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/1.png')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/2.png')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/2.png')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->	

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/3.png')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/3.png')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/4.png')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/4.png')}}"
												 alt="Another alt text">
								</a>
						</div>						
						<!-- /Elem -->	

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/5.png')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/5.png')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->		

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/aula1.jpg')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/aula1.jpg')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->		

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/sapim1.jpg')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/sapim1.jpg')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->		

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/sapim2.jpg')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/sapim2.jpg')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->	

						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="{{asset ('img/galeria/teste/sapim3.jpg')}}"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="{{asset ('img/galeria/teste/sapim3.jpg')}}"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->																																					
					</div>

					<!-- Modal Estático -->
					<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
									<div class="modal-content">
											<div class="modal-header">
													<h4 class="modal-title" id="image-gallery-title"></h4>
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
													</button>
											</div>
											<div class="modal-body">
													<img id="image-gallery-image" class="img-responsive col-md-12" src="">
											</div>
											<div class="modal-footer">
													<button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
													</button>

													<button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
													</button>
											</div>
									</div>
							</div>
					</div>
				</div>
				<a class = "btn btn-success" href = "{{ route('galeria') }}">Voltar</a>
			</div>
			<!-- /Container Principal -->
@endsection