<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employease</title>
    <link
      rel="stylesheet"
      href="css/bootstrap.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/main.css" />
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>
    <!-- Navbar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
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
              <a class="nav-link" href="/Daftar-Perusahaan"
                >Daftar Perusahaan</a
              >
            </li>
          </ul>

          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-daftar btn-navbar-right my-2 my-sm-0 px-4">
              Masuk
            </button>
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0">
              Daftar
            </button>
          </form>
        </div>
        
        <!-- Dekstop Button -->
        <form class="form-inline my-lg-0 d-none d-md-block">
          <button class="btn btn-daftar btn-navbar-right my-2 my-sm-0 px-4">
            Masuk
          </button>
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
            Daftar
          </button>
        </form>
        <!-- <button class="btn btn-outline-success" type="button">Masuk</button> -->
      </nav>
    </div>

    <!-- Header -->
    <!-- Main Contain -->
    <!-- Hero Section -->
    <section id="hero">
      <div class="container">
        <div class="row">
          <div class="col-7 d-flex align-items-center">
            <div>
              <h1 class="jargon">
                One Step <br />Closer To Your <br />New Job
              </h1>
              <p class="mt-3">
                An excellent platform for individuals seeking to <br />elevate
                their careers and are enthusiastic <br />
                about the startup scene.
              </p>
              <!-- Search Bar -->
              <div class="container-fluid">
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Posisi kerja"
                    aria-label="Job Position"
                  />
                  <i data-feather="briefcase"></i>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Lokasi"
                    aria-label="Location"
                  />
                  <button class="btn btn-outline-secondary" type="button">
                    Cari
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-5 text-right">
            <div>
              <img
                class="mt-5"
                src="image/landing_page_Image.png"
                alt="orang"
                width="300"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Kategori Pekerjaan Section -->
    <section id="categories" class="section-padding border-top">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-tittle">
              <h1>Katergori Pekerjaan</h1>
              <p class="text-right">
                <a href="#"
                  >Lihat semua lowongan
                  <i class="arrow right" data-feather="arrow-right"></i
                ></a>
              </p>
            </div>
          </div>
        </div>
        <div class="row g-4 text-center">
          <div class="col-lg-4 col-sm-6">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="pen-tool"></i>
              </div>
              <h5 class="mt-4 mb-3">Desain</h5>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="pen-tool"></i>
              </div>
              <h5 class="mt-4 mb-3">Desain</h5>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="pen-tool"></i>
              </div>
              <h5 class="mt-4 mb-3">Desain</h5>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="pen-tool"></i>
              </div>
              <h5 class="mt-4 mb-3">Desain</h5>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="pen-tool"></i>
              </div>
              <h5 class="mt-4 mb-3">Desain</h5>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="pen-tool"></i>
              </div>
              <h5 class="mt-4 mb-3">Desain</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <div class="search-box">
      <input type="text" class="form-control" placeholder="Search" />
      <button type="submit" class="btn btn-primary">Search</button>
    </div> -->
    <!-- <header class="text-left">
      <h1>One Step <br />Closer To Your <br />New Job</h1>
      <p class="mt-3">
        An excellent platform for individuals seeking to <br />elevate their
        careers and are enthusiastic <br />
        about the startup scene.
      </p> -->
    <!-- <div class="pict">
        <img
          src="Frontend/image/landing_page_Image.png"
          alt="Gambar Mba-mba"
          class="img-thumbnail"
        />
      </div> -->
    <!-- </header> -->
    <script>
      feather.replace();
    </script>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
