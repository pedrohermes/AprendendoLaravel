@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <h1 class='text-center'>Relação de Livros</h1>

    <div class='text-center mt-3 mb-4'>
    <a href="{{ route('criarBook') }}">
        <button class='btn btn-success'>Cadastrar Livros</button>
    </a>   
    <a href="{{ route('home') }}">
        <button class='btn btn-success'>Relação de Autores</button>
    </a> 
    <a href="{{ route('criar') }}">
        <button class='btn btn-success'>Cadastrar Autores</button>
    </a>     
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Paginas</th>
                <th scope="col">Preço</th>
                <th scope="col-8">Action</th>
                <th scope="col-8">Action</th>
                <th scope="col-8">Action</th>
            </tr>
        </thead>

            <tbody>
                @foreach($books as $book)
                @php 
                    $user=$book->find($book->id)->relUsers;
                @endphp
                    <tr>
                        <th scope="col">{{$book->id}}</td>
                        <td scope="col">{{$book->title}}</td>
                        <td scope="col">{{$user->name}}</td>
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

@endsection