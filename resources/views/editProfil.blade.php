<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css_editProfil/style_editProfil.css">

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container d-flex justify-content-between mt-2 me-0">
              <a class="navbar-brand" href="#">Edit Profil Jobseeker</a>
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
              <div class="collapse navbar-collapse" id="navbarNav"></div>
      
              <!-- Desktop Button -->
              <button class="btn btn-profil"><a href="/profil">Kembali ke Profil</a></button>
          </div>
      </nav>
  </div>

  <div class="container-fluid full-width-container bottom-line"></div>

  <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <!-- foto profil -->
      <div class="container mb-4">
          <div class="row">
              <!-- keterangan -->
              <div class="col-lg-5 mt-5">
                  <h1 class="judul mt-2">Foto Profil</h1>
                  <h2 class="keterangan">Gambar ini akan ditampilkan secara publik sebagai foto profil Anda, ini akan membantu perekrut mengenali Anda!</h2>
              </div>
              <!-- input -->
              <div class="col-lg-7 mt-5">
                  <div class="file-input-container">
                      <div class="profile-picture" id="profilePicture">
                          <img id="profileImage" src="{{ $user->image ? 'data:'. base64_encode($user->image) : '' }}" alt=" ">
                      </div>
                  
                      <!-- Form untuk mengubah gambar profil -->
                          <div class="mb-3 file-input">
                              <label for="image" class="form-label">Ganti Foto Profil</label>
                              <input type="file" class="form-control" id="image" name="image" accept="image/*">
                          </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container bottom-line"></div>

      <!-- detail pribadi -->
      <div class="container mb-4">
          <div class="row">
              <!-- keterangan -->
              <div class="col-lg-5 mt-5">
                  <h1 class="judul mt-2">Detail Pribadi</h1>
                  <h2 class="keterangan"> Isi informasi pribadi Anda dengan lengkap dan akurat agar perekrut dapat mengenal Anda lebih baik.</h2>
              </div>
              <!-- input -->
              <div class="col-lg-7 mt-5">
                  <!-- input nama depan -->
                  <label for="namaDepan" class="form-label">Nama Depan</label>
                  <input class="form-control" type="text" name='first_name'  placeholder="{{ $user->first_name }}">
                  <!-- input nama belakang -->
                  <label for="namaBelakang" class="form-label">Nama Belakang</label>
                  <input class="form-control" type="text" name='last_name' placeholder="{{ $user->last_name }}">
                  <!-- input alamat -->
                  <label for="namaBelakang" class="form-label d-inline">Alamat</label>
                  <input class="form-control" type="text" name='alamat' placeholder=" ">
                  <!-- input no hp -->
                  <label for="noHP" class="form-label d-inline">Nomor HP</label>
                  <input class="form-control" type="number" id="noHP" name='no' placeholder=" " minlength="11" maxlength="13" onkeypress="return isNumberKey(event)">

                  <!-- input tanggal lahir-->
                  <div class="row">
                      <div class="col-md-6">
                          <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                          <input class="form-control" name='tgl_lahir' type="date" min="1" max="31">
                      </div>
                      <!-- input jenis kelamin -->
                      <div class="col-md-6">
                          <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                          <div class="dropdown">
                              <button id="jenisKelaminButton" class="form-control dropdown-toggle d-flex justify-content-between align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <span id="jenisKelaminText">Pilih jenis kelamin</span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="jenisKelaminButton">
                                  <li><a class="dropdown-item" href="#" onclick="pilihJenisKelamin('Laki-laki')">Laki-laki</a></li>
                                  <li><a class="dropdown-item" href="#" onclick="pilihJenisKelamin('Perempuan')">Perempuan</a></li>
                              </ul>
                          </div>
                          <input type="hidden" id="jenisKelaminInput" name="jenisKelamin">
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="container bottom-line"></div>
      
      <!-- deskripsi diri -->
      <div class="container mb-4">
          <div class="row">
              <!-- keterangan -->
              <div class="col-lg-5 mt-5">
                  <h1 class="judul mt-2">Deskripsi Diri</h1>
                  <h2 class="keterangan">Ceritakan siapa Anda dan apa yang membuat Anda unik. Buat perekrut tertarik untuk mengenal Anda lebih jauh!</h2>
              </div>
              <!-- input -->
              <div class="col-lg-7 mt-5">
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea2" class="form-label">Deskripsikan diri Anda</label>
                      <textarea class="form-control" id="exampleFormControlTextarea2" name='desc' rows="4" placeholder=" "></textarea>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container bottom-line"></div>

  <!-- keterampilan -->
  <div class="container mb-4">
      <div class="row">
          <!-- keterangan -->
          <div class="col-lg-5 mt-5">
              <h1 class="judul mt-2">Keterampilan</h1>
              <h2 class="keterangan">Tunjukkan keahlian Anda. Daftarkan keterampilan yang Anda kuasai dan relevan dengan pekerjaan yang Anda inginkan.</h2>
          </div>
          <!-- input -->
          <div class="col-lg-7 mt-5">
              <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Isi dengan keterampilan diri Anda</label>
                  <textarea name='keterampilan' class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder=" "></textarea>
              </div>
          </div>
      </div>
  </div>

  <div class="container bottom-line"></div>

  <!-- button save -->
  <div class="container d-flex justify-content-end align-items-right mt-4 mb-4">
      <button type="submit" class="btn btn-save">Simpan Perubahan</button>
  </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
<script src="jquery/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script_editProfil.js"></script>
<script>feather.replace();</script>
<script>
  document.getElementById('image').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('profileImage').src = e.target.result;
          }
          reader.readAsDataURL(file);
      }
  });
</script>

</body>
</html>