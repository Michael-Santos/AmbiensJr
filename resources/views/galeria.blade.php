@extends('layouts.app')

@section('content')
			<!-- Container Principal -->
      <div class="container mt-3">
				<div class="row">
					
					<!-- Elemento dinâmico (SELECT FROM BD)-->
					<a class = "col-lg-3 col-md-4 col-xs-6 thumb" href = "{{ route('album') }}">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://cdn1.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h4 class="card-title">Batata</h4>
							</div>
						</div>
					</a>		
					<!-- /Elem -->
					
					<a class = "col-lg-3 col-md-4 col-xs-6 thumb" href = "#">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://via.placeholder.com/300" alt="Card image">
							<div class="card-img-overlay">
								<h4 class="card-title">Título do Álbum</h4>
							</div>
						</div>
					</a>	
					
					<a class = "col-lg-3 col-md-4 col-xs-6 thumb" href = "#">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://via.placeholder.com/300" alt="Card image">
							<div class="card-img-overlay">
								<h4 class="card-title">Título do Álbum</h4>
							</div>
						</div>
					</a>	
					
					<a class = "col-lg-3 col-md-4 col-xs-6 thumb" href = "#">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://via.placeholder.com/300" alt="Card image">
							<div class="card-img-overlay">
								<h4 class="card-title">Título do Álbum</h4>
							</div>
						</div>
					</a>	
					
					<a class = "col-lg-3 col-md-4 col-xs-6 thumb" href = "#">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://via.placeholder.com/300" alt="Card image">
							<div class="card-img-overlay">
								<h4 class="card-title">Título do Álbum</h4>
							</div>
						</div>
					</a>						
				</div>
			</div>
			<!-- /Container Principal -->
@endsection