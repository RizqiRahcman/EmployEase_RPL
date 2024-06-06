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
                <li class="nav-item d-flex"><a class="nav-link js-scroll-trigger" href="/logedin">Kembali</a></li>
                <li class="nav-item d-flex"><a class="nav-link js-scroll-trigger" href="/Edit-Profil">Edit Profil</a></li>
            </ul>
            
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Clarence Taylor</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="image/contoh.png" alt="..." /></span>
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
                        3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
                        <a href="mailto:name@email.com">{{ Auth::user()->email }}</a>   
                    </div>
                    <p class="lead mb-5">I am berpengalaman in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
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
                        <form id="formPengalaman">
                            <div class="pengalaman-item border-bottom border-3">
                                <!-- input nama instansi -->
                                <label for="namaPekerjaan1" class="form-label">Nama Pekerjaan</label>
                                <input class="form-control" id="namaPekerjaan1" name="namaPekerjaan[]" type="text" placeholder=" " required>

                                <!-- input jurusan -->
                                <label for="divisi1" class="form-label">Divisi</label>
                                <input class="form-control" id="divisi1" name="divisi[]" type="text" placeholder=" " required>
                                    
                                <!-- input periode -->
                                <div class="row periode-pair">
                                    <div class="col-md-6">
                                        <!-- input awal periode-->
                                        <label for="mulaiPeriode1" class="form-label">Mulai Periode</label>
                                        <input class="form-control mulai-periode" name="mulaiPeriode[]" type="date" placeholder=" " required>
                                    </div>
                                    <!-- input akhir periode -->
                                    <div class="col-md-6">
                                        <label for="akhirPeriode1" class="form-label">Akhir Periode</label>
                                        <input class="form-control akhir-periode" type="date" placeholder=" " required>
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
                    <!-- End of Dropdown Edit Form -->
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Senior Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Developer</h3>
                            <div class="subheading mb-3">Intelitec Solutions</div>
                            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">December 2011 - March 2013</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Junior Web Designer</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">July 2010 - December 2011</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Web Design Intern</h3>
                            <div class="subheading mb-3">Shout! Media Productions</div>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>
                    </div>
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
                        <form id="formPendidikan">
                            <div class="pendidikan-item border-bottom border-3">
                                <!-- input nama instansi -->
                                <label for="namaInstansi1" class="form-label">Nama Instansi</label>
                                <input class="form-control" id="namaInstansi1" name="namaInstansi[]" type="text" placeholder=" " required>

                                <!-- input jurusan -->
                                <label for="jurusan1" class="form-label">Jurusan</label>
                                <input class="form-control" id="jurusan1" name="jurusan[]" type="text" placeholder=" " required>
                                    
                                <!-- input periode -->
                                <div class="row periode-pair">
                                    <div class="col-md-6">
                                        <!-- input awal periode-->
                                        <label for="mulaiPeriode2" class="form-label">Mulai Periode</label>
                                        <input class="form-control mulai-periode" name="mulaiPeriode[]" type="date" placeholder=" " required>
                                    </div>
                                    <!-- input akhir periode -->
                                    <div class="col-md-6">
                                        <label for="akhirPeriode2" class="form-label">Akhir Periode</label>
                                        <input class="form-control akhir-periode" type="date" placeholder=" " required>
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
                    <!-- End of Dropdown Edit Form -->

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Colorado Boulder</h3>
                            <div class="subheading mb-3">Bachelor of Science</div>
                            <div>Computer Science - Web Development Track</div>
                            <p>GPA: 3.23</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2006 - May 2010</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">James Buchanan High School</h3>
                            <div class="subheading mb-3">Technology Magnet Program</div>
                            <p>GPA: 3.56</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2002 - May 2006</span></div>
                    </div>


                </div>
            </section>

            <hr class="m-0" />
            <!-- Keterampilan-->
            <section class="resume-section" id="Keterampilan">
                <div class="resume-section-content">
                    <h2 class="mb-5">Keterampilan</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. 
                        In the winter, I am an avid skier and novice ice climber. During the warmer 
                        months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts_profil.js"></script>
    </body>
</html>
