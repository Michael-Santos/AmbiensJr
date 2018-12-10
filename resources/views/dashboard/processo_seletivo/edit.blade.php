@extends('layouts.admin.app')

@section('content')

<section class="mt-4" id="adm_pseletivo">
    <div class="container">
        <h1>Processo Seletivo</h1>
        <p class="text-justify">Área destinada à Edição de Processo Seletivo.<br>
        Nesta área você pode: definir se o processo está ativo e editar as informações do provesso seletivo em andamento.<br>
        Basta clicar no botão de estado do Processo Seletivo para definir se está ativo ou não.</p>

        <h4>Estado do Processo Seletivo: <button class="btn btn-success">Ativo</button> <button class="btn btn-danger">Desativado</button></h4> 

        <form class="border border-light px-1 py-3 rounded" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="hidden" name="estado" value="{{ $processo_seletivo->estado }}">

            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    <label for="ps_desc">Descrição do Processo</label>
                    <textarea class="form-control" rows="5" placeholder="Descrição do processo" id="ps_desc" name="descricao">{{ $processo_seletivo->descricao }}</textarea>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check-link">
                        <label class="form-check-label" for="gridCheck">
                        Exibir descrição na página principal
                        </label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="curso_data">Data final das inscrição</label>
                        <input type="date" class="form-control" name="curso_data" id="curso_data" placeholder="DD/MM/AAAA" value="{{ $processo_seletivo->data_final ?? '' }}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="hora_curso">Hora final de inscrição</label>
                        <input type="time" class="form-control" name="hora_curso" id="hora_curso" placeholder="HH:MM" value="{{ $processo_seletivo->hora_final ?? '' }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="img_slide">Edital pdf</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdf" name="pdf">
                        <label class="custom-file-label" for="pdf">Escolha a arquivo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check-pdf">
                        <label class="form-check-label" for="check-pdf">
                        Exibir pdf na página principal
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="link_ps">Link do Forms</label>
                    <input type="text" class="form-control" name="link_ps" id="link_ps" placeholder="Cole o Link do Google Forms que será usado no Processo Seletivo Atual" value="{{ $processo_seletivo->link_driver }}" >
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check-link">
                        <label class="form-check-label" for="check-link">
                        Exibir link na página principal
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>

        </form>
    </div>

</section>

@endsection