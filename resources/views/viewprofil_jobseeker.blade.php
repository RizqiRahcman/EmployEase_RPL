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
        href="{{ asset('css/bootstrap.css') }}"/>
        <link href="{{ asset('css_profil/styles_viewprofil.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top py-5">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <ul class="navbar-nav d-flex">
                <li class="nav-item d-flex"><a class="nav-link js-scroll-trigger" href="/DashComp" >Kembali</a></li>
            </ul>
            
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset($user->image) }}" alt="..." /></span>
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
                        {{ $user->first_name }}
                        <span class="text-primary">
                        {{ $user->last_name }}
                    </span>
                    </h1>
                    <div class="subheading mb-5">
                        {{ $userProfile->alamat ?? 'Alamat belum diisi' }} · 
                        {{ $userProfile->no ?? 'No HP belum diisi' }} · 
                        {{ $user->email }}
                    </div>
                    <p class="lead mb-5">
                    {{ $userProfile->desc ?? 'Deskripsi belum diisi' }}
                </p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Pengalaman-->
            <section class="resume-section" id="Pengalaman">
                <div class="resume-section-content">
                    <h2 class="mb-5">Pengalaman</h2>
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
                        </div>
                    @endforeach
                    @endif
                </div>
            </section>
            <hr class="m-0" />
            <!-- Pendidikan-->
            <section class="resume-section" id="Pendidikan">
                <div class="resume-section-content">
                    <h2 class="mb-5">Pendidikan</h2>
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
        <script src="{{ asset('js/scripts_profil.js') }}"></script>
    </body>
</html>
