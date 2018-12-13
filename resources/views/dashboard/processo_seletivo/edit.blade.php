@extends('layouts.admin.app')

@section('content')

<section class="mt-4" id="adm_pseletivo">
    <div class="container pt-3">
        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
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

        <h1>Processo Seletivo</h1>
        <p class="text-justify">Área destinada à Edição de Processo Seletivo.<br>
        Nesta área você pode: definir se o processo está ativo e editar as informações do provesso seletivo em andamento.<br>
        Basta clicar no botão de estado do Processo Seletivo para definir se está ativo ou não.</p>

        <!--<h4>Estado do Processo Seletivo: <button class="btn btn-success">Ativo</button> <button class="btn btn-danger">Desativado</button></h4> -->

        <form class="border border-light px-1 py-3 rounded" method="post" action="{{ route('processo.update', $processo_seletivo) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="border px-3 py-3 my-2 rounded">
                <div class="form-group">
                    @if($processo_seletivo->usa_descricao == true)
                    <input type="checkbox" name="estado" id="ps_estado" checked="true">
                    @else
                    <input type="checkbox" name="estado" id="ps_estado">
                    @endif
                    <label for="ps_desc">Ativar processo seletivo</label>
                </div>

                <div class="form-group">
                    <label for="ps_desc">Descrição do Processo</label>
                    <textarea class="form-control" rows="5" placeholder="Descrição do processo" name="descricao" id="ps_desc">{{ $processo_seletivo->descricao }}</textarea>
                    
                    <div class="form-check">
                        @if($processo_seletivo->usa_descricao == true)
                        <input class="form-check-input" type="checkbox" name="usa_descricao" id="check-descricao" checked="true">
                        @else
                        <input class="form-check-input" type="checkbox" name="usa_descricao" id="check-descricao">
                        @endif
                        <label class="form-check-label" for="check-descricao">
                        Exibir descrição na página principal
                        </label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="data_final">Data final das inscrição</label>
                        <input type="date" class="form-control" name="data_final" id="data_final" placeholder="DD/MM/AAAA" value="{{ $processo_seletivo->data_final ?? '' }}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="hora_final">Hora final de inscrição</label>
                        <input type="time" class="form-control" name="hora_final" id="hora_final" placeholder="HH:MM" value="{{ $processo_seletivo->hora_final ?? '' }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="img_slide">Edital pdf</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pdf" name="pdf">
                        <label class="custom-file-label" for="pdf">Escolha a arquivo</label>
                    </div>
                    <div class="form-check">
                        @if($processo_seletivo->usa_pdf == true)
                        <input class="form-check-input" type="checkbox" id="check-pdf" checked="true">
                        @else
                        <input class="form-check-input" type="checkbox" id="check-pdf">
                        @endif
                        <label class="form-check-label" for="check-pdf">
                        Exibir pdf na página principal
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="link_ps">Link do Forms</label>
                    <input type="text" class="form-control" name="link_driver" id="link_ps" placeholder="Cole o Link do Google Forms que será usado no Processo Seletivo Atual" value="{{ $processo_seletivo->link_driver }}" >
                    
                    <div class="form-check">
                        @if($processo_seletivo->usa_link_driver == true)
                        <input class="form-check-input" type="checkbox" name="usa_link_driver" id="check-link" checked="true">
                        @else
                        <input class="form-check-input" type="checkbox" name="usa_link_driver" id="check-link">
                        @endif
                        <label class="form-check-label" for="check-link">
                        Exibir link na página principal
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>

        </form>
    </div>


{{ $processo_seletivo->exibeLink() }}
</section>

@endsection