@extends('layouts.app')

@section('content')
			<!-- Container Principal -->
      <div class="container mt-3">
				<div class="row">
					
					<!-- Elemento dinâmico (SELECT FROM BD)-->
					<a class = "col-lg-3 col-md-4 col-xs-6 thumb" href = "{{ route('album') }}">
						<div class="card bg-dark text-white text-center">
							<img class="card-img" src="https://cdn1.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h4 class="card-title">Doguíneos</h4>
							</div>
						</div>
					</a>		
					<!-- /Elem -->			
				</div>
			</div>
			<!-- /Container Principal -->
@endsection