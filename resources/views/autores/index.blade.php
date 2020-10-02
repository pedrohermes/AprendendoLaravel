@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

<!-- Html cria uma tabela e imprime os dados do array autors -->

<h1 class='text-center text-primary border' style='margin-top: 80px'>Relação de Autores</h1>

<div class="col-8 m-auto">
    <table class="table table-secondary text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col-8">Action</th>
                <th scope="col-8">Action</th>
                <th scope="col-8">Action</th>
            </tr>
        </thead>

        <tbody>
            <!-- Diretiva relaciona os autores cadastrados -->
            @foreach($autors as $autor)
                <tr>
                    <th scope="col">{{$autor->id}}</td>
                    <td scope="col">{{$autor->name}}</td>
                    <td scope="col">{{$autor->email}}</td>
                    <td>
                        <a href="{{ route('exibirAutor', $autor->id) }}">
                            <button class='btn btn-dark'>Visualizar</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('formEditarAutor', $autor->id) }}">
                            <button class='btn btn-primary'>Editar</button>
                        </a>
                    </td>
                    <td>
                    <a href="{{ route('confirmeAutor', $autor->id) }}">
                            <button class='btn btn-danger'>Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>


@endsection