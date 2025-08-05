<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title inertia>Styleshoes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
  html, body {
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
      <ul class="navbar-nav ms-lg-auto flex-row flex-lg-row align-items-center gap-2">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-house"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-add"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/login">Login</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:8000/register">Registra-se</a></li>
            <li><hr class="dropdown-divider"></li>
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

  <div class="alerta alert-ligth" role="alert">
    <strong>Itens promocionais com descontos de até 50% off</strong>
  </div>
  <div class="container-fluid p-0">
    <img src="https://br.puma.com/media/contentmanager/content/25AW_Ecom_TS_Football_Q3-Untamed-Pack_Homepage_Full-Bleed-Hero_Large-Desk_1440x500px_Combined-(1).jpg" alt="imagemhome" class="img-fluid imagemhome">
    <div class="mensagem">
      <h1><b>JOGUE COM TUDO!<b></h1>
      <p>Consulte as nossas novidades</p>
      <div class="btn btn-primary">
        <a href="#" class="text-black text-decoration-none"><b>Ver mais<b></a>
      </div>
    </div>
    <br>

    <div class="container-fluid justify-content-center text-center">
      <h1><strong>Navegue e descubra o seu estilo</strong></h1>
      <br>

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row g-0 align-items-stretch">
              <div class="col-md-3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_400,w_400/Jashlem_031_desktop_bbeb0e959a.jpg" class="d-block" alt="imagem1">
              </div>
              <div class="col-md-3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_400,w_400/BLONDEY_SHOT_04_0631_desktop_603ce363de.jpg" class="d-block" alt="imagem2">
              </div>
              <div class="col-md-3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_400,w_400/5979719_THE_ORIGINAL_SUPERSTAR_FW_25_LAM_DAT_ONSITE_PHASE_1_1080x1920_12_desktop_57879e3d9a.jpg" class="d-block" alt="imagem3">
              </div>
              <div class="col-md-3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_400,w_400/5922962_THE_ORIGINAL_SUPERSTAR_FW_25_LAM_DAT_ONSITE_PHASE_1_STYLING_CARROUSEL_LOOKBOOK_1080x1920_7_desktop_326f63e01e.jpg" class="d-block" alt="imagem4">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row g-0 align-items-stretch">
              <div class="col-md-3">
                <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/bd08bee8e2db4e7699e0280dfafb3287_9366/Camisa_Peru_1978_Branco_JI7634_HM1.jpg" class="d-block" alt="imagem5">
              </div>
              <div class="col-md-3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_400,w_400/BLONDEY_SHOT_04_0631_desktop_603ce363de.jpg" class="d-block" alt="imagem6">
              </div>
              <div class="col-md-3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_400,w_400/5979719_THE_ORIGINAL_SUPERSTAR_FW_25_LAM_DAT_ONSITE_PHASE_1_1080x1920_12_desktop_57879e3d9a.jpg" class="d-block" alt="imagem7">
              </div>
              <div class="col-md-3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/if_w_gt_400,w_400/5922962_THE_ORIGINAL_SUPERSTAR_FW_25_LAM_DAT_ONSITE_PHASE_1_STYLING_CARROUSEL_LOOKBOOK_1080x1920_7_desktop_326f63e01e.jpg" class="d-block" alt="imagem8">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    </br>

    <div class="container-fluid p-0 position-relative">
      <img src="https://br.puma.com/media/contentmanager/content/25AW_Ecom_Train_Hyrox_CLP_Full-Bleed-Hero_Large-Desk_2000x694px.jpg" alt="imagemhome2" class="img-fluid imagemhome2">
      <div class="msg">
        <h1><b>PUMA X STYLE<b></h1>
        <p>Parceiro oficial</p>
        <div class="btn2 btn-primary">
          <a href="#" class="text-black text-decoration-none"><b>Ver mais<b></a>
        </div>
      </div>
      <div class="container-fluid text-center py-4">
        <h1><strong>Marcas ícones de venda</strong></h1>
        <br>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-center align-items-stretch text-center mx-auto" style="max-width: 1400px;">
          <div class="col d-flex align-items-stretch">
            <div class="card h-100" style="min-width: 270px; max-width: 320px; margin: 0 auto;">
              <img src="{{asset('storage/arquivos/nike.png')}}" class="card-img-top" alt="card1" style="object-fit: contain; height: 180px;">
              <div class="card-body">
                <h5 class="card-title"><b>NIKE</b></h5>
                <p class="card-text">A Nike, uma das maiores marcas desportivas do mundo, foi fundada em 1964 por Phil Knight e Bill Bowerman, inicialmente sob o nome Blue Ribbon Sports.</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card h-100" style="min-width: 270px; max-width: 320px; margin: 0 auto;">
              <img src="{{asset('storage/arquivos/puma2.jpg')}}" class="card-img-top" alt="card2" style="object-fit: contain; height: 180px;">
              <div class="card-body">
                <h5 class="card-title"><b>PUMA</b></h5>
                <p class="card-text">A Puma é uma empresa alemã de artigos esportivos fundada em 1948 por Rudolf Dassler, irmão de Adolf Dassler.</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card h-100" style="min-width: 270px; max-width: 320px; margin: 0 auto;">
              <img src="{{asset('storage/arquivos/newbalance.png')}}" class="card-img-top" alt="card3" style="object-fit: contain; height: 180px;">
              <div class="card-body">
                <h5 class="card-title"><b>NEWBALANCE</b></h5>
                <p class="card-text">A história da New Balance começou em 1906, em Boston, com o imigrante britânico William J. Riley, que fundou a New Balance Arch Support Company.</p>
              </div>
            </div>
          </div>
          <div class="col d-flex align-items-stretch">
            <div class="card h-100" style="min-width: 270px; max-width: 320px; margin: 0 auto;">
              <img src="{{asset('storage/arquivos/adidas2.png')}}" class="card-img-top" alt="card4" style="object-fit: contain; height: 180px;">
              <div class="card-body">
                <h5 class="card-title"><b>ADIDAS</b></h5>
                <p class="card-text">A Adidas foi fundada por Adolf "Adi" Dassler em 1949 na Alemanha, após sua separação do irmão Rudolf, com quem gerenciava a empresa familiar "Gebrüder Dassler Schuhfabrik".</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>

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
</html>