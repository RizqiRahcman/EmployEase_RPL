<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pelamar</title>

        <!-- bs5 -->
        <link rel="stylesheet" href="css/bootstrap.css" />

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
        <link rel="stylesheet" href="css_pelamar/style_pelamar.css" />
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar start -->
                <div class="col-md-3 col-lg-2 sidebar p-0">
                    <div class="d-flex flex-column align-items-center">
                        <a href="#" class="text-center my-4">
                            <img src="image/logo.png" alt="Logo" width="180" />
                        </a>
                    </div>
                    <div class="list-group list-group-flush my-3">
                        <a
                            href="/DashComp"
                            class="list-group-item list-group-item-action bg-transparent second-text"
                            ><i class="fas fa-tachometer-alt me-2"></i
                            >Dashboard</a
                        >
                        <a
                            href="#"
                            class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"
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
                                href="/"
                                class="text-danger list-group-item list-group-item-action bg-transparent second-text fw-bold"
                                ><i class="fas fa-power-off me-2"></i>log Out</a
                            >
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->

                <!-- Top-bar -Start-->
                <div class="col-md-9 col-lg-10 content">
                    <div
                        class="row bg-white py-2 shadow-sm align-items-center mb-4 border-bottom pb-3"
                    >
                        <div
                            class="col-md-6 d-flex align-items-center company-logo"
                        >
                            <img
                                src="image/logo pertamina.png"
                                alt="Company Logo"
                                class="me-2"
                                width="40"
                            />
                            <div>
                                <span class="text-muted d-block">Company</span>
                                <span class="h5 mb-0"
                                    >{{ Auth::user()->first_name }}</span
                                >
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                        <div
                            class="col-md-6 d-flex justify-content-end align-items-center"
                        >
                            <button
                                class="btn btn-primary"
                                onclick="redirectToPage()"
                            >
                                <i class="fas fa-plus me-3"></i> Tambah Lowongan
                            </button>
                        </div>
                    </div>
                    <!-- top bar end -->
                    <!-- Main Content -->

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
                            <tbody>
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
                <!-- Main Content End -->
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="jquery/jquery-3.7.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
        function redirectToPage() {
            window.location.href = '/Up-Loker'; // Ganti dengan URL tujuan
        }
        </script>
    </body>
</html>
