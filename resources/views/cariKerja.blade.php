<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cari Pekerjaan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style_cari.css">

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
  <!-- Nav up -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="/">
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
              <a class="nav-link" href="#" >Daftar Perusahaan</a>
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
      <figure class="text-center">
          <h1 style="color: #FFE6C7; font-weight: bold;">A well-known quote, contained in a blockquote element.</h1>
          <p style="color: #FFE6C7;">Loren ipsum</p>
      </figure>
      <form class="d-flex">
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input class="form-control me-2" type="Kata Kunci" placeholder="Kata Kunci" aria-label="Kata Kunci">
            </div>
            <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
            <input class="form-control me-2" type="Lokasi" placeholder="Lokasi" aria-label="Lokasi">
            </div>
            <button class="btn btn-outline-success" type="submit">Search</button>
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
                    </div>
                    <div class="col-lg-4 text-right">
                        <span>Sort by: </span>
                        <select>
                            <option selected>Location</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
    
    
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
    <script>
      src="js/script_cari.js"
    </script>  

</body>
</html>
