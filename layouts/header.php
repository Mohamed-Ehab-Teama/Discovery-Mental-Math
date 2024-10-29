
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/Discoery Logo.jpg">

    <style>
        .my-link{
            text-decoration: none;
        }
    </style>

    <title>
         <?php echo $title; ?> 
    </title>
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img class="rounded" src="./images/Discoery Logo.jpg" alt="logo for discovery" width="50px">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" aria-current="page" href="./index.php"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="./train.php"> Traning </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="./Competition.php"> Competition </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="./contact_us.php"> Contact US </a>
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
