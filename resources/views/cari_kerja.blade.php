<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cari Pekerjaan</title>

    {{-- bs --}}
    <link rel="stylesheet" href="css/bootstrap.css">

    {{-- css --}}
    <link rel="stylesheet" href="css_carikerja/main.css">

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
  <!-- Nav up -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="/logedin">
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
              <a class="nav-link" href="#" style="color: #ff6000">Cari Kerja</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Daftar-Perusahaan" >Daftar Perusahaan</a>
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
              <img src="image/contoh.png" class="profil-gambar" alt="profile" />
              {{ Auth::user()->first_name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/profil">Lihat Akun</a></li>
              <li><a class="dropdown-item" href="#">Lowongan tersimpan</a></li>
              <li><a class="dropdown-item" href="#">Lamaran Tersampai</a></li>
              <li><a class="dropdown-item" href="#">Pengaturan</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/">Log Out</a></li>
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
        <button class="btn btn-primary btn-carip" type="submit">Cari Pekerjaan</button>
      </form>
    </div>
    
    <div class="container">
        <div class="row">
            <!-- Kolom untuk kategori pekerjaan -->
            <div class="col-lg-3">
                <!-- Konten kategori pekerjaan -->
                <!-- Filter Sidebar -->
                <aside>
                    <h5 class="klasifikasi">Tipe Pekerjaan</h5>
                    <!-- Checkbox filters for job type -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fullTimeCheck">
                        <label class="form-check-label" for="fullTimeCheck">Full Time</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="partTimeCheck">
                        <label class="form-check-label" for="partTimeCheck">Part Time</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="contractCheck">
                        <label class="form-check-label" for="contractCheck">Kontrak</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="internshipCheck">
                        <label class="form-check-label" for="internshipCheck">Internship</label>
                    </div>
                    <!-- Add more filters as needed -->
                </aside>
                <aside>
                    <h5 class="klasifikasi">Kategori Pekerjaan</h5>
                    <!-- Checkbox filters for job type -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fullTimeCheck">
                        <label class="form-check-label" for="fullTimeCheck">Desain</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="partTimeCheck">
                        <label class="form-check-label" for="partTimeCheck">Teknologi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="contractCheck">
                        <label class="form-check-label" for="contractCheck">Pemasaran</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="internshipCheck">
                        <label class="form-check-label" for="internshipCheck">Keuangan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="internshipCheck">
                        <label class="form-check-label" for="internshipCheck">Lainnya</label>
                    </div>
                    <!-- Add more filters as needed -->
                </aside>
                <aside>
                    <h5 class="klasifikasi">Pengalaman</h5>
                    <!-- Checkbox filters for job type -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="fullTimeCheck">
                        <label class="form-check-label" for="fullTimeCheck">Tingkat pemula</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="partTimeCheck">
                        <label class="form-check-label" for="partTimeCheck">1-2 Tahun pengalaman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="contractCheck">
                        <label class="form-check-label" for="contractCheck">3-5 Tahun pengalaman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="internshipCheck">
                        <label class="form-check-label" for="internshipCheck">>5 Tahun pengalaman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="internshipCheck">
                        <label class="form-check-label" for="internshipCheck">Senior</label>
                    </div>
                    <!-- Add more filters as needed -->
                </aside>
            </div>
    
            <!-- Kolom untuk melihat semua pekerjaan -->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-8">
                        <h4>Semua <a class="pekerjaan">Pekerjaan</a></h4>
                        <h5>Menampilkan <a class="">#</a> hasil</h5>
                    </div>
                    <div class="col-lg-4 text-right">
                        <span>Sort By : </span>
                        <select class="border-0">
                            <option selected>Location</option>
                            <option selected>1</option>
                            <option selected>2</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>

                <!-- pekerjaan -->
                <div class="box"> 
                  <div class="box-profile"></div>
                  <div class="row box-text">
                    <p class="a nopadding">Python Programmer</p>
                      <div class="col-lg-5 nopadding">
                        <p class="b">2 hari yang lalu</p>
                      </div>
                    <div class="col-lg-1 nopadding">
                        <p class="rounded-circle"></p>
                    </div>
                    <div class="col-lg-6">
                      <p class="b">Semarang Indonesia</p>
                    </div>
                    <div class="box-waktu">
                      <p class="c">Penuh waktu</p>
                    </div>
                    <div class="col-lg-1">
                        <p class="vertical-line"></p>
                    </div>
                    <div class="box-bidang">
                      <p class="d">Teknologi</p>
                    </div>
                    <div class="box-pengalaman">
                      <p class="e">Pemula</p>
                    </div>
                  </div>
                  <button class="btn btn-apply"type="button">Apply</button>
            </div>
             
        </div>
    </div>
    
    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
    <script>
      src="script_carikarja.js"
      feather.replace();
    </script>  

</body>
</html>
