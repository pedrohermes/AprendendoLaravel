@extends('templates.template')

<!-- Sessão imprime o html no template princialno caminho templates.template -->
@section('search')

<div class="row">
    <div class="col" style='margin-left: 850px'>
        <div class="input-group mb-4 mw-2">
            <input type="text" class="form" style='width:400px' placeholder="search book" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
            </div>
        </div>
    </div>
</div>

@endsection