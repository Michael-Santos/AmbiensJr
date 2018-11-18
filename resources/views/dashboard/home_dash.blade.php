@extends('layouts.app')

@section('content')

<section id="home_dashboard">
    <div class="container">
        <h1>Bem-vindo(a) à area do Administrador</h1>
        <p> Usuário conectado como: *nome* </p>
        <br>
        <h4>Hoje é dia XX/XX/XX, YY:YY</h4><br>
        <p>Sinta-se à vontade para navegar pelo menu ao lado. <br>
        Ou então, clique no botão abaixo para ir à Página Inicial do Site Público</p>
        <a class="btn btn-outline-dark" href="{{ url('teste') }}">Site Principal</a>
        <p class="mt-3">Caso deseje alterar seus dados visite seu perfil clicando em sua foto no topo do Dashboard ou pelo botão abaixo:</p>
        <a class="btn btn-outline-dark mx-0" href="#">Meu Perfil</a>

    </div>
</section>
@endsection