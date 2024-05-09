<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Perusahaan | Employease</title>
    
    <!-- bs5 -->
    <link
    rel="stylesheet"
    href="css/bootstrap.css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet"/>
    
    <!-- CSS style  -->
    <link rel="stylesheet" href="css_daf/style_daf.css" />
    
    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    
  </head>
  <body>
<!-- Nav up -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="../Frontend">
          <img src="image/logo.png" alt="Logo Employease" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Cari Kerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" >Daftar Perusahaan()</a>
            </li>
          </ul>
          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-lg-none">
            <button class="btn btn-daftar btn-navbar-right my-2 my-sm-0 px-4">
              Masuk
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0">
              Daftar
            </button>
          </form>
        </div>
        <!-- Dekstop Button -->
          <li class="nav-item dropdown my-lg-0 d-none d-lg-block">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="#" alt="profile" />
              Nama Akun 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Lihat Akun</a></li>
              <li><a class="dropdown-item" href="#">Lowongan tersimpan</a></li>
              <li><a class="dropdown-item" href="#">Lamaran Tersampai</a></li>
              <li><a class="dropdown-item" href="#">Pengaturan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Log Out</a></li>
            </ul>
          </li>
            <div class="notif">
              <button class="btn btn-light">
                <i data-feather="bell"></i>
              </button>
            </div>
          

        <!-- <button class="btn btn-outline-success" type="button">Masuk</button> -->
      </nav>
    </div>
    <div class="head">
      <div class="bg-dark"></div>
      <figure class="text-center">
        <h1 style="color: #FFE6C7; font-weight: bold;">A well-known quote, contained in a blockquote element.</h1>
        <p style="color: #FFE6C7;">Loren ipsum</p>
      </figure>
      <form class="d-flex">
        <div class="input-group" style="margin-right: 4px;">
          <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input class="form-control me-2" type="Kata Kunci" placeholder="Kata Kunci" aria-label="Kata Kunci">
        </div>
        <div class="input-group" style="margin-right: 12px;">
          <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
          <input class="form-control me-2" type="Lokasi" placeholder="Lokasi" aria-label="Lokasi">
        </div>
        <button class="btn btn-primary btn-carip" type="submit">Cari Perusahaan</button>
      </form>
    </div>
    
    <!-- Kategori perusahaan -->
    <div class="container">
      <h1 style="color: #454545; font-weight: bold;  margin: 100px 0px 20px;">Kategori Perusahaan</h1>
      <div class="row g-4 text-center" style="margin-top: 24px;">
        
        <!-- row 1 kategori -->
        <div class="col-lg-3 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="monitor"></i>
            </div>
            <h5 class="mt-4 mb-3">Teknologi</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="pen-tool"></i>
            </div>
            <h5 class="mt-4 mb-3">Desain</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="shopping-cart"></i>
            </div>
            <h5 class="mt-4 mb-3">Pemasaran</h5>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="dollar-sign"></i>
            </div>
            <h5 class="mt-4 mb-3">Keuangan</h5>
          </div>
        </div>
      </div> 

        <!-- row 2 kategori -->
      <div class="row g-5 text-center" style="margin-top: 24px; margin-bottom: 24px;">

        <div class="col-lg-3 col-sm-6 ">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="database"></i>
            </div>
            <h5 class="mt-4 mb-3">Bisnis</h5>
          </div>
        </div>
        
        <div class="col-lg-3 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <a href="#">
              <div class="iconbox">
                <i data-feather="truck"></i>
              </div>
            </a>
            <h5 class="mt-4 mb-3">Logistik</h5>
          </div>
        </div>
        
        <div class="col-lg-3 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="activity"></i>
            </div>
            <h5 class="mt-4 mb-3">Kesehatan</h5>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="shuffle"></i>
            </div>
            <h5 class="mt-4 mb-3">Lain-lain</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- perusahaan rekomendasi -->
    <div class="container">
      <h1 style="color: #454545; font-weight: bold; margin-top: 100px;">Perusahaan Rekomendasi</h1>
      <h6>Paling banyak dilamar</h6>

      <div class="row g-4 text-left" style="margin-top: 24px;">
        <div class="col-lg-4 col-sm-6">
          <div class="category theme-shadow p-lg-5 p-4">
            <div class="iconbox">
              <i data-feather="monitor"></i>
            </div>
            <h5 class="mt-4 mb-3">Teknologi</h5>
          </div>
        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
    <script>
      src="script.js"
      feather.replace();
    </script>
  </body>
</html>
