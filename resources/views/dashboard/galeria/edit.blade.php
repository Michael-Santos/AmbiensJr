@extends('layouts.admin.app')

@section('content')

<section id="cadastrar_galeria">
	<div class="container pt-3">
		<h1>Editar Galeria</h1>
		<form class="form-inline">
			<div class="form-group mb-3">
				<label for="galeria_nome">Nome da Galeria</label>
				<input type="text" class="form-control mx-3" name="galeria_nome" id="galeria_nome" placeholder="Nome" required>
				<button type="submit" class="btn btn-primary">Salvar novo nome</button>
			</div>
		</form>

		<div class="py-3">
			<p>Adicionar mais fotos a galeria</p>
			<input type="file" class="form-control-file" id="img_galeria" multiple>
		</div>

		<br>
		<h2>Tabela de Fotos da Galeria</h2>
		<div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Visualizar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align: center;"><img src="{{asset ('img/placeholders/Tucano1.png')}}" style="height: 15%"></td>
                            <td>Nome foto </td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/visualizar.svg')}}" style="height: 25px"></td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                        </tr>
                        <tr>
                            <td style="text-align: center;"><img src="{{asset ('img/placeholders/Tucano1.png')}}" style="height: 15%"></td>
                            <td>Nome Foto</td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/visualizar.svg')}}" style="height: 25px"></td>
                            <td style="text-align: center;"><img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

	</div>
</section>

@endsection