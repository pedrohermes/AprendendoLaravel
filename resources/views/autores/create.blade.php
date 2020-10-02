@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('content')
    <h1 class='text-center text-primary border' style='margin-top: 80px'>Cadastrar Autor</h1>
    <div class="col-8 m-auto">
        <!-- HTML cria um formulário para cadastrar um novo autor -->
       <form action="{{ route('inserirAutor') }}" name='formCad' id='formCad' method='post'>
            @csrf
            <input class='form-control mt-2' type="text" name='name' id='name' placeholder='Nome' required>
            <input class='form-control mt-2' type="email" name='email' id='email' placeholder='Email' required>
            <input class='form-control mt-2' type="password" name='password' id='password' placeholder='Password' required>
            <input class='btn btn-primary mt-2' type="submit" value="Editar">
       </form>
       <tr>
            <td></td>
            <td><h6 class='text-center alert-danger mt-2' id="msg">Confima o cadastro do Autor</h4></td>
        </tr>

    </div>

@endsection