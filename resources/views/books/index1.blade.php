@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <!-- Html cria uma tabela para relacionar os dados do array $books -->

<h1 class='text-center text-primary mt-4 mb-4 border mw-150'>Relação de Livros</h1>

<form action="{{ route('search') }}" method='post'>
    @csrf
    <div class="row">
        <div class="col" style='margin-left: 850px'>
            <div class="input-group mb-4 mw-2">
            
                <input type="text" class="form" name='search' style='width:300px' placeholder="search book" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
                
            </div>
        </div>
    </div>
</form>

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

<!-- Botões com opções de relacionar e cadastrar livros e autores -->

<div class='text-center mt-3 mb-4'>
    <a href="{{ route('criarBook') }}">
        <button class='btn btn-success'>Cadastrar Livros</button>
    </a>   
    <a href="{{ route('homeAutor') }}">
        <button class='btn btn-success'>Relação de Autores</button>
    </a> 
    <a href="{{ route('criarAutor') }}">
        <button class='btn btn-success'>Cadastrar Autores</button>
    </a>     
    <a href="{{ route('homeBook') }}">
        <button class='btn btn-success'>Relação de Livros</button>
    </a>     
</div>

@endsection