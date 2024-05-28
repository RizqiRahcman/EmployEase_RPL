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
                <div class="text-center">
                <div class="h1 fw-light">Form Lamaran Pekerjaan</div>
                <p class="mb-4 text-muted">#Ini nama posisi || perusahaan</p>
                </div>
    
                <!-- * * * * * * * * * * * * * *
                // * * SB Forms Contact Form * *
                // * * * * * * * * * * * * * * *
    
                // This form is pre-integrated with SB Forms.
                // To make this form functional, sign up at
                // https://startbootstrap.com/solution/contact-forms
                // to get an API token!
                -->
    
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
    
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
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                </div>
                </form>
                <!-- End of contact form -->
    
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- CDN Link to SB Forms Scripts -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

