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
    <div class="container">
      <div class="row pb-4">
        <a style="color: gray; mt-8" href="/Daftar-Perusahaan"><i data-feather="arrow-left-circle" class="kembali"></i></a>
          Profile Perusahaan
        </p>
      </div>
      <div class="row">
        <div class="col-3">
          <img src="image/pongo.png" class="img-thumbnail" alt="Logo Perusahaan" style="border: 0cap;">
        </div>
        <div class="col-9">
          <h1>Nama Perusahaan</h1>
          <button type="button" class="btn btn-primary lowongan">
            4 Lowongan
          </button>

          <div class="input-group">
            <span class="location"><i data-feather="map-pin" style="padding-right: 0;"></i></span>
            <p>Lokasi perusahaan</p>
          </div>
        </div>
        <div class="row">
          <div class="col" style="padding: 0px 30px">
            <h3 class="sub_judul mt-4">Tentang Perusahaan</h3>
            <p class="fw-normal">Lorem ipsum dolor sit amet consectetur. Odio posuere arcu odio est nulla elementum proin. 
              Fermentum arcu diam dolor massa adipiscing. Vulputate dui adipiscing id pellentesque proin 
              pretium a. Euismod egestas platea non urna varius tempor a. Dui posuere gravida nunc augue 
              enim dolor. Lectus tincidunt in facilisis sociis tempus habitant id est. Montes tincidunt 
              mus lacus nunc massa nunc volutpat. Pellentesque magna faucibus eget donec metus pellentesque 
              
              dictum etiam. Amet scelerisque dolor eget odio at ipsum lectus sagittis pellentesque. 
              Vestibulum scelerisque vehicula a venenatis volutpat. Mi dolor lobortis sed aenean potenti 
              ullamcorper pellentesque tortor adipiscing.
              Donec facilisis sed et massa. Turpis ligula tincidunt dolor nam scelerisque ut. Quam lacinia 
              sagittis tempor sem a adipiscing. Gravida metus enim tincidunt sit amet integer. In eros lacus 
              mattis feugiat turpis nec et iaculis. Et pulvinar commodo arcu nunc eget sed at.</p>
          </div>
          <div class="col-3">
            <h3 class="sub_judul mt-4">Kontak</h3>
            <ul class="list-group list-group-flush fw-normal">
              <li class="list-group-item">Nomor telp</li>
              <li class="list-group-item">email</li>
            </ul>
          </div>
        </div>

      </div>

      <h3 class="sub_judul mt-4 mb-4">Lowongan</h3>

      <!-- Job Card -->
      <div class="row">
        {{-- @foreach ($pekerjaans->sortByDesc('created_at')->take(6) as $pekerjaan) --}}
        <div class="cardjob col-md-6 col-lg-4">
          <a href="#" class="text-decoration-none text-dark">
            <div class="card job-card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3 me-3">
                        <div class="company-logo ">
                            <img src="image/logo pertamina.png" alt="logo pt"/>
                        </div>
                        <h5 class="card-title mb-0">Kang pijet</h5>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{-- {{ $pekerjaan->user->first_name }} - {{ $pekerjaan->kota->nama }}--}}
                        Semarang, Indonesia 
                    </h6>
                    <p class="card-text">
                        {{-- {{ \Illuminate\Support\Str::limit($pekerjaan->desc_pekerjaan, 30) }} --}}
                        deskripsi
                    </p>
                    <a href="#" class="job-category me-2">
                        {{-- {{ $pekerjaan->kategori }} --}}
                        IT
                    </a>
                </div>
            </div>
          </a>
        </div>
      </div> 
      {{-- @endforeach --}}
    </div>
    

    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
