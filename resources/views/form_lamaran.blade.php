<!-- resources/views/lamaran/form_lamaran.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Lamaran | Employease</title>

    {{-- bs --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    {{-- css --}}
    <link rel="stylesheet" href="css_carikerja/form.css">

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <style>
        :root {
            --c-dark: #212529;
            --c-brand: #ff6000;
            --c-brand-light: #ff914f;
            --c-brand-rgb: 255, 96, 0;
            --body: #727272;
            --c-box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.08);
            --transition: all 0.5s ease;
            }
            body {
            background: var(--c-brand);
            background: linear-gradient(to right, var(--c-brand), var(--c-brand-light));
            }

            /* Head */

            .head {
            padding: 20px 0px;
            }
            .col-3{
            width: 120px;
            height: 120px;
            }
            .col-7{
            padding-left: 0;
            }
            .judul_pekerjaan{
            margin-bottom: 0px;
            }
            .detail_pekerjaan{
            margin: 8px 0px 8px 0px;
            }
            /* 
            .judul_pekerjaan{
            margin-left: 12px;
            width: 420px;
            } */

            .h6 {
            color: #727272;
            justify-items: left;
            width: 200px;
            font-weight: lighter;
            }
            .img-thumbnail {
            width: 120px; /* Lebar container gambar */
            height: 120px; /* Tinggi container gambar */
            /* background-image: url('path/to/image.jpg'); URL gambar yang akan ditampilkan */
            /* background-size: cover; Menyesuaikan gambar agar sesuai dengan ukuran container */
            background-position: left; /* Posisi gambar di tengah container */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            }

            .fas{
            padding-right: 8px;
            color: var(--c-brand);
            }

            /* deskripsi */
            .keterangan{
            padding: 0px 0px 20px 0px;
            }
            .isi_ket{
            text-align: justify;
            padding: 0px 12px;
            }

            /* ///////////// */

            .btn-lg{
            background-color: var(--c-brand);
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            }

            .btn:hover{
            background-color: var(--c-dark);
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
            }

            .d-grid .disabled{
            background-color: var(--c-brand);
            color: white;
            }
    </style>
</head>
<body>
    <!-- Bootstrap 5 Contact Form Snippet -->

    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                        <div class="text-left">
                            <div class="h6">Form Lamaran Pekerjaan</div>
                            <div class="row head">
                                <div class="col-3">
                                    <img src="{{ $pekerjaan->user->image }}" class="img-thumbnail" alt="Logo Perusahaan" style="border: 0cap;">
                                </div>
                                <div class="col-7 detail_name">
                                    <div class="h1 judul_pekerjaan d-inline">{{ $pekerjaan->posisi }}</div>
                                    <div class="h6 detail_pekerjaan d-block">{{ $pekerjaan->user->first_name }}</div>
                                    <div class="h6 detail_pekerjaan d-block">{{ $pekerjaan->created_at->diffForHumans() }}</div>
                                    <div class="h6 detail_pekerjaan d-block"><i class="fas fa-location-dot"></i>{{ $pekerjaan->kota->nama }}</div>
                                </div>
                            </div>
                            <div class="konten_form">
                                <h3>Keterangan Pekerjaan</h3>
                                <p class="fw-light isi_ket">
                                    {{ $pekerjaan->desc_pekerjaan }}
                                </p>
                            </div>
                        </div>
        
                        <div class="konten_form">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="{{ route('lamaran.store') }}" id="contactForm">
                                {{ csrf_field() }}
                                <h3>Lamar pekerjaan</h3>

                                <!-- Hidden pekerjaan_id Input -->
                                <input type="hidden" name="pekerjaan_id" value="{{ $pekerjaan->id }}">

                                <!-- Name -->
                                <div class="form-floating mb-3">
                                    <div class="col">
                                        <label for="nama" class="mb-2">Nama lengkap Anda</label>
                                        <input class="form-control" id="nama" name="nama" type="text" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" readonly />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="form-floating mb-3">
                                    <div class="col">
                                    <label for="emailAddress" class="mb-2">Email Address</label>
                                    <input class="form-control" id="emailAddress" name="email" type="email" value="{{ Auth::user()->email }}" readonly />
                                    </div>
                                </div>

                                <!-- Phone Number Input -->
                                <div class="form-floating mb-3">
                                    <div class="col" class="mb-2">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input class="form-control" id="phoneNumber" name="phone" type="tel" placeholder="Nomor telp anda" required />
                                    </div>
                                </div>

                                <!-- Message Input -->
                                <div class="form-floating mb-3">
                                    <div class="col" class="mb-2">
                                    <label for="message">Surat lamaran</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Tuliskan surat lamaran anda" style="height: 10rem;" required></textarea>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit">Kirim lamaran</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f2c387131d.js" crossorigin="anonymous"></script>
    <!-- CDN Link to SB Forms Scripts -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>