@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')

    <h1 class='text-center text-primary border' style='margin-top: 80px'>Cadastrar Livros</h1>

    <div class="col-8 m-auto">
        <!-- Diretiva if e um foreach testa e relaciona os erros da validação  -->
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-2 mb-2 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        <!-- HTML cria um formulário para cadastrar os dados do livro -->
       <form action="{{route('inserirBook')}}" name='formCad' id='formCad' method='post'>
            @csrf
            <input class='form-control' type="text" name='title' id='title' placeholder='Título' required>
            <select class="form-control mt-2" id="id_autor" name='id_autor' required>
                <option value="">Autor</option>
                <!-- Diretiva foreach imprime o array autors -->
                @foreach($autors as $autor)
                    <option value="{{$autor->id}}">{{$autor->name}}</option>
                @endforeach
            </select>
            <input class='form-control mt-2' type="text" name='pages' id='pages' placeholder='Páginas' required>
            <input class='form-control mt-2' type="text" name='price' id='price' placeholder='Preço' required>
            <input class='btn btn-primary mt-2' type="submit" value="Cadastrar">

       </form>

    </div>

@endsection