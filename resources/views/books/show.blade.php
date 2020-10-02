@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <h1 class='text-center text-primary border' style='margin-top: 80px'>Dados do Livro</h1>
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
            </tr>
        </thead>

            <tbody>

                    @php 
                        $autor=$books->find($books->id)->relAutors;
                    @endphp

                    <tr>
                        <th scope="col">{{$books->id}}</td>
                        <td scope="col">{{$books->title}}</td>
                        <td scope="col">{{$autor->name}}</td>
                        <td scope="col">{{$books->pages}}</td>
                        <td scope="col">{{$books->price}}</td>
                        <td>
                            <a href="{{ route('formEditarBook', $books->id) }}">
                                <button class='btn btn-primary'>Editar</button>
                            </a>
                            <a href="{{ route('confirmeBook', $books->id) }}">
                                <button class='btn btn-danger'>Deletar</button>
                            </a>
                        </td>
                    </tr>
            </tbody>

        </table>

       
    </div>


    <h1 class='text-center text-primary mt-4 mb-4 text-primary border'>Dados do Autor</h1>

    <div class="col-8 m-auto mt-8">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col-8"></th>
                    <th scope="col-8"></th>
                    <th scope="col-8">Action</th>
                    <th scope="col-8"></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="col">{{$autor->id}}</td>
                    <td scope="col">{{$autor->name}}</td>
                    <td scope="col">{{$autor->email}}</td>
                    <td></td>
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
            </tbody>

        </table>

       
    </div>


@endsection