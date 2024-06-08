<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Company | Employease</title>

    <!-- bs5 -->
    <link
    rel="stylesheet"
    href="css/bootstrap.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- CSS style  -->
    <link rel="stylesheet" href="css_dashcomp/style_dashboardComp.css" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar Start -->
        <div class="col-md-3 col-lg-2 sidebar p-0">
          <div class="d-flex flex-column align-items-center">
            <a href="/logedin" class="text-center my-4">
              <img src="image/logo.png" alt="Logo" width="180" />
            </a>
          </div>
          <div class="list-group list-group-flush my-3">
            <a
              href="#"
              class="list-group-item list-group-item-action bg-transparent second-text active"
              ><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a
            >
            <a
              href="/Pelamar"
              class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
              ><i class="fas fa-file me-2"></i>Pelamar</a
            >
            <a
              href="/DashLowongan"
              class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
              ><i class="fas fa-search me-2"></i>Lowongan</a
            >
            <a
              href="/edit-profil-company"
              class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
              ><i class="fas  fa-edit me-2"></i>Edit Profil</a
            >
            <div>
              <a
                href="{{ route('logout') }}"
                class=" text-danger list-group-item list-group-item-action bg-transparent second-text fw-bold"
                ><i class="fas fa-power-off me-2"></i>log Out</a
              >
            </div>
          </div>
        </div>
        <!-- Sidebar End -->

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 content">
          <!-- Top Bar -->
          <div
            class="row bg-white py-2 shadow-sm align-items-center mb-4 border-bottom pb-3"
          >
            <div class="col-md-6 d-flex align-items-center company-logo">
              <img
                src="{{ $user->image }}"
                alt="Company Logo"
                class="me-2"
                width="40"
              />
              <div>
                <span class="text-muted d-block">Company</span>
                <span class="h5 mb-0">{{ $user->first_name }}</span>
                <i class="bi bi-chevron-down"></i>
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
              <button class="btn btn-primary" onclick="redirectToPage()">
                <i class="fas fa-plus me-3 fw-bold"></i> Tambah Lowongan
              </button>
            </div>
          </div>

          <!-- Card-start -->
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-3">
                  <div class="card-body">
                    <h2 class="keterangan">Keterangan <span>Perusahaan</span></h2>
                    <hr>
                    <h3 class="mt-3">Alamat</h3>
                    <p>{{ $user->company->alamat }}</p>
                    <h3 class="mt-3">Nomor Telepon</h3>
                    <p>{{ $user->company->no }}</p>
                    <h3 class="mt-3">Deskripsi</h3>
                    <p>{{ $user->company->desc }}</p>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-lowongan mb-3">
                  <div class="card-body body-atas card-lowongan">
                    <h5 class="card-title">Lowongan</h5>
                    <h2><span>{{ $pekerjaans->count() }}</span></h2>
                  </div>
                </div>
              <div class="card card-ringkasan">
                <div class="card-body body-atas pelamar-card">
                  <h5 class="card-title">Ringkasan Pelamar</h5>
                  <p class="d-inline fulltime">Full Time: <span>{{ $fullTimeCount }}</span></p>
                  <p class="d-inline fulltime">Part Time: <span>{{ $partTimeCount }}</span></p>
                  <p class="d-inline fulltime">Kontrak: <span>{{ $kontrakCount }}</span></p>
                  <p class="d-inline intern">Internship: <span>{{ $internshipCount }}</span></p>
              </div>
              </div>
            </div>
          </div>
          <!-- Card-end -->

          <!-- Job Listings -->
          <div class="card">
            <div class="card-body card-tittle-link ">
              <div class="card-judul" >
                <h3 class="card-title">Pelamar <span>Terbaru</span></h3>
              </div>
              <a href="/Pelamar"><p class="text-end mb-2">Selengkapnya</p></a>
              
              <div class="table-responsive">
                <table class="table table-striped table-sm">
                  <thead>
                    <tr>
                      <th>Nama Lengkap</th>

                      <th>Tanggal</th>
                      <th>Posisi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody >
                    <!-- Applicants Rows Start -->
                    @foreach ($lamarans as $lamaran)
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img
                            src="{{ $lamaran->user->image }}"
                            alt="Profile"
                            class="rounded-circle profile-img"
                          />
                          <span class="ms-3">{{ $lamaran->user->first_name }} {{ $lamaran->user->last_name }}</span>
                        </div>
                      </td>
                      <td>{{ $lamaran->created_at->format('d-m-Y') }}</td>
                      <td>{{ $lamaran->pekerjaan->posisi }}</td>
                      <td>
                        <button class="btn btn-outline-primary btn-sm">
                          Lihat Profil
                        </button>
                      </td>
                    </tr>
                    @endforeach
                    <!-- Applicants Rows End -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="card-tittle-link border-bottom">
                <div class="card-judul">
                  <h3 class="card-title">Lowongan <span>Terbaru</span></h3>
                </div>  
                  <a href="/DashLowongan"><p class="text-end mb-2">Selengkapnya</p></a>
              </div>
              <div class="list-group">
                @foreach ($pekerjaans->sortByDesc('created_at')->take(6) as $pekerjaan)
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <h6 class="mb-1">{{ $pekerjaan->posisi }}</h6>
                      <small>{{ $pekerjaan->kota->nama }}, Indonesia - {{ $pekerjaan->tipe }}</small>
                    </div>
                    <small class="text-muted">{{ $pekerjaan->created_at->diffForHumans() }}</small>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
          </div>
          <!-- User Profile -->
        </div>
      </div>
    </div>

    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        function redirectToPage() {
            window.location.href = '/Up-Loker'; // Ganti dengan URL tujuan
        }
    </script>
  </body>
</html>
