<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>Styleshoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon-v2.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    html,
    body {
        overflow-x: hidden;
    }
</style>
<body>
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
                <ul class="navbar-nav ms-lg-auto flex-row flex-lg-row align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/"><i class="bi bi-house"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-add"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/login">Login</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/register">Registra-se</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Contato</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-bag"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-light">
        <div class="container py-5">
            <div class="row justify-content-center gap-4">
                <div class="card" style="width: 18rem;">
                    <img src="storage/arquivos/new1.png" class="card-img-top" alt="new1">
                    <div class="card-body">
                        <h5 class="card-title">Tênis New Balance Fuelcell Rebel V5 Masculino</h5>
                        <p class="card-text">R$ 1.099,99</p>
                        <button class="btn btn-secondary w-100">Adicionar ao Carrinho</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="storage/arquivos/new2.png" class="card-img-top" alt="new2">
                    <div class="card-body">
                        <h5 class="card-title">Tênis New Balance Fuelcell Supercomp Elite V4 Masculino</h5>
                        <p class="card-text">R$ 2.099,99</p>
                        <button class="btn btn-secondary w-100">Adicionar ao Carrinho</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="storage/arquivos/fila1.png" class="card-img-top" alt="fila1">
                    <div class="card-body">
                        <h5 class="card-title">Tênis Fila Racer Carbon 3 White Masculino</h5>
                        <p class="card-text">R$ 1.499,99</p>
                        <button class="btn btn-secondary w-100">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-ligth py-4">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3">
                    <h3>sobre nós</h3>
                    <p>Fundada em 2023 a style shoes surgiu com a promessa de revolucionar o mercado de calçados.</p>
                    <p>St. de Autarquias Norte Q 5 Centro Empresarial CNC, BL B 7º andar - Asa Norte, Brasília - DF.</p>
                    <p>(61)99292-0494</p>
                </div>
                <div class="col col-lg-3">
                    <h4>Marcas</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-white">Nike</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Adidas</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Puma</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Fila</a></li>
                        <li><a href="#" class="text-decoration-none text-white">New Balance</a></li>
                    </ul>
                </div>
                <div class="col col-lg-3">
                    <h4>Menu</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-white">Home</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Casual</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Feminino</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Chuteiras</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Esportivo</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Streetweare</a></li>
                    </ul>
                </div>
                <div class="col col-lg-3 text-lg-end">
                    <h4>Redes Sociais</h4>
                    <a href="#" class="text-decoration-none text-white"><i class="bi bi-instagram fs-2 me-2"></i>
                        <a href="#" class="text-decoration-none text-white"><i class="bi bi-facebook fs-2 me-2"></i>
                         <a href="#" class="text-decoration-none text-white"><i class="bi bi-twitter-x fs-2 me-2"></i>
                     <a href="#" class="text-decoration-none text-white"><i class="bi bi-youtube fs-2 me-2"></i>
                </div>
            </div>
            <hr>
            <div>
                <p>2023 © Todos os direitos reservados | Desenvolvido por Style Shoes</p>
                <a href="#" class="text-decoration-none text-white me-3">Política de Privacidade</a>
                <a href="#" class="text-decoration-none text-white">Termos de Uso</a>
            </div>
        </div>
        </div>
    </footer>
</body>