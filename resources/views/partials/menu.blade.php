<nav class="navbar navbar-expand-lg navbar-dark custom-bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#">
      <img src="{{ asset('storage/arquivos/style_2-removebg-preview.png') }}" alt="Logo" width="120" height="120">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCenter"
      aria-controls="navbarCenter" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCenter">
      <ul class="navbar-nav mb-2 mb-lg-0 mx-lg-auto flex-column flex-lg-row align-items-lg-center justify-content-center w-100">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/paginacasual') }}"><strong>CASUAL</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/paginastreet') }}"><strong>STREETWEAR</strong></a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="{{ url('/paginafeminina') }}"><strong>FEMININO</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/chuteiras') }}"><strong>CHUTEIRAS</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/paginaesportivo') }}"><strong>ESPORTIVO</strong></a>
        </li>
      </ul>
      <div class="hidden sm:flex sm:items-center sm:ms-6">
        <link rel="icon" type="image/png" href="{{ asset('favicon-v2.png') }}">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
              <div>{{ Auth::user()->name }}</div>

              <div class="ms-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
              {{ __('Perfil') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>
    </div>
  </div>
</nav>