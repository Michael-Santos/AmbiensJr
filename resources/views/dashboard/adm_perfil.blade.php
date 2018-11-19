@extends('layouts.admin.app')

@section('content')

<section class="mt-4" id="adm_pseletivo">
    <div class="container">
       <div class="container" >
            <div class="media">
                <img class="mr-5" src="{{asset ('img/placeholders/no_photo.jpg')}}" style="width: 25%">
                <div class="media-body">
                    <form class="border border-light px-1 py-3 rounded">
                        <div class="border px-3 py-3 my-2 rounded">
                            <div class="form-group">
                                <label for="img_curso">Mudar Imagem de perfil</label>
                                <input type="file" class="form-control-file" id="img_curso">
                            </div>

                            <div class="form-group">
                                <label for="membro_nome">Nome do Membro</label>
                                <input type="text" class="form-control" name="membro_nome" id="membro_nome" placeholder="Nome da pessoa" required>
                            </div>

                            <div class="form-group">
                                <label for="email_membro">Email</label>
                                <input type="email" class="form-control" name="email_membro" id="email_membro" placeholder="umemail@email.com" required>
                            </div>

                            <button class="btn btn-primary">Aplicar Mudanças</button>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
    </div>
</section>

@endsection