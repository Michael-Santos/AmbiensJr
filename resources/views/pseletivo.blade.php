@extends('layouts.app')

@section('content')
<!-- CONTAINER PRINCIPAL -->

<div class="container mb-3">
	<img src="{{asset ('img/placeholders/RH.png')}}" style="width: 100%; height: 300px;">
</div>


<div class="container">
	@if($processo_seletivo->estado == false)
	<p class="text-justify">No momento, não há qualquer processo seletivo em andamento. 
		<br>Por favor fiquem atentos a novas informações pelo site e redes sociais.
		<br>Em caso de dúvidas, entre em contato conosco na página de contatos</p>
	@else

		<h2> Processo Seletivo em andamento</h2>

		<div class="container mb-3">
		@if($processo_seletivo->usa_descricao == true)
			<p class="text-justify"> {{$processo_seletivo->descricao}} </p>
		@endif
		Data final de Inscrições: {{$processo_seletivo->data_final}} às {{$processo_seletivo->hora_final}}
		</div>

		@if($processo_seletivo->usa_pdf == true)
			<a class="pl-3"href="{{asset ('storage/processo_seletivo_pdf/'. $processo_seletivo->url_pdf)}}"><img src="{{asset ('img/icones/pdf.png')}}" style="height: 50px; display: inline;">
			</a>
			<p style="display: inline;">Edital</p></a>
		@endif

		@if($processo_seletivo->usa_link_driver == true)
		<div class="container">
			<a class="btn btn-primary" href="{{$processo_seletivo->link_driver}}" role="button">Inscreva-se</a>
		</div>
		@endif
	@endif
</div> 

<!--
<div class="container">
	<h2>Processo Seletivo 2018</h2>

	<p class="text-justify">Atualmente estamos com o processo seletivo aberto até o dia 28/12/18. Mais informações temos no nosso PDF o formulário de inscrição está no link abaixo</p>

	<a href="{{asset ('docs/Edital-Trabalhe Conosco.pdf')}}"><img src="{{asset ('img/icones/pdf.png')}}" style="height: 50px; display: inline;">
	<p style="display: inline;">Edital - Trabalhe Conosco</p></a>
</div> 
-->


@endsection