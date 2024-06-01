<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Lamaran | Employease</title>

    {{-- bs --}}
    <link rel="stylesheet" href="css/bootstrap.css">

    {{-- css --}}
    <link rel="stylesheet" href="css_carikerja/form.css">

    <!-- Feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

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
                        <img src="image/pongo.png" class="img-thumbnail" alt="Logo Perusahaan" style="border: 0cap;">
                        
                    </div>
                    <div class="col-7 detail_name">
                        <div class="h1 judul_pekerjaan D-inline">Nama Pekerjaan</div>
                        <div class="h6 detail_pekerjaan D-block">Nama perusahaan</div>
                        <div class="h6 detail_pekerjaan D-block">2 hours ago</div>
                        <div class="h6 detail_pekerjaan D-block"><i class="fas fa-location-dot"></i>Semarang, Indonesia</div>
                    </div>

                </div>
                <div class="konten_form">
                    <h3>Keterangan Pekerjaan</h3>
                    <p class="fw-light isi_ket">
                        Lorem ipsum dolor sit amet consectetur. Odio posuere arcu odio est nulla elementum proin. 
                        Fermentum arcu diam dolor massa adipiscing. Vulputate dui adipiscing id pellentesque proin 
                        pretium a. Euismod egestas platea non urna varius tempor a. Dui posuere gravida nunc augue 
                        enim dolor. Lectus tincidunt in facilisis sociis tempus habitant id est. Montes tincidunt 
                        mus lacus nunc massa nunc volutpat. Pellentesque magna faucibus eget donec metus pellentesque 
                        dictum etiam. Amet scelerisque dolor eget odio at ipsum lectus sagittis pellentesque. 
                        Vestibulum scelerisque vehicula a venenatis volutpat. Mi dolor lobortis sed aenean potenti 
                        ullamcorper pellentesque tortor adipiscing. Donec facilisis sed et massa. Turpis ligula 
                        tincidunt dolor nam scelerisque ut. Quam lacinia sagittis tempor sem a adipiscing. Gravida 
                        metus enim tincidunt sit amet integer. In eros lacus mattis feugiat turpis nec et iaculis. Et 
                        pulvinar commodo arcu nunc eget sed at.
                    </p>
                </div>
                </div>
    
                <!-- * * * * * * * * * * * * * *
                // * * SB Forms Contact Form * *
                // * * * * * * * * * * * * * * *
    
                // This form is pre-integrated with SB Forms.
                // To make this form functional, sign up at
                // https://startbootstrap.com/solution/contact-forms
                // to get an API token!
                -->
                <div class="konten_form">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <h3>Lamar pekerjaan</h3>
                <!-- Name Input -->
                <div class="form-floating mb-3">
                    <label for="name">Nama lengkap Anda</label>
                    <input class="form-control" id="name" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                </div>
    
                <!-- Email Input -->
                <div class="form-floating mb-3">
                    <label for="emailAddress">Email Address</label>
                    <input class="form-control" id="emailAddress" type="email" placeholder="xxxx@mail.com" data-sb-validations="required,email" />
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                </div>

                <!-- Phone Number Input -->
                <div class="form-floating mb-3">
                    <label for="phoneNumber">Phone Number</label>
                    <input class="form-control" id="phoneNumber" type="tel" placeholder="081234567890" pattern="[0-9]*" inputmode="numeric" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="phoneNumber:required">Phone Number is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="phoneNumber:pattern">Phone Number is not valid.</div>
                </div>

    
                <!-- Message Input -->
                <div class="form-floating mb-3">
                    <label for="message">Surat lamaran</label>
                    <textarea class="form-control" id="message" type="text" placeholder="Tuliskan surat lamaran anda" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                </div>
    
                <!-- Submit success message -->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    <p>To activate this form, sign up at</p>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
    
                <!-- Submit error message -->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
    
                <!-- Submit button -->
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Kirim lamaran</button>
                </div>
                </form>
                <!-- End of contact form -->
    
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

