<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alt-E-Voice Admin - Dashboard</title>
  <link rel="shortcut icon" href="<?= url_project ?>assets/images/logo-black.png" type="image/x-icon">

  <!-- Custom fonts-->
  <link href="<?= url_project ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= url_project ?>assets/aos-master/dist/aos.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?= url_project ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="<?= url_project ?>assets/css/sb-admin.css" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <a class="navbar-brand mr-1" href="<?= url_project ?>"> Alt-E-Voice</a>

    <img class="img-logo" src="<?= url_project ?>assets/images/logo-AEV.png" alt="">


    <!-- Navbar Search -->
    <form action="<?= url_project ?>usuario/login" id="FormularioAjax" method="POST" enctype="multipart/form-data" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <!--<div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>-->
      <?php if (!isset($_SESSION['identity'])) : ?>
        <div class="form-row">
          <div class="col-md-4">
            <div class="form-label-group" data-aos="zoom-in">
              <input type="email" name="email-login" id="inputEmailHeader" class="form-control" placeholder="E-mail" required="required">
              <label for="inputEmailHeader">Dirección de e-mail</label>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-label-group" data-aos="zoom-out">
              <input type="password" name="password-login" id="inputPasswordHeader" class="form-control" placeholder="Contraseña" required>
              <label for="inputPasswordHeader">Ingresa tu password</label>
            </div>
          </div>

          <div class="col-md-2">
            <input type="submit" value="Iniciar" class="btn btn-primary btnSend" style="width:100%;">
          </div>
          <div class="col-md-2">
            <a href="<?= url_project ?>usuario/register" class="btn-1">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Registrate
            </a>
          </div>
        </div>
      <?php endif; ?>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <?php if (!isset($_SESSION['identity'])) : ?>
        <li class="nav-item dropdown no-arrow logIn">
          <a class="nav-link dropdown-toggle" href="<?= url_project ?>usuario/startLogin" role="button">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
        </li>
      <?php endif; ?>

      <?php if (isset($_SESSION['identity'])) : ?>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      <?php endif; ?>
    </ul>

  </nav>


  <div id="wrapper">