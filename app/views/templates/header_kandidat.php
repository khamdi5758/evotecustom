<?php
if (!isset($_SESSION)) {
    session_start();
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data['judul']; ?></title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= baseurl; ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= baseurl; ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="<?= baseurl; ?>/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= baseurl; ?>/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
    <!-- <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script> -->
    <!-- <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script> -->
    <style>
        table {
            margin-top: 20px;
            width: 500px;
            /* border: 1px solid black; */
        }

        table thead tr td {
            height: 50px;
            /* border: 1px solid black; */
            text-align: center;
        }

        table tbody tr td {
            height: 150px;
            /* border: 1px solid black; */
            text-align: center;
        }

        #profile {
            width: 8cm;
            height: 8cm;
            margin-right: 10px;
            margin-top: 40px;
        }

        .nama {
            text-align: center;
        }

        #kotakangambar {
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#index.html">kandidat</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?= $_SESSION["nampeg_session"]; ?> &nbsp;
                <a href="<?= baseurl; ?>/auth/logout" class="btn btn-danger square-btn-adjust">keluar</a>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="<?= baseurl; ?>/assets/img/find_user.png" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a class="active-menu" href="<?= baseurl; ?>/halkandidat"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>

                    </li>
                    <li>
                        <a href="<?= baseurl; ?>/halkandidat/pengaturansaya"><i class="fa fa-desktop fa-3x"></i>pengaturan saya</a>
                    </li>
                    <li>
                        <a href="<?= baseurl; ?>/halkandidat/pendukung"><i class="fa fa-qrcode fa-3x"></i> pendukung</a>
                    </li>


                </ul>

            </div>

        </nav>