<x-app-layout>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <div class='mt-2'>
            <h6 style='color: blue'>Usuário: {{ Auth::user()->name }}</h6>
        </div>

        <div class='l-25'>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-jet-dropdown-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                {{ __('Logout') }}
            </x-jet-dropdown-link>
        </form>
        </div>

    </x-slot>

    <div class='text-center text-primary mt-3 mb-4 ml-5'>
        <h2>Opções:</h2>
        <a class='' href="{{ route('homeBook') }}">
            <button class='btn btn-dark mt-2'style='font-size: 30px'>Relação de Livros</button>
        </a>
        <br>
        <a class='' href="{{ route('homeAutor') }}">
            <button class='btn btn-dark mt-2'style='font-size: 30px'>Relação de Autores</button>
        </a>
        <br>
        <a class='' href="{{ route('criarBook') }}">
            <button class='btn btn-dark mt-2' style='font-size: 30px'>Cadastrar Livros</button>
        </a>
        <br>
        <a class='' href="{{ route('criarAutor') }}">
            <button class='btn btn-dark mt-2'style='font-size: 30px'>Cadastrar Autor</button>
        </a>
        <br>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
