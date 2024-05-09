<!DOCTYPE html>
<html>
<head>
    <title>EmployEase SignUp</title>
    <!-- Bootstrap CSS terbaru -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signup.css">

    <!-- fonts -->
        <!-- epilogue -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- outfit -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
        <!-- inter -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <img src="image/logo.png" alt="Logo Startup" class="logo"/>
    <div class="container-fluid">
        <div class="row">
          <div class="gambar col-6 d-flex align-items-center justify-content-end">
                <div>
                    <img
                  src="image/White Modern 3d Social Media Marketing Instagram Post 1.png"
                  alt="orang"
                  width="600"
                  class="mx-5"
                />
            </div>    
          </div>
          
          <div class="col-6">
            <div class="login-container">
                <div class="login-form">
                    <div class="jenis btn-group" role="group" aria-label="User type">
                        <input type="radio" id="jobSeeker" name="userType" checked>
                        <label for="jobSeeker" class="btn">Job Seeker</label>
                        <input type="radio" id="company" name="userType">
                        <label for="company" class="btn">Company</label>
                    </div>
                    <h2 class="welcome-text">Find your dream job here!</h2>
                    <form>
                        <!-- Perubahan kelas dari 'form-group' menjadi 'mb-3' untuk margin bottom -->
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                        </div>                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
                        </div>
                        <button class="login btn">Continue</button>
                    </form>
                    <h3 class="sign-up-text"> Already have an account? <a id="sign-up-link" href="/login">Login</a></h3>
                    <h4 class="policy-text">By clicking 'Continue', you acknowledge that you have read and accept the<a
                        id="terms-link"> Terms of Service</a> and <a id="policy-link">Privacy Policy</a>
                    </h4>
                </div>
            </div>            
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>