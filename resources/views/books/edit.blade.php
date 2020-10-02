@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <h1 class='text-center text-primary border' style='margin-top: 80px'>Editar Livro</h1>
    <div class="col-8 m-auto">
    <!-- Html cria um formulario para editar os dados dos livros -->
       <form action="{{ route('editarBook', $books->id)}}" name='formCad' id='formCad' method='post'>
            @method('PUT')
            @csrf
            <input class='form-control' type="text" name='title' id='title' value='{{$books->title ?? ""}}' required>
            <select class="form-control mt-2" id="id_autor" name='id_autor' required>
                <option value="{{$books->relAutors->id}}">{{$books->relAutors->name}}</option>
                <!-- Foreach relaciona o array autors enviado pelo BooksController -->
                @foreach($autors as $autor)
                    <option value="{{$autor->id}}">{{$autor->name}}</option>
                @endforeach
            </select>
            <input class='form-control mt-2' type="text" name='pages' id='pages' value='{{$books->pages ?? ""}}' required>
            <input class='form-control mt-2' type="text" name='price' id='price' value='{{$books->price ?? ""}}' required>
            <input class='btn btn-primary mt-2' type="submit" value="Editar">
           
       </form>
       <tr>
            <td></td>
            <td><h6 class='text-center alert-danger mt-2' id="msg">Confima as alterações do livro: {{$books->title}}</h4></td>
        </tr>


    </div>

@endsection