<!DOCTYPE html>
<html>
<head>
    <title>EmployEase Login</title>
    <!-- Bootstrap CSS terbaru -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_login.css">

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
    <img src="image/logo.png" alt="Logo Startup" class="logo">
    <div class="container-fluid">
        <div class="row">
          <div class="gambar col-6 d-flex align-items-center justify-content-end">
                <div>
                    <img
                  src="image/Green White Modern Business Tips Instagram Post 1 (1).png"
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
                    <h2 class="welcome-text">Welcome Back</h2>
                    <form>
                        <!-- Perubahan kelas dari 'form-group' menjadi 'mb-3' untuk margin bottom -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email address">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Remember me
                            </label>
                        </div>
                        <button class="login btn">Login</button>
                    </form>
                    <h3 class="sign-up-text"> Don't have an account? <a id="sign-up-link" href="/signup">Sign Up</a></h3>
                </div>
            </div>            
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>