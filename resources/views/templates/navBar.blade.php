<nav class="navbar fixed-top navbar-light" style="background-color:	#C0C0C0; height: 70px;">
   <div class='mt-2 ml-6'>
        <a href="{{ route('dashboard') }}" class="mt-4 ml-6">
            <h6 class='btn btn-light border text-center'>Usuário: {{ Auth::user()->name }}</h6>
        </a>
    </div>
    <a class="navbar-brand">Navbar</a>

  <form class="form-inline mt-2" action="{{ route('search') }}" method='post'>
  @csrf
    <input class="form-control mr-sm-0" name='search' type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  
</nav>