<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item">
        <?php if(!isset($_SESSION['identity'])): ?>
        <?php else: ?>
            <h1 class="white-text"><?= $_SESSION['identity']->nombre; ?> <?= $_SESSION['identity']->apellidos; ?></h1>
        <?php endif;?>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=url_project?>#about">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Nosotros</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=url_project?>#team">
            <i class="fas fa-fw fa-table"></i>
            <span>Equipo de trabajo</span>
        </a>
    </li>
    <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="<?=url_project?>views/usuario/login.php">Login</a>
          <a class="dropdown-item" href="<?=url_project?>views/usuario/register.php">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>-->
    <?php if(isset($_SESSION['admin'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= url_project ?>peticiones/ver">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Peticiones</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= url_project ?>red/ver">
                <i class="fas fa-fw fa-table"></i>
                <span>Mis redes</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(isset($_SESSION['identity'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?=url_project?>usuario/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Cerrar Sesión</span>
            </a>
        </li>
    <?php endif; ?>
</ul>

<div id="content-wrapper">

    <div class="container-fluid">