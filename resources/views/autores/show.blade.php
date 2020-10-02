@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <h1 class='text-center text-primary border' style='margin-top: 80px'>Dados do Autor</h1>
    <div class="col-8 m-auto">

          <!-- É criado uma tabela com os dados do autor -->
        <table class="table table-warning text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col-8"></th>
                    <th scope="col-8">Action</th>
                    <th scope="col-8"></th>
                </tr>
            </thead>

            <tbody>
              
                <tr>
                    <th scope="col">{{$autors->id}}</td>
                    <td scope="col">{{$autors->name}}</td>
                    <td scope="col">{{$autors->email}}</td>
                    <td></td>
                    <!-- HTML imprime os botões de editar e deletar autor -->
                    <td>
                        <a href="{{ route('formEditarAutor', $autors->id) }}">
                            <button class='btn btn-primary'>Editar</button>
                        </a>
                    </td>
                    <td>
                    <a href="{{ route('confirmeAutor', $autors->id) }}">
                            <button class='btn btn-danger'>Deletar</button>
                        </a>
                    </td>
                </tr>
            </tbody>

        </table>

       
    </div>

    <h1 class='text-center text-primary mt-4 mb-4 border'>Relação de Livros</h1>

      <!-- É criado uma tabela com a relação de livors do autor selecionado -->
    <div class="col-8 m-auto mt-4 mb-4">
        <table class="table table-warning text-center">
        <thead class="thead-light">
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
            <!-- Uma diretiva relaciona os livros do autor selecionado -->
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

@endsection