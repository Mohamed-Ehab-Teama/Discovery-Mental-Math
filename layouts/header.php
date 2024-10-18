<?php require_once '../connection.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title> Home </title>
</head>

<body>

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $path . 'index.php' ?>">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" aria-current="page" href="./index.php"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="<?php echo $path . 'train.php' ?>"> Traning </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="#"> Competition </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="#"> Contact US </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger me-4" href="#">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>