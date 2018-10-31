<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" type="text/css" href="{{asset ('css/app.css')}}">

		<script src="{{asset ('js/app.js')}}"></script>
		<script src="{{asset ('js/popper.min.js')}}"></script>
		<script src="{{asset ('js/jquery-3.2.1.slim.min.js')}}"></script>
		<script src="{{asset ('js/bootstrap.min.js')}}"></script>
	</head>

	<body>
		<header>
			<nav class="navbar navbar-light navbar-expand-lg shadow" id="cabeca">
				<a class="navbar-brand" href="#">
					<img src="{{asset ('img/logo.png')}}" id="cabeca" alt="">
				</a>

				<!-- Botao/Toggle para ajustar a barra de navegação -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<!-- DIV que sera ajustada na barra de navegação -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href = "#" id="" role="button">LINK</a>
							</li>										
					</ul>
				</div>	
			</nav>
		</header>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="la.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

	</body>
</html>