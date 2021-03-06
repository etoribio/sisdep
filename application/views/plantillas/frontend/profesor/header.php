<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>assets/mdb/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/mdb/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?php echo base_url(); ?>assets/mdb/css/style.min.css" rel="stylesheet">
    </head>

    <body>

        <!--Main Navigation-->
        <header>

            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark mdb-color darken-3 scrolling-navbar">
                <div class="container">

                    <!-- Brand -->
                    <a class="navbar-brand waves-effect">
                        <img height="70px" alt="Brand" src="<?php echo base_url(); ?>assets/app/img/logoup.png">
                    </a>

                    <!-- Collapse -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link waves-effect" href="#">Inicio
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Evaluación del profesor</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Cap_Forma2G(Básico)</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Cap_Forma2E(Odontológico)</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="<?php echo base_url(); ?>bienvenida/logout"><i class="fa fa-sign-in" aria-hidden="true"></i>Salir</a>
                            </li>
                        </ul>
                        <!-- Right -->
                        <ul class="navbar-nav nav-flex-icons">
                            <li class="nav-item">
                                <a class="navbar-brand waves-effect">
                                    <img height="70px" alt="Brand" src="<?php echo base_url(); ?>assets/app/img/logodep.png">
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </nav>
            <!-- Navbar -->

        </header>
        <!--Main Navigation-->