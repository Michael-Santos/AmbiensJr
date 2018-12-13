@extends('layouts.app')

@section('content')
	<script type="text/javascript" src="{{ PagSeguro::getUrl()['javascript'] }}"></script>		

	<section>
		<input type="text" value="" id="senderHash" name="valor">
	</section>


<script>
    PagSeguroDirectPayment.setSessionId('{{ PagSeguro::startSession() }}'); 


    $(document).ready(function () {
    	console.log(PagSeguroDirectPayment.getSenderHash()); 
    });
</script>

@endsection