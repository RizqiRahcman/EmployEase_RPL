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
            <a href="#" class="text-center my-4">
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
              href="#"
              class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
              ><i class="fas fa-file me-2"></i>Pelamar</a
            >
            <a
              href="#"
              class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
              ><i class="fas fa-search me-2"></i>Lowongan</a
            >
            <div>
              <a
                href="#"
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
                src="image/logo pertamina.png"
                alt="Company Logo"
                class="me-2"
                width="40"
              />
              <div>
                <span class="text-muted d-block">Company</span>
                <span class="h5 mb-0">{{ Auth::user()->first_name }}</span>
                <i class="bi bi-chevron-down"></i>
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
              <button class="btn btn-primary" onclick="redirectToPage()">
                <i class="fas fa-plus me-3 fw-bold"></i> Tambah Lowongan
              </button>
            </div>
          </div>

          <!-- Stats Section -->
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Statistik Lowongan</h5>
                  <div class="chart-bar">
                    <div class="applied" style="height: 60%">Sen</div>
                    <div class="applied" style="height: 40%">Sel</div>
                    <div style="height: 50%">Rab</div>
                    <div class="applied" style="height: 70%">Kam</div>
                    <div style="height: 60%">Jum</div>
                    <div style="height: 30%">Sab</div>
                    <div style="height: 20%">Min</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">Lowongan Aktif</h5>
                  <h2>12</h2>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Ringkasan Pelamar</h5>
                  <p>Internship: 32</p>
                  <p>Contract: 30</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Job Listings -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pelamar Terbaru</h5>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <h6 class="mb-1">Social Media Assistant</h6>
                      <small>Nomad - Paris, France - Full-Time</small>
                    </div>
                    <small class="text-muted">In Review</small>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <h6 class="mb-1">Social Media Assistant</h6>
                      <small>Nomad - Paris, France - Full-Time</small>
                    </div>
                    <small class="text-muted">In Review</small>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <h6 class="mb-1">Social Media Assistant</h6>
                      <small>Nomad - Paris, France - Full-Time</small>
                    </div>
                    <small class="text-muted">In Review</small>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lowongan</h5>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <h6 class="mb-1">Social Media Assistant</h6>
                      <small>Nomad - Paris, France - Full-Time</small>
                    </div>
                    <small class="text-muted">In Review</small>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <h6 class="mb-1">Social Media Assistant</h6>
                      <small>Nomad - Paris, France - Full-Time</small>
                    </div>
                    <small class="text-muted">In Review</small>
                  </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div>
                      <h6 class="mb-1">Social Media Assistant</h6>
                      <small>Nomad - Paris, France - Full-Time</small>
                    </div>
                    <small class="text-muted">In Review</small>
                  </div>
                </a>
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
