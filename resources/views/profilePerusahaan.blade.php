<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Perusahaan | Employease</title>
    
    <!-- bs5 -->
    <link
    rel="stylesheet"
    href="css/bootstrap.css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Assistant:wght@200..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
    rel="stylesheet"
    />
    
    <!-- CSS style  -->
    <link rel="stylesheet" href="css_profComp/style_Com.css" />
    
    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    
  </head>
  <body>
<!-- Nav up -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="../index.html">
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
              <a class="nav-link selected" href="#" >Daftar Perusahaan</a>
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
        <!-- ccount menu-->
          <li class="nav-item dropdown my-lg-0 d-none d-lg-block">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="#" alt="profile" />
              Nama Akun 
            </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/profil">Lihat Akun</a></li>
              <li><a class="dropdown-item" href="#">Lamaran Tersampai</a></li>
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
      <div class="container">
        <p style="color: gray;">
          Profile Perusahaan
        </p>
        <div class="row">
          <div class="col-3">
            <img src="image/pongo.png" class="img-thumbnail" alt="Logo Perusahaan" style="border: 0cap;">
          </div>
          <div class="col-9">
            <h1>Nama Perusahaan</h1>
            <button type="button" class="btn btn-primary">
              <span class="badge bg-secondary" style="margin-right: 4px;">4</span> Lowongan
            </button>

            <div class="input-group">
              <span class="location"><i data-feather="map-pin" style="padding-right: 0;"></i></span>
              <p>Lokasi perusahaan</p>
            </div>
          </div>
          <h3 class="sub_judul mt-2">TEST</h3>
      </div>
      

    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
