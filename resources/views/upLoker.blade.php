<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Loker | Employease</title>

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

    <!-- CSS style  -->
    <link rel="stylesheet" href="css_uploker/style_upLoker.css" />


    <!-- Navbar Start -->
   <div class="container-fluid">
   <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="/#">
        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
        </svg>
        </a>
        <h1>Buat Lowongan Pekerjaan</h1>
    </nav>
          
    </div> 

    <!-- Navbar Ends -->
    <div class="container mt-5">
        <form>
            <div class="mb-3">
                <label for="position" class="form-label">Posisi / Jabatan</label>
                <input type="text" class="form-control" id="position" placeholder="Masukkan posisi atau jabatan yang dibutuhkan (misalnya Cyber Security Analyst)">
            </div>
            <div class="mb-3">
                <label for="jobDescription" class="form-label">Deskripsi Pekerjaan</label>
                <textarea class="form-control" id="jobDescription" rows="3" placeholder="Masukkan deskripsi pekerjaan yang ditawarkan"></textarea>
            </div>
            <div class="mb-3">
                <label for="state location" class="form-label">Kota</label>
                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Masukkan lokasi penempatan berdasarkan Kabupaten/Kota (misalnya Semarang)">
                <datalist id="datalistOptions">
                <option value="Semarang">
                <option value="Bandung">
                <option value="Malang">
                <option value="Surabaya">
                <option value="Yogyakarta">
                </datalist>
                <!-- <textarea class="form-control" id="jobDescription" rows="3" placeholder="Masukkan deskripsi pekerjaan yang ditawarkan"></textarea> -->
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Alamat Penempatan</label>
                <input type="text" class="form-control" id="location" placeholder="Masukkan alamat penempatan (misalnya Jl.Taman Siswa no.2)">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe Pekerjaan</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobType" id="fullTime" value="fullTime">
                        <label class="form-check-label" for="fullTime">Full Time</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobType" id="partTime" value="partTime">
                        <label class="form-check-label" for="partTime">Part Time</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobType" id="contract" value="contract">
                        <label class="form-check-label" for="contract">Contract</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobType" id="internship" value="internship">
                        <label class="form-check-label" for="internship">Internship</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori Pekerjaan</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobCategory" id="design" value="design">
                        <label class="form-check-label" for="design">Desain</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobCategory" id="technology" value="technology">
                        <label class="form-check-label" for="technology">Teknologi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobCategory" id="marketing" value="marketing">
                        <label class="form-check-label" for="marketing">Pemasaran</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobCategory" id="finance" value="finance">
                        <label class="form-check-label" for="finance">Keuangan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jobCategory" id="other" value="other">
                        <label class="form-check-label" for="other">Lainnya</label>
                        <input type="text" class="form-control" id="otherCategory" placeholder="Kategori lain" style="display:none;">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Penawaran Gaji</label>
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="salaryRange" id="range1" value="range1">
                        <label class="form-check-label" for="range1">Kurang dari Rp 1.000.000</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="salaryRange" id="range2" value="range2">
                        <label class="form-check-label" for="range2">Rp 1.000.000 - Rp 2.500.000</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="salaryRange" id="range3" value="range3">
                        <label class="form-check-label" for="range3">Rp 2.500.001 - Rp 4.000.000</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="salaryRange" id="range4" value="range4">
                        <label class="form-check-label" for="range4">Rp 4.000.001 - Rp 5.500.000</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="salaryRange" id="range5" value="range5">
                        <label class="form-check-label" for="range5">Lebih dari Rp 5.500.000</label>
                    </div>
                </div>
            </div>
        </form>
        <div class="button-submit d-flex justify-content-end mb-5">
            <button type="button" class="btn btn-outline-primary btn-draf ">Simpan Draf</button>
            <button type="submit" class="btn btn-primary btn-send">Kirim</button>
        </div>
    </div>

     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="../js/uploker.js"></script>
  </body>
</html>