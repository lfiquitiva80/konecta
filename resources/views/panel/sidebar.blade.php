<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="icon-speedometer"></i> Dashboard </a>
      </li>

      <li class="nav-title">
       Menú KONECTA
      </li>
      <li class="nav-item">
        
      @if(Auth::user()->perfil_id == 1)
        <a class="nav-link" href="{{ route ('clientes.index')}}"><i class="icon-book-open"></i>  Clientes</a>
        <a class="nav-link" href="{{ route ('usuario.index')}}"><i class="icon-people"></i>  Usuario</a>
      @else
      <a class="nav-link" href="{{ route ('clientes.index')}}"><i class="icon-book-open"></i>  Clientes</a>
      @endif

      
      </li>
    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
