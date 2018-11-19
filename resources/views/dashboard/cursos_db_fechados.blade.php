@extends('layouts.admin.app')

@section('content')

<section id="cursos_historico">
    <div class="container">
        <h1>Cursos Realizados</h1>
        <p class="text-justify"> Tabela de cursos já concluídos e seus dados</p>
        <div class="container">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Curso</th>
                            <th scope="col">Data</th>
                            <th scope="col">Vagas Limite</th>
                            <th scope="col">Inscritos</th>
                            <th scope="col">Presentes</th>
                            <th scope="col">Ausentes</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Valor Adquirido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Curso 1</td>
                            <td>XX/XX/XX</td>
                            <td>50</td>
                            <td>45</td>
                            <td>42</td>
                            <td>3</td>
                            <td>R$ 20,00</td>
                            <td>R$ 900,00</td>
                        </tr>
                        <tr>
                            <td>Curso 2</td>
                            <td>XX/XX/XX</td>
                            <td>30</td>
                            <td>33</td>
                            <td>28</td>
                            <td>5</td>
                            <td>R$ 0,00</td>
                            <td>R$ 0,00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection