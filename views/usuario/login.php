<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Iniciar sesión</div>
        <div class="card-body">
            <?php if(!isset($_SESSION['identity'])): ?>
            <!--Form login-->
            <form action="<?=url_project?>usuario/login" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" name="email-login" id="inputEmail" class="form-control"
                            placeholder="Dirección de correo" required="required" autofocus="autofocus">
                        <label for="inputEmail">Correo electrónico</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" name="password-login" id="inputPassword" class="form-control"
                            placeholder="Contraseña" required="required">
                        <label for="inputPassword">Contraseña</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me">
                            Remember Password
                        </label>
                    </div>
                </div>
                <input type="submit" value="Iniciar Sesión">
            </form>
            <?php else: ?>
              <h1 class="white-text"><?= $_SESSION['identity']->nombre; ?> <?= $_SESSION['identity']->apellidos; ?></h1>
            <?php endif;?>
            <div class="text-center">
                <!--<a class="d-block small mt-3" href="<?= url_project ?>usuario/">Register an Account</a>-->
                <!--<a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
            </div>
        </div>
    </div>
</div>
