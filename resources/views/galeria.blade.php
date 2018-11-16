@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a class="grouped_elements" href="{{asset ('img/galeria/teste/1.png')}}" class="fancybox" rel="ligthbox">
				<img  src="{{asset ('img/galeria/teste/1.png')}}" class="zoom img-fluid "  alt="">
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a class="grouped_elements" href="{{asset ('img/galeria/teste/2.png')}}" class="fancybox" rel="ligthbox">
				<img  src="{{asset ('img/galeria/teste/2.png')}}" class="zoom img-fluid "  alt="">
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a class="grouped_elements" href="{{asset ('img/galeria/teste/3.png')}}" class="fancybox" rel="ligthbox">
				<img  src="{{asset ('img/galeria/teste/3.png')}}" class="zoom img-fluid "  alt="">
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a class="grouped_elements" href="{{asset ('img/galeria/teste/4.png')}}" class="fancybox" rel="ligthbox">
				<img  src="{{asset ('img/galeria/teste/4.png')}}" class="zoom img-fluid "  alt="">
			</a>
			</div>
			<div class="col-lg-3 col-md-4 col-xs-6 thumb">
			<a class="grouped_elements" href="{{asset ('img/galeria/teste/5.png')}}" class="fancybox" rel="ligthbox">
				<img  src="{{asset ('img/galeria/teste/5.png')}}" class="zoom img-fluid "  alt="">
			</a>
			</div>												
		</div>
	</div>
	<script>$("a.grouped_elements").fancybox();</script>
@endsection