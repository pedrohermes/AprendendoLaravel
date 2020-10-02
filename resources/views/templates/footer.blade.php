

<nav class="navbar fixed-bottom text-center" style="background-color: #C0C0C0; height: 60px;">
 

  <!-- Botões com opções de relacionar e cadastrar livros e autores -->

  <div class='text-center mt-1 mb-4' style='margin-left: 370px'>
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




</nav>