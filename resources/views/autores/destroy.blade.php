@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <h1 class='text-center text-primary border' style='margin-top: 80px'>Excluir Autor</h1>

    <div class="col-8 m-auto">
        <!-- HTML cria uma tabela para exibir os dados do autor a ser excluído -->
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col-8">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="col">{{$autors->id}}</td>
                    <td scope="col">{{$autors->name}}</td>
                    <td scope="col">{{$autors->email}}</td>
                    <td scope="col"><input type="password" value='{{$autors->password}}'></td>

                    <td>
                        <form action="{{ route('deletarAutor', $autors->id) }}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <BUtton type='submit' class='btn btn-danger'>Deletar</BUtton>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><h6 class='text-center alert-danger' id="msg">Confima a exclusão: {{$autors->name}}</h4></td>
                    <td><h6 class='text-center alert-danger' id="msg">A exclusão do autor excluirá os livros</h4></td>
                </tr>
            </tbody>

        </table>

       
    </div>


@endsection