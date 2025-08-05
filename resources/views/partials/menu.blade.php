<nav class="navbar navbar-expand-lg navbar-dark custom-bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#">
      <img src="{{ asset('style 2.png') }}" alt="Logo" width="120" height="120">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenter"
      aria-controls="navbarCenter" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarCenter">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/pagina1"><strong>CASUAL</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagina2"><strong>STREETWEAR</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagina3"><strong>FEMININO</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagina4"><strong>CHUTEIRAS</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pagina5"><strong>ESPORTIVO</strong></a>
        </li>
      </ul>
    </div>
    <div class="d-flex align-items-center">
      <ul class="navbar-nav mb-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-house"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-person-add"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-bag"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>