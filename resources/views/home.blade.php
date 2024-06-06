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
    <link rel="stylesheet" href="css_home/main.css" />
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
              <a class="nav-link" href="{{ route('login') }}">Cari Kerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}"
                >Daftar Perusahaan</a
              >
            </li>
          </ul>

          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <a class="btn btn-daftar btn-navbar-right my-2 my-sm-0 px-4" href="{{ route('login') }}">
              Masuk
            </a>
            <a class="btn btn-login btn-navbar-right my-2 my-sm-0"href="/signup">
              Daftar
            </a>
          </form>
        </div>
        
        <!-- Dekstop Button -->
        <form class="form-inline my-lg-0 d-none d-md-block">
          <a class="btn btn-daftar btn-navbar-right my-2 my-sm-0 px-4" href="{{ route('login') }}">
            Masuk
          </a>
          <a class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" href="/signup">
            Daftar
          </a>
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
          <div class="head">
              <h1 class="jargon">
                One Step <br />Closer To Your <br />
                <span>New Job</span>
              </h1>
              <p class="mt-3">
                An excellent platform for individuals seeking to <br />elevate
                their careers and are enthusiastic <br />
                about the startup scene.
              </p>
              <!-- Search Bar -->
              <form class="d-flex mt-4 p-0">
                <div class="input-group" style="margin-right: 4px">
                  <span class="input-group-text"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="23"
                      height="23"
                      fill="currentColor"
                      class="bi bi-search"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"
                      /></svg
                  ></span>
                  <input
                    class="form-control me-2"
                    type="Kata Kunci"
                    placeholder="Posisi Kerja"
                    aria-label="Posisi Kerja"
                  />
                </div>
                <div class="input-group" style="margin-right: 10px">
                  <span class="input-group-text"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="23"
                      height="23"
                      fill="currentColor"
                      class="bi bi-geo-alt-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"
                      /></svg
                  ></span>
                  <input
                    class="form-control me-2"
                    type="Lokasi"
                    placeholder="Lokasi"
                    aria-label="Lokasi"
                  />
                </div>
                <button class="btn btn-primary btn-lg btn-carip" type="submit">
                  Cari
                </button>
              </form>
              <p class="popular">
                Populer: <a href="{{ route('login') }}"> UI/UX Designer</a>,<a href="{{ route('login') }}">
                  Ux Researcher</a
                >
                ,<a href="{{ route('login') }}"> Android</a> ,
                <a href="{{ route('login') }}"> Admin</a>
              </p>
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
    <section id="categories" class="section-padding mt-3">
      <<div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-tittle mt-3">
              <h1>Katergori <span>Pekerjaan</span></h1>
              <p class="text-right">
                <a href="{{ route('login') }}">Lihat semua lowongan </a>
              </p>
            </div>
          </div>
        </div>
        <!-- Row 1 -->
        <div class="company-card row g-4 text-center">
          <div class="col-lg-3 col-sm-6">
            <a href="{{ route('login') }}">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="pen-tool"></i>
              </div>
              <h5 class="mt-4 mb-3">Desain</h5>
            </div></a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a href="{{ route('login') }}">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="currentColor"
                  class="bi bi-megaphone"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 75 75 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0m-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233q.27.015.537.036c2.568.189 5.093.744 7.463 1.993zm-9 6.215v-4.13a95 95 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A61 61 0 0 1 4 10.065m-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68 68 0 0 0-1.722-.082z"
                  />
                </svg>
              </div>
              <h5 class="mt-4 mb-3">Pemasaran</h5>
            </div> </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a href="{{ route('login') }}">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="currentColor"
                  class="bi bi-graph-up-arrow"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"
                  />
                </svg>
              </div>
              <h5 class="mt-4 mb-3">Sales</h5>
            </div> </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a href="{{ route('login') }}">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="currentColor"
                  class="bi bi-cash-stack"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"
                  />
                  <path
                    d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"
                  />
                </svg>
              </div>
              <h5 class="mt-4 mb-3">Keuangan</h5>
            </div>
          </div> </a>
        </div>
        <!-- Row 2 -->
        <div
          class="company-cardd row g-5 text-center"
          style="margin-top: 24px; margin-bottom: 24px"
        >
          <div class="col-lg-3 col-sm-6"> <a href="{{ route('login') }}">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <i data-feather="monitor"></i>
              </div>
              <h5 class="mt-4 mb-3">Teknologi</h5>
            </div>
          </div> </a>

          <div class="col-lg-3 col-sm-6"> <a href="{{ route('login') }}">

          
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="currentColor"
                  class="bi bi-tools"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"
                  />
                </svg>
              </div>
              <h5 class="mt-4 mb-3">Teknisi</h5>
            </div></a>
          </div>

          <div class="col-lg-3 col-sm-6"> <a href="{{ route('login') }}">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="currentColor"
                  class="bi bi-briefcase"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5m1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0M1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5"
                  />
                </svg>
              </div>
              <h5 class="mt-4 mb-3">Bisnis</h5>
            </div> </a>
          </div>
          <div class="col-lg-3 col-sm-6"> <a href="{{ route('login') }}">
            <div class="category theme-shadow p-lg-5 p-4">
              <div class="iconbox">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart-pulse" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857q.09.083.176.171a3 3 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5"/>
                <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z"/>
              </svg>
              </div>
              <h5 class="mt-4 mb-3">Kesehatan</h5>
            </div> </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Pekerjaan Favorit -->

    <section class="section-padding mt-5">
      <div class="container py-5">
        <div class="section-tittle mt-3">
          <h1>Pekerjaan <span>Terbaru</span></h1>
          <p class="text-right">
            <a href="{{ route('login') }}">Lihat semua lowongan </a>
          </p>
        </div>

        <div class="row">
          <!-- Job Card -->
          @foreach ($pekerjaans->sortByDesc('created_at')->take(6) as $pekerjaan)
            <div class="cardjob col-md-6 col-lg-4">
                <div class="card job-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3 me-3">
                            <div class="company-logo ">
                                <img src="image/logo pertamina.png" alt="logo pt"/>
                            </div>
                            <h5 class="card-title mb-0">{{ $pekerjaan->posisi }}</h5>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted">
                            {{ $pekerjaan->user->first_name }} - {{ $pekerjaan->kota->nama }}, Indonesia
                        </h6>
                        <p class="card-text">
                            {{ \Illuminate\Support\Str::limit($pekerjaan->desc_pekerjaan, 30) }}
                        </p>
                        <a href="{{ route('login') }}" class="job-category me-2">Marketing</a>
                        <a href="{{ route('login') }}" class="job-category">Design</a>
                    </div>
                </div>
            </div> 
        @endforeach
        </div>
      </div>
    
    <!-- Footer -->
    <footer class="footer-dark">
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm-6 col-md-4 footer-column">
            <img src="image/logo_footer.png" alt="logo" />
            <p>
              Platform yang sangat ideal bagi mereka yang ingin menemukan
              pekerjaan impian dan tertarik dengan karier menjanjikan.
            </p>
          </div>
          <div class="col-sm-6 col-md-4 footer-column text-center">
            <h4>About</h4>
            <ul class="list-unstyled">
              <li><a href="{{ route('login') }}">Companies</a></li>
              <li><a href="{{ route('login') }}">Terms</a></li>
              <li><a href="{{ route('login') }}">Advice</a></li>
              <li><a href="{{ route('login') }}">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 footer-column">
            <h4>Resources</h4>
            <ul class="list-unstyled">
              <li><a href="{{ route('login') }}">Help Docs</a></li>
              <li><a href="{{ route('login') }}">Guides</a></li>
              <li><a href="{{ route('login') }}">Updates</a></li>
              <li><a href="{{ route('login') }}">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="row border-top">
          <div class="col-6 text-end mt-3">
            <p>2024 @ EmployEase. All rights reserved</p>
          </div>
          <div class="col-6 footer-column social-icons mt-3">
            <a href="{{ route('login') }}"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-instagram"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                /></svg
            ></a>
            <a href="{{ route('login') }}"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-twitter-x"
                viewBox="0 0 16 16"
              >
                <path
                  d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
                /></svg
            ></a>
            <a href="{{ route('login') }}"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-linkedin"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                /></svg
            ></a>
            <a href="{{ route('login') }}"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-facebook"
                viewBox="0 0 16 16"
              >
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
                /></svg
            ></a>
          </div>
        </div>
      </div>
    </footer>
    <script>
      feather.replace();
    </script>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
