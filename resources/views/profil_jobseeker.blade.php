<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profil Jobseeker | Employease</title>
        <link rel="icon" type="image/x-icon" href="image/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link
        rel="stylesheet"
        href="css/bootstrap.css"/>
        <link href="css_profil/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top py-5">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <ul class="navbar-nav d-flex">
                <li class="nav-item d-flex"><a class="nav-link js-scroll-trigger" href="/logedin" >Kembali</a></li>
                <li class="nav-item d-flex"><a class="nav-link js-scroll-trigger" href="/edit-profil">Edit Profil</a></li>
            </ul>
            
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ Auth::user()->image }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Pengalaman">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Pendidikan">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Keterampilan">Keterampilan</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid py-5">
            <!-- Tentang-->
            <section class="resume-section" id="Tentang">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{ Auth::user()->first_name }}
                        <span class="text-primary">{{ Auth::user()->last_name }}</span>
                    </h1>
                    <div class="subheading mb-5">
                        {{ $userProfile->alamat ?? 'Alamat belum diisi' }} · 
                        {{ $userProfile->no ?? 'No HP belum diisi' }} · 
                        {{ Auth::user()->email }}
                    </div>
                    <p class="lead mb-5">{{ $userProfile->desc ?? 'Deskripsi belum diisi' }}</p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Pengalaman-->
            <section class="resume-section" id="Pengalaman">
                <div class="resume-section-content">
                    <h2 class="mb-5">
                        Pengalaman
                        <button id="editPengalaman" class="btn btn-tambah btn-sm">Tambah</button>
                    </h2>
                    <!-- Dropdown Edit Form -->
                    <div id="editPengalamanDropdown" class="container mb-5">
                        <!-- Form Pendidikan -->
                        <form method="POST" action="{{ route('post.pengalaman') }}" id="formPengalaman">
                            {{ csrf_field() }}
                            <div class="pengalaman-item border-bottom border-3">
                                <!-- input nama instansi -->
                                <label for="namaPekerjaan1" class="form-label">Nama Pekerjaan</label>
                                <input class="form-control" id="namaPekerjaan1" name="pekerjaan" type="text" placeholder=" " required>

                                <!-- input jurusan -->
                                <label for="divisi1" class="form-label">Divisi</label>
                                <input class="form-control" id="divisi1" name="divisi" type="text" placeholder=" " required>
                                    
                                <!-- input periode -->
                                <div class="row periode-pair">
                                    <div class="col-md-6">
                                        <!-- input awal periode-->
                                        <label for="mulaiPeriode1" class="form-label">Mulai Periode</label>
                                        <input class="form-control mulai-periode" name="mulai" type="date" placeholder=" " required>
                                    </div>
                                    <!-- input akhir periode -->
                                    <div class="col-md-6">
                                        <label for="akhirPeriode1" class="form-label">Akhir Periode</label>
                                        <input class="form-control akhir-periode" type="date" placeholder=" " name="selesai" >
                                    </div>
                                </div>

                                <!-- Keterangan -->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" placeholder=" "></textarea>
                                </div>

                            </div>
                        

                        <div class="row">
                            <div class="col-12 d-flex justify-content-end">
                                <button id="tambahPendidikan" class="btn btn-save mt-3" type="submit">Tambah Pengalaman</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- End of Dropdown Edit Form -->
                    @if ($pengalamans->isEmpty())
                        <div class="alert alert-warning">
                            Pengalaman belum diisi
                        </div>
                    @else
                    @foreach ($pengalamans as $datapengalaman)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                            <div class="flex-grow-1">
                                <h3 class="mb-0">{{ $datapengalaman->pekerjaan }}</h3>
                                <div class="subheading mb-3">{{ $datapengalaman->divisi }}</div>
                                <p>{{ $datapengalaman->desc }}</p>
                            </div>
                            <div class="flex-shrink-0"><span class="text-primary">{{ $datapengalaman->mulai }} - {{ $datapengalaman->selesai }}</span></div>
                            <form action="{{ route('pengalaman.delete', $datapengalaman->id) }}" method="POST" style="display:inline;">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    @endforeach
                    @endif
                </div>
            </section>
            <hr class="m-0" />
            <!-- Pendidikan-->
            <section class="resume-section" id="Pendidikan">
                <div class="resume-section-content">
                    <h2 class="mb-5">
                        Pendidikan
                        <button id="editPendidikan" class="btn btn-tambah btn-sm">Tambah</button>
                    </h2>
                    <!-- Dropdown Edit Form -->
                    <div id="editPendidikanDropdown" class="container mb-5">
                        <!-- Form Pendidikan -->
                        <form method="POST" action="{{ route('post.pendidikan') }}" id="formPendidikan">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="pendidikanId">
                            <!-- input nama instansi -->
                            <label for="instansi" class="form-label">Nama Instansi</label>
                            <input class="form-control" id="instansi" name="instansi" type="text" placeholder=" " required>

                            <div class="row periode-pair">
                                <div class="col-md-6">
                                    <!-- input jurusan -->
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <input class="form-control" id="jurusan" name="jurusan" type="text" placeholder=" " required>
                                </div>
                                <div class="col-md-6">
                                    <!-- input jurusan -->
                                    <label for="ipk" class="form-label">IPK</label>
                                    <input class="form-control" id="ipk" name="ipk" type="text" placeholder=" " required>
                                </div>
                            </div>

                            <!-- input periode -->
                            <div class="row periode-pair">
                                <div class="col-md-6">
                                    <!-- input awal periode-->
                                    <label for="mulai" class="form-label">Mulai Periode</label>
                                    <input class="form-control mulai-periode" name="mulai" id="mulai" type="date" placeholder=" " required>
                                </div>
                                <!-- input akhir periode -->
                                <div class="col-md-6">
                                    <label for="selesai" class="form-label">Akhir Periode</label>
                                    <input class="form-control akhir-periode" name="selesai" id="selesai" type="date" placeholder=" ">
                                </div>
                            </div>

                            <!-- Keterangan -->
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="desc" rows="3" placeholder=" "></textarea>
                            </div>

                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-save mt-3">Tambah Pendidikan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        <!-- Daftar Pendidikan -->
                        @if ($pendidikans->isEmpty())
                            <div class="alert alert-warning">
                                Pendidikan belum diisi
                            </div>
                        @else
                            @foreach ($pendidikans as $datapendidikan)
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-0">{{ $datapendidikan->instansi }}</h3>
                                        <div class="subheading mb-3">{{ $datapendidikan->jurusan }}</div>
                                        <p>IPK: {{ $datapendidikan->ipk }}</p>
                                        <p>{{ $datapendidikan->desc }}</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="text-primary">{{ $datapendidikan->mulai }} - {{ $datapendidikan->selesai }}</span>
                                    </div>
                                    <form action="{{ route('pendidikan.delete', $datapendidikan->id) }}" method="POST" style="display:inline;">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            @endforeach
                        @endif
                </div>
            </section>

            <hr class="m-0" />
            <!-- Keterampilan-->
            <section class="resume-section" id="Keterampilan">
                <div class="resume-section-content">
                    <h2 class="mb-5">Keterampilan</h2>
                    <p>{{ $userProfile->keterampilan ?? 'Keterampilan belum diisi' }}</p>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts_profil.js"></script>
    </body>
</html>
