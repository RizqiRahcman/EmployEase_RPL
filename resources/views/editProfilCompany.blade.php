<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css_editProfil/style_editProfilCompany.css">

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
            <a class="navbar-brand" href="#">Edit Profil perusahaan</a>
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
            <button class="btn btn-profil"><a href="/DashComp">Kembali ke Profil</a></button>
          </div>
        </nav>
    </div>

    <div class="container-fluid full-width-container bottom-line"></div>
<form method="POST" action="{{ route('profilecompany.update') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
<!-- foto profil -->
<div class="container mb-4">
    <div class="row">
        <!-- keterangan -->
        <div class="col-lg-5 mt-5">
            <h1 class="judul mt-2">Foto Profil Perusahaan</h1>
            <h2 class="keterangan">Gambar ini akan ditampilkan secara publik sebagai foto profil perusahaan Anda, membantu para pencari kerja mengenali perusahaan Anda!</h2>
        </div>
        <!-- input -->
        <div class="col-lg-7 mt-5">
          <div class="file-input-container">
              <div class="profile-picture" id="profilePicture">
                    <img id="profileImage" src="{{ $user->image ? 'data:'. base64_encode($user->image) : '' }}" alt=" ">
              </div>
              <div class="mb-3 file-input">
                    <label for="formFile" class="form-label">Input Foto Profil</label>
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*">
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
        <h1 class="judul mt-2">Deskripsi Perusahaan</h1>
        <h2 class="keterangan"> Isi informasi mengenai perusahaan Anda dengan lengkap dan akurat agar pencari kerja dapat mengenal perusahaan Anda lebih baik.</h2>
      </div>
      <!-- input -->
      <div class="col-lg-7 mt-5">
        <!-- input nama company -->
        <label for="namaCompany" class="form-label">Nama Perusahaan</label>
        <input class="form-control" type="text" name='first_name'  placeholder="{{ $user->first_name }}">
        <!-- input alamat -->
        <label for="alamat" class="form-label d-inline">Alamat</label>
        <input class="form-control" type="text" placeholder=" " name='alamat'>
        <!-- input no hp -->
        <label for="noHP" class="form-label d-inline">Nomor HP</label>
        <input class="form-control" type="number" id="noHP" name="no" placeholder=" " minlength="11" maxlength="13" onkeypress="return isNumberKey(event)">

        <!-- input keterangan -->
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder=" " name="desc"></textarea>
        </div>


        </div>
      </div>

</div>

  <div class="container bottom-line"></div>

<!-- button save -->
<div class="container d-flex justify-content-end align-items-right mt-4 mb-4">
    <button class="btn btn-save" type="submit">Simpan Perubahan</button>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
<script src="jquery/jquery-3.7.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script_editProfilCompany.js"></script>
<script>feather.replace();</script> 

</body>
</html>