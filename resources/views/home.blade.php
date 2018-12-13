@extends('layouts.app')

@section('content')
		<div class = "container">
			<div id="carrossel" class="carousel slide" data-ride="carousel">
			 
			  <ol class="carousel-indicators">
			    <li data-target="#carrossel" data-slide-to="0" class="active"></li>
			    <li data-target="#carrossel" data-slide-to="1"></li>
			    <li data-target="#carrossel" data-slide-to="2"></li>
			  </ol>


			  <div class="carousel-inner">
			    
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="{{asset ('img/placeholders/Sapo1.png')}}" >
				  <div class="carousel-caption d-none d-md-block text-white">
				    <h4>Anfíbios!</h4>
				    <p>Há um curso com pesquisa de campo sobre Anfíbios Anuros.</p>
				  </div>
			    </div>

			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{asset ('img/placeholders/Plantas1.png')}}" >
				  <div class="carousel-caption d-none d-md-block text-white">
				    <h4>Plantas como Placeholder</h4>
				    <p>Por que não?</p>
				  </div>		      
			    </div>

			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{asset ('img/placeholders/Tucano1.png')}}" >
				  <div class="carousel-caption d-none d-md-block text-white">
				    <h4>Tucano!!!</h4>
				    <p>Olha só essa beleza!</p>
				  </div>			      
			    </div>
			  </div>

			  <a class="carousel-control-prev" href="#carrossel" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>

			  <a class="carousel-control-next" href="#carrossel" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			  
			</div>
		</div>

		<div class="container">
			<h3 style="color:green; margin-left: 5%;">Quem Somos?</h3>
				<p class="text-justify" style = "margin-left: 5%; margin-right: 5%">
				{{$conteudo_quem_somos->conteudo}}
				<p>
		</div>


		<div class="container" id="tresbox">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="single_what_we_do">
						<div class = "top_line"></div>
						<div class="what_we_do_figure">
							<i class='fa fa-globe' style='font-size:48px;color:green'></i>
						</div>
						<h4 class="what_we_do_title">Missao</h4>
						<div class="what_we_do_content text-justify">
							{{$conteudo_missao->conteudo}}
						</div>
						<!--
						<a class="what_we_do_icon" href="#">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
						<div class="what_we_do_icon"></div>
						-->
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="single_what_we_do">
						<div class = "top_line"></div>
						<div class="what_we_do_figure">
							<i class='fa fa-eye' style='font-size:48px;color:green'></i>
						</div>
						<h4 class="what_we_do_title">Visão</h4>
						<div class="what_we_do_content text-justify">
							{{$conteudo_visao->conteudo}}
						</div>
						<!--
						<a class="what_we_do_icon" href="#">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
						<div class="what_we_do_icon"></div>
						-->
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="single_what_we_do">
						<div class = "top_line"></div>
						<div class="what_we_do_figure">
							<i class='fa fa-heart' style='font-size:48px;color:green'></i>
						</div>
						<h4 class="what_we_do_title">Valores</h4>
						<div class="what_we_do_content text-justify">
							{{$conteudo_valores->conteudo}}
						</div>
						<!--
						<a class="what_we_do_icon" href="#">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
						<div class="what_we_do_icon"></div>
						-->
					</div>
				</div>
			</div>
		</div>

		<div class = "container">
			<div class="text-center text-white">
				<div class="card-header" style = 'background-color: #33AA33; margin-bottom: 15px;'>
					<h2>Serviços</h2>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> Auditoria Ambiental</i>
							</div>
							<div class="what_we_do_content text-justify">Tem como finalidade determinar a natureza e a extensão de áreas de impacto ambiental em uma atividade existente. De acordo com as normas previstas na legislação brasileira, pretende obter e avaliar, de forma objetiva, as condições pelas quais as atividades existentes estão em conformidade com os critérios de auditoria e, comunicar os resultados deste processo ao cliente.</div>
							<!--
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
							<div class="what_we_do_icon"></div>
							-->
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> Educação Ambiental</i>
							</div>
							<div class="what_we_do_content text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit porta odio, id malesuada velit molestie non. Phasellus in orci non elit fringilla imperdiet at vitae dui. Nam sit amet enim auctor, commodo nulla in, fringilla arcu. Proin malesuada aliquam imperdiet. Duis accumsan malesuada tempus. Proin fringilla cursus lorem eget euismod. Sed porttitor eros tortor, ac posuere est bibendum vitae. Sed vulputate fringilla leo, sit amet finibus lorem pellentesque eget. Proin egestas purus non porta ultrices.</div>
							<!--
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
							<div class="what_we_do_icon"></div>
							-->
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> SIG - Sistemas de Informação</i>
							</div>
							<div class="what_we_do_content text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit porta odio, id malesuada velit molestie non. Phasellus in orci non elit fringilla imperdiet at vitae dui. Nam sit amet enim auctor, commodo nulla in, fringilla arcu. Proin malesuada aliquam imperdiet. Duis accumsan malesuada tempus. Proin fringilla cursus lorem eget euismod. Sed porttitor eros tortor, ac posuere est bibendum vitae. Sed vulputate fringilla leo, sit amet finibus lorem pellentesque eget. Proin egestas purus non porta ultrices.</div>
							<!--
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
							<div class="what_we_do_icon"></div>
							-->
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="single_what_we_do servicos">
							<div class="what_we_do_figure">
								<i class='fa fa-envira' style='font-size:28px;color:green; font-weight: bold'> Levantamento de Fauna e Flora</i>
							</div>
							<div class="what_we_do_content text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus suscipit porta odio, id malesuada velit molestie non. Phasellus in orci non elit fringilla imperdiet at vitae dui. Nam sit amet enim auctor, commodo nulla in, fringilla arcu. Proin malesuada aliquam imperdiet. Duis accumsan malesuada tempus. Proin fringilla cursus lorem eget euismod. Sed porttitor eros tortor, ac posuere est bibendum vitae. Sed vulputate fringilla leo, sit amet finibus lorem pellentesque eget. Proin egestas purus non porta ultrices.</div>
							<!--
							<a class="what_we_do_icon" href="#">
								<i class="fa fa-angle-right" aria-hidden="true"></i>
							</a>
							<div class="what_we_do_icon"></div>
							-->
						</div>
					</div>				
				</div>
			</div>
		</div>
@endsection