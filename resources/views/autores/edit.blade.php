@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')
    <h1 class='text-center text-primary border' style='margin-top: 80px'>Editar Autor</h1>
    <div class="col-8 m-auto">
        <!-- HTML cria formulário para editar os dados do autor selecionado -->
       <form action="{{ route('editarAutor', $autors->id) }}" name='formCad' id='formCad' method='post'>
            @method('PUT')
            @csrf
            <input class='form-control mt-2' type="text" name='name' id='name' value='{{$autors->name ?? ""}}' required>
            <input class='form-control mt-2' type="email" name='email' id='email' value='{{$autors->email ?? ""}}' required>
            <input class='form-control mt-2' type="password" name='password' id='password' value='{{$autors->password ?? ""}}' required>
            <input class='btn btn-primary mt-2' type="submit" value="Editar">
       </form>
       <tr>
            <td></td>
            <td><h6 class='text-center alert-danger mt-2' id="msg">Confima as alterações do Autor: {{$autors->name}}</h4></td>
        </tr>

    </div>

@endsection