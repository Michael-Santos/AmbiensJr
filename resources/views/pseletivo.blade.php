@extends('layouts.app')

@section('content')
<!-- CONTAINER PRINCIPAL -->
<div class="container">
	<img src="{{asset ('img/placeholders/RH.png')}}" style="width: 100%; height: 200px;">
</div>

<div class="container">
	<p class="text-justify">No momento, não há qualquer processo seletivo em andamento. Por favor fiquem atentos a novas informações pelo site e redes sociais.<br>Em caso de dúvidas, verifique o edital abaixo.</p>

	<a href="{{asset ('docs/Edital-Trabalhe Conosco.pdf')}}"><img src="{{asset ('img/icones/pdf.png')}}" style="height: 50px; display: inline;">
	<p style="display: inline;">Edital - Trabalhe Conosco</p></a>
</div>
@endsection