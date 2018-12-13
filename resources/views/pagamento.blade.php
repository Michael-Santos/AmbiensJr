@extends('layouts.app')

@section('content')

	<form method="post" action="{{ route('pagar') }}">
		@csrf
		<input type="hidden" id="tokenPagSeguro" name="tokenPagSeguro">
		<input type="submmit" name="">
	</form>

	<p>SenderHash:<input type ="text" id="senderHash" size="80" disabled><button id="getSenderHash">getSenderHash</button></p><hr>

    <script type="text/javascript" src="/pagseguro/javascript"></script>
    <script type="text/javascript">

	$("#getSenderHash").click(function(){
        var senderHash = PagSeguroDirectPayment.getSenderHash();
        console.log(senderHash);
        $("#hash").val(senderHash);
	})
</script>

@endsection