@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <!-- Html cria uma tabela para relacionar os dados do array $books -->

<h1 class='text-center text-primary border' style='margin-top: 80px'>Relação de Livros</h1>

<div class="col-8 m-auto">
    <table class="table table-warning text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Paginas</th>
                <th scope="col">Preço</th>
                <th scope="col-8"></th>
                <th scope="col-8">Action</th>
                <th scope="col-8"></th>
            </tr>
        </thead>

        <tbody>
            <!-- Imprime os dados da variável $books enviada pelo BooksController -->
            @foreach($books as $book)
            @php 
                $autor=$book->find($book->id)->relAutors;
            @endphp
                <tr>
                    <th scope="col">{{$book->id}}</td>
                    <td scope="col">{{$book->title}}</td>
                    <td scope="col">{{$autor->name}}</td>
                    <td scope="col">{{$book->pages}}</td>
                    <td scope="col">{{$book->price}}</td>
                    <td>
                        <a href="{{ route('exibirBook', $book->id) }}">
                            <button class='btn btn-dark'>Visualizar</button>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('formEditarBook', $book->id) }}">
                            <button class='btn btn-primary'>Editar</button>
                        </a>
                    </td>
                    <td>
                    <a href="{{ route('confirmeBook', $book->id) }}">
                            <button class='btn btn-danger'>Deletar</button>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>

       
</div>

