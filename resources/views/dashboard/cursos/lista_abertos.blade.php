@extends('layouts.admin.app')

@section('content')

<section id="cursos_abertos">
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
    <div id="resultado">
    </div>
    <div class="container pt-3">
        <h1>Cursos Abertos</h1>
        <p>Tabela de cursos em andamento.<br>
        Você pode alterar informações ou acessar as listas de presença</p>

        <div class="container">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Data</th>
                            <th scope="col">Vagas Limite</th>
                            <th scope="col">Inscritos</th>
                            <th scope="col">Valor</th>
                            <th scope="col" style="text-align: center;">Editar</th>
                            <th scope="col" style="text-align: center;">Lista de Presença</th>
                            <th scope="col" style="text-align: center;">Excluir</th>
                            <th scope="col" style="text-align: center;">Concluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <td>{{$curso->nome}}</td>
                            <td>{{$curso->data_evento}}</td>

                            @if($curso->numero_vagas == 0)
                                <td>Sem inscrição</td>
                                <td>Sem inscrição</td>
                            @else
                                <td>{{$curso->numero_vagas}}</td>
                                <td>{{$curso->inscritos}}</td>
                            @endif

                            @if($curso->pagamento == false)
                                <td>Gratuito</td>
                            @else
                                <td>{{$curso->valor}}</td>
                            @endif
                            <td style="text-align: center;">
                                <a href="{{ route('cursos.edit', $curso->id) }}">
                                    <img src="{{asset ('img/icones/editar.png')}}" style="height: 25px;">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('cursos.lista_presenca', $curso->id) }}">
                                    <img src="{{asset ('img/icones/lista.png')}}" style="height: 25px">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="#" data-toggle="modal" data-target="#modal-delete-curso" data-remove=".curso-{{ $curso->id }}" data-url="{{ route('cursos.destroy', $curso->id) }}">
                                    <img src="{{asset ('img/icones/excluir.png')}}" style="height: 25px">
                                </a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('cursos.concluir', $curso->id) }}">
                                    <img src="{{asset ('img/icones/concluir.png')}}" style="height: 25px">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Exclusão -->
    <div id="modal-delete-curso" class="modal-delete modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-delete-curso" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-delete-curso">Confirmação para deletar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deletar mesmo o curso?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button class="btn btn-delete" id="btn-delete" data-url="">
              <span class="mr-1">Deletar</span>
              <i class="icon fas fa-lg fa-trash"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim Modal Exclusão -->
</section>

<script>

    /* MODAL DE DELEÇÃO */
    /* Passa os dados para o modal de deleção */
    $('#modal-delete-curso').on('shown.bs.modal', function (event) {
        var botaoConfirmacao = $(this).find('#btn-delete');
        var botaoDeletar = $(event.relatedTarget);
        var elementoRemover = $(botaoDeletar.data('remove'));
        var modal = $(this);
        var url = botaoDeletar.data('url');
        var token = $('meta[name=csrf-token]').attr('content');

        botaoConfirmacao.off('click').click(function (event) {
            $.post(url, { _method: "delete", _token: token })
                .done(function (data) {
                    if (data.status == 'success'){
                        modal.modal('hide');
                        elementoRemover.remove();
                        $('#resultado').attr('class', 'alert alert-success')
                        $('#resultado').append('Curso deletetado com sucesso');

                    } else {
                        console.log(data);
                    }
                });     
        });
    });

</script>
@endsection