@extends('layouts.admin.app')

@section('content')

@if(isset($success))
  <div class="alert alert-success">
    {{ $success }}
  </div>
@endif
@if($errors->any())
  <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
      <span>{{ $error }}</span>
      <br>
    @endforeach
  </div>
@endif


@endsection