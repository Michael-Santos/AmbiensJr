@extends('layouts.admin.app')

@section('content')

<section class="mt-4" id="adm_pseletivo">
    <div class="container">
        <h1>Processo Seletivo</h1>
        <p class="text-justify">Área destinada à Edição de Processo Seletivo.<br>
        Nesta área você pode: definir se o processo está ativo e editar as informações do provesso seletivo em andamento.<br>
        Basta clicar no botão de estado do Processo Seletivo para definir se está ativo ou não.</p>

        <h4>Estado do Processo Seletivo: <button class="btn btn-success">Ativo</button> <button class="btn btn-danger">Desativado</button></h4> 

        <form class="border border-light px-1 py-3 rounded">
            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="ps_desc">Descrição do Processo</label>
                    <input type="text" class="form-control" name="ps_desc" id="ps_desc" placeholder="..." required>
                </div>

                <div class="form-group col-md-4">
                    <label for="ps_data">Data de Realização</label>
                    <input type="date" class="form-control" name="ps_data" id="ps_data" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="ps_insc">Data Final de Inscrição</label>
                    <input type="date" class="form-control" name="ps_insc" id="ps_insc" required>
                </div>

                <div class="form-group">
                    <label for="link_ps">Link do Forms</label>
                    <input type="text" class="form-control" name="link_ps" id="link_ps" placeholder="Cole o Link do Google Forms que será usado no Processo Seletivo Atual" required>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>

        </form>
    </div>
</section>

@endsection