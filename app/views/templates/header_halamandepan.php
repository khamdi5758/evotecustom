<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?= baseurl; ?>/assets2/custom/custom.css">
    <link rel="stylesheet" href="<?= baseurl; ?>/assets2/css/bootstrap.min.css"> -->
    <title>e-vote</title>
    <link rel="icon" type="image/x-icon" href="<?= baseurl; ?>/assets3/icon/favicon.ico" />
    <link href="<?= baseurl; ?>/assets3/css/styles.css" rel="stylesheet" />
    <link href="<?= baseurl; ?>/assets3/css/custom.css" rel="stylesheet" />
    <script src="<?= baseurl; ?>/assets2/dist/Chart.bundle.js"></script>
    <script src="<?= baseurl; ?>/assets2/dist/utils.js"></script>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">e-vote</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#suara">SUARA</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kandidat">KANDIDAT</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= baseurl; ?>/auth">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>