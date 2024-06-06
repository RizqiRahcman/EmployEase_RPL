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
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
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
                        <img id="profileImage" src="{{ $user->image ? 'data:' . $user->image_mime . ';base64,' . base64_encode($user->image) : '' }}" alt=" ">
                  </div>
                
                <!-- Form untuk mengubah gambar profil -->
                <form id="formImage" action="{{ route('update.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 file-input">
                        <label for="image" class="form-label">Ganti Foto Profil</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                </form>
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
          <input class="form-control" type="text" name='first_name'  placeholder="{{ $user->first_name }}"  required>
          <!-- input nama belakang -->
          <label for="namaBelakang" class="form-label">Nama Belakang</label>
          <input class="form-control" type="text" name='last_name' placeholder="{{ $user->last_name }}"  required>
          <!-- input alamat -->
          <label for="namaBelakang" class="form-label d-inline">Alamat</label>
          <input class="form-control" type="text" name='alamat' placeholder=" " required>
          <!-- input no hp -->
          <label for="noHP" class="form-label d-inline">Nomor HP</label>
          <input class="form-control" type="number" id="noHP" name='no' placeholder=" " minlength="11" maxlength="13" required onkeypress="return isNumberKey(event)">

          <!-- input tanggal lahir-->
          <div class="row">
            <div class="col-md-6">
              <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
              <input class="form-control" name='tgl_lahir' type="date" min="1" max="31" required>
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
              <textarea class="form-control" id="exampleFormControlTextarea2" nama='desc' rows="4" placeholder=" "></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="container bottom-line"></div>

<!-- pengalaman -->
<div class="container mb-4">
  <div class="row">
    <!-- keterangan -->
    <div class="col-lg-5 mt-5">
      <h1 class="judul mt-2">Pengalaman</h1>
      <h2 class="keterangan">Bagikan perjalanan karier Anda. Jelaskan posisi, tugas, dan pencapaian Anda di setiap pekerjaan.</h2>
    </div>
    <!-- input -->
    <div class="col-lg-7 mt-5">
      <!-- Form Pengalaman -->
      <form id="formPengalaman">
        <div class="pengalaman-item border-bottom border-3">
            <!-- input nama pekerjaan -->
            <label for="namaPekerjaan1" class="form-label">Nama Pekerjaan</label>
            <input class="form-control" id="namaPekerjaan1" type="text" name="namaPekerjaan[]" placeholder=" " required>

            <!-- input divisi -->
            <label for="divisi1" class="form-label">Divisi</label>
            <input class="form-control" id="divisi1" type="text" name="divisi[]" placeholder=" " required>

            <div class="row">
                <div class="col-md-6">
                    <label for="mulaiPeriode1" class="form-label">Mulai Periode</label>
                    <input class="form-control" id="mulaiPeriode1" type="date" name="mulaiPeriode[]" placeholder=" " required>
                </div>
                <div class="col-md-6">
                    <label for="akhirPeriode1" class="form-label mt-2">Akhir Periode</label>
                    <input class="form-control" type="date" id="akhirPeriode1" name="akhirPeriode[]" placeholder=" " required>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="exampleFormControlTextarea[]" rows="3" placeholder=" "></textarea>
            </div>
        </div>
      </form>

      <div class="row">
        <div class="col-12 d-flex justify-content-end">
          <button id="tambahPengalaman" class="btn btn-save mt-3">Tambah Pengalaman</button>
        </div>
      </div>
    </div>
  </div>
</div>

    <div class="container bottom-line"></div>
    
<!-- pendidikan -->
<div class="container mb-4">
  <div class="row">
    <!-- keterangan -->
    <div class="col-lg-5 mt-5">
      <h1 class="judul mt-2">Pendidikan</h1>
      <h2 class="keterangan">Cantumkan riwayat pendidikan Anda! Pendidikan Anda membentuk dasar pengetahuan dan keterampilan Anda</h2>
    </div>
    <!-- input -->
    <div class="col-lg-7 mt-5">
      <!-- Form Pendidikan -->
      <form id="formPendidikan">
        <div class="pendidikan-item border-bottom border-3">
            <!-- input nama instansi -->
            <label for="namaInstansi1" class="form-label">Nama Instansi</label>
            <input class="form-control" id="namaInstansi1" name="namaInstansi[]" type="text" placeholder=" " required>

            <!-- input jurusan -->
            <label for="jurusan1" class="form-label">Jurusan</label>
            <input class="form-control" id="jurusan1" name="jurusan[]" type="text" placeholder=" " required>
            
            <div class="row">
                <div class="col-md-6">
                    <!-- input mulai periode-->
                    <label for="mulaiPeriode1" class="form-label">Mulai Periode</label>
                    <input class="form-control" id="mulaiPeriode1" name="mulaiPeriode[]" type="date" placeholder=" " required>
                </div>
                <!-- input akhir periode -->
                <div class="col-md-6">
                    <label for="akhirPeriode1" class="form-label mt-2">Akhir Periode</label>
                    <input class="form-control" type="date" id="akhirPeriode1" name="akhirPeriode[]" placeholder=" " required>
                </div>
            </div>

            <!-- Keterangan -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="exampleFormControlTextarea[]" rows="3" placeholder=" "></textarea>
            </div>
        </div>
      </form>

      <div class="row">
        <div class="col-12 d-flex justify-content-end">
          <button id="tambahPendidikan" class="btn btn-save mt-3">Tambah Pendidikan</button>
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
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder=" "></textarea>
      </div>
    </div>
  </div>
</div>

    <div class="container bottom-line"></div>

<!-- button save -->
<div class="container d-flex justify-content-end align-items-right mt-4 mb-4">
  <button class="btn btn-save">Simpan Perubahan</button>
</div>
</form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
  <script src="jquery/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/script_editProfil.js"></script>
  <script>feather.replace();</script>
  <script>
    document.getElementById('image').addEventListener('change', function() {
        const file = this.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('profileImage').src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
</script>

</body>
</html>