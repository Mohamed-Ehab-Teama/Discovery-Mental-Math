<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title> Register </title>
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" aria-current="page" href="./index.php"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="./login.php">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Content -->
    <section class="vh-auto" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                    alt="registeration form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form>

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;">DISCOVERY</i>
                                            <span class="h1 fw-bold mb-0">
                                                Logo
                                            </span>
                                        </div>

                                        <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                                            Create new account
                                        </h4>

                                        
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">User Name</label>
                                            <input type="text" id="form2Example17" class="form-control form-control-lg" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                        </div>
                                        
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Confirm Password</label>
                                            <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                        </div>

                                        <div class="pt-1 mb-4 text-center">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">
                                                Create Account
                                            </button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? &nbsp;
                                            <a href="./login.php" style="color: #393f81;">
                                                Login here
                                            </a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>