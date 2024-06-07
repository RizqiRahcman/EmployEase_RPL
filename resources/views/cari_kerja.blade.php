<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cari Pekerjaan</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css_carikerja/style_carikerja.css">

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#search_lokasi').keyup(function() {
              var query = $(this).val();
              if (query != '') {
                  var _token = $('meta[name="csrf-token"]').attr('content');
                  $.ajax({
                      url: '/ajax-autocomplete',
                      method: "GET",
                      data: {
                          query: query,
                          _token: _token
                      },
                      success: function(data) {
                          $('#autocomplete-results').fadeIn();
                          $('#autocomplete-results').html(data);
                      }
                  });
              } else {
                  $('#autocomplete-results').fadeOut();
              }
          });

          $(document).on('click', 'li', function() {
              $('#search_lokasi').val($(this).text());
              $('#autocomplete-results').fadeOut();
          });
      });
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
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
                        <a class="nav-link active" href="#">Cari Kerja</a>
                    </li>
                    <li class="nav-item second">
                        <a class="nav-link" href="/Daftar-Perusahaan">Daftar Perusahaan</a>
                    </li>
                </ul>
                <form class="form-inline d-sm-block d-lg-none">
                    <button class="btn btn-daftar btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0">
                        Daftar
                    </button>
                </form>
            </div>
            <li class="nav-item dropdown my-lg-0 d-none d-lg-block">
                <a class="nav-link dropdown-toggle profile" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="rounded-circle" src="{{ Auth::user()->image }}" style="width: 35px; height: 35px" alt="Profile Image" class="profil-gambar" alt="profile" />
                    {{ Auth::user()->first_name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/profil">Lihat Akun</a></li>
                    <li><a class="dropdown-item" href="#">Lowongan tersimpan</a></li>
                    <li><a class="dropdown-item" href="#">Lamaran Tersampai</a></li>
                    <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="{{ route('logout') }}">Log Out</a></li>
                </ul>
            </li>
        </nav>
    </div>

    <div class="head">
        <div class="bg-dark"></div>
        <figure class="text-center">
            <h1 style="color: #FFE6C7; font-weight: bold;">Build your dream career by finding the perfect job.</h1>
            <p style="color: #FFE6C7;">Loren ipsum</p>
        </figure>
        <form action="{{ route('cari_kerja') }}" method="GET" class="d-flex">
            <div class="input-group" style="margin-right: 4px;">
                <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input class="form-control me-2" name="search" type="search" placeholder="Kata Kunci" aria-label="Kata Kunci" value="{{ $request->get('search') }}">
            </div>
            <div class="input-group" style="margin-right: 12px;">
                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                <input type="search" class="form-control" list="nama" name="search_lokasi" id="search_lokasi" placeholder="Lokasi" aria-label="Lokasi" aria-describedby="basic-addon1" value="{{ $request->get('search_lokasi') }}">
                <div id="autocomplete-results" class="dropdown-menu position-absolute" style="display: none; z-index: 1000;"></div>
                <meta name="csrf-token" content="{{ csrf_token() }}">
            </div>
            <button class="btn btn-primary btn-carip" type="submit">Cari Pekerjaan</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <!-- Kolom untuk kategori pekerjaan -->
            <div class="col-lg-3">
            <form action="{{ route('cari_kerja') }}" method="GET">
                {{ csrf_field() }}
                <aside>
                    <h5 class="klasifikasi">Tipe Pekerjaan</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tipe[]" value="Full Time" id="fullTimeCheck"
                            {{ in_array('Full Time', old('tipe', $selectedTipe)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="fullTimeCheck">Full Time</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tipe[]" value="Part Time" id="partTimeCheck"
                            {{ in_array('Part Time', old('tipe', $selectedTipe)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="partTimeCheck">Part Time</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tipe[]" value="Contract" id="contractCheck"
                            {{ in_array('Contract', old('tipe', $selectedTipe)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="contractCheck">Kontrak</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tipe[]" value="Internship" id="internshipCheck"
                            {{ in_array('Internship', old('tipe', $selectedTipe)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="internshipCheck">Internship</label>
                    </div>
                </aside>
                <aside>
                    <h5 class="klasifikasi">Kategori Pekerjaan</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kategori[]" value="Desain" id="desainCheck"
                            {{ in_array('Desain', old('kategori', $selectedKategori)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="desainCheck">Desain</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kategori[]" value="Pemasaran" id="pemasaranCheck"
                            {{ in_array('Pemasaran', old('kategori', $selectedKategori)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="pemasaranCheck">Pemasaran</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kategori[]" value="Sales" id="salesCheck"
                            {{ in_array('Sales', old('kategori', $selectedKategori)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="salesCheck">Sales</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kategori[]" value="Keuangan" id="keuanganCheck"
                            {{ in_array('Keuangan', old('kategori', $selectedKategori)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="keuanganCheck">Keuangan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kategori[]" value="Teknologi" id="teknologiCheck"
                            {{ in_array('Teknologi', old('kategori', $selectedKategori)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="teknologiCheck">Teknologi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="kategori[]" value="Marketing" id="marketingCheck"
                            {{ in_array('Marketing', old('kategori', $selectedKategori)) ? 'checked' : '' }}>
                        <label class="form-check-label" for="marketingCheck">Marketing</label>
                    </div>
                    <button type="submit" class="btn btn-primary apply-filter">Apply Filter</button>
                </aside>
            </form>
            </div>

            <!-- Kolom untuk melihat semua pekerjaan -->
            <div class="col-lg-9" id="pekerjaan-container">
                <div class="row">
                    <div class="col-lg-8">
                        <h4>Semua <a class="pekerjaan">Pekerjaan</a></h4>
                        <h5>Menampilkan {{ $pagpekerjaans->total() }} hasil</h5>
                    </div>
                </div>

                <!-- pekerjaan -->
                @if ($pagpekerjaans->count() > 0)
                    @foreach ($pagpekerjaans as $pekerjaan)
                        <div class="box"> 
                            <div>
                                <img src="{{ $pekerjaan->user->image }}" class="box-profile" alt="profile">
                            </div>
                            <div class="row box-text">
                                <p class="a nopadding">{{ $pekerjaan->posisi }}</p>
                                <div class="col-lg-12 nopadding ">
                                    <p class="b d-inline">{{ $pekerjaan->created_at->diffForHumans() }}</p>
                                    <i class="icon-circle" data-feather="circle"></i>
                                    <p class="bb d-inline">{{ $pekerjaan->kota->nama }}, Indonesia</p>
                                </div>
                                <div class="box-waktu box-status">
                                    <p class="c">{{ $pekerjaan->tipe }}</p>
                                </div>
                                <div class="col-lg-1">
                                    <p class="vertical-line"></p>
                                </div>
                                <div class="box-bidang box-status">
                                    <p class="d">{{ $pekerjaan->kategori }}</p>
                                </div>
                            </div>
                            <button class="btn btn-apply" type="button" onclick="location.href='{{ route('apply.form', ['id' => $pekerjaan->id]) }}'">Apply</button>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-warning">
                        Pekerjaan tidak ditemukan.
                    </div>
                @endif
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <!-- Tombol halaman sebelumnya -->
                <li class="page-item {{ $pagpekerjaans->previousPageUrl() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $pagpekerjaans->previousPageUrl() }}" aria-label="Previous">
                        <span class="move" data-feather="chevron-left"></span>
                    </a>
                </li>

                <!-- Nomor-nomor halaman -->
                @for ($i = 1; $i <= $pagpekerjaans->lastPage(); $i++)
                    <li class="page-item {{ $i == $pagpekerjaans->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $pagpekerjaans->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                <!-- Tombol halaman selanjutnya -->
                <li class="page-item {{ $pagpekerjaans->nextPageUrl() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $pagpekerjaans->nextPageUrl() }}" aria-label="Next">
                        <span class="move" data-feather="chevron-right"></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
    <script src="script_carikerja.js"></script>
    <script>
      feather.replace();
    </script>
</body>
</html>