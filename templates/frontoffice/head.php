<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PAGE_TITLE; ?></title>
    <link rel="stylesheet" href="public/css/frontstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="page">
            <nav class="navbar navbar-expand-lg bg-light menu">
                <div class="collapse navbar-collapse menu" id="navbarNav">
                    <ul class="navbar-nav">
                        <li>
                            <img Class="navbar-brand" src="" alt="Logomarca" width="30" height="24">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_generate(['route' => 'home']); ?>">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_generate(['route' => 'about']); ?>">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_generate(['route' => 'more']); ?>">MORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url_generate(['route' => 'more']); ?>">AND MORE...</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--  <nav class="menu flex flex-justify-space-between">
                <ul class="flex">
                    <li><a class="navbar-brand" href="#">
                            <img src="" alt="Logomarca" width="30" height="24">
                        </a>
                    </li>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT US</a></li>
                </ul>
            </nav> -->
        </div>
        <div class="slide page">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="IMAGE_1">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="IMAGE_2">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="IMAGE_3">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="IMAGE_4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>