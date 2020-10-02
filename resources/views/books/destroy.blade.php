@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <h1 class='text-center text-primary border' style='margin-top: 80px'>Excluir Livro</h1>
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
                <!-- Diretiva cria uma variável $autor para receber os dados do autor relacionado para ser deletado -->
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

                            <!-- Form cria o botão para autenticar o registro a ser excluído -->
                            <form action="{{ route('deletarBook', $books->id) }}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <BUtton type='submit' class='btn btn-danger'>Deletar</BUtton>
                                
                            </form>

                        </td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <!-- Html cria uma caixa de mensagem de alerta sobre o livro a ser excluído -->
                        <td><h6 class='text-center alert-danger' id="msg">Confima a exclusão: {{$books->title}}</h4></td>
                    </tr>
            </tbody>

        </table>

       
    </div>

@endsection