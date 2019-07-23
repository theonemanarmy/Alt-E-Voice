  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">

        <?php if(isset($user) && isset($edit) && is_object($user)): ?>
          Editar mis datos
          <?php else: ?>
          Registrar una cuenta
        <?php endif; ?>

        <?php if (isset($_SESSION['register']) && $_SESSION['register'] == "complete") : ?>
          <h6 class="alert-green">Registro completado correctamente</h6>
        <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == "failed") : ?>
          <h6 class="alert-red">Registro Fallido, Introduce bien los datos</h6>
        <?php elseif (isset($_SESSION['errores'])) : ?>
          <h6><?php $_SESSION['errores']; ?></h6>
        <?php endif; ?>

      </div>
      <div class="card-body">
        <form action="<?= url_project ?>usuario/save" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group" data-aos="zoom-in-up">
                  <input type="text" name="firstName" id="firstName" value="<?= isset($user) && is_object($user) ? $user->nombre : ''; ?>" onkeyup="this.className = 'campo';" class="form-control" placeholder="Nombre" required="required" pattern="[A-Za-z-áéíóú\s]+" minlength="2" maxlength="100" autofocus="autofocus"><span></span>
                  <label for="firstName">Nombre</label>
                  <div><?php Utils::mostrarErrores('errores', 'firstName'); ?></div>
                </div>

                <!--<div id="mensaje1" class="errores">*Ingresa un nombre válido</div>-->

              </div>
              <div class="col-md-6">
                <div class="form-label-group" data-aos="zoom-in-left">
                  <input type="text" name="lastName" id="lastName" value="<?= isset($user) && is_object($user) ? $user->apellidos : ''; ?>" onkeyup="this.className = 'campo';" class="form-control" placeholder="Apellidos" minlength="2" maxlength="150" pattern="[A-Za-z-áéíóú\s]+" required="required"><span></span>
                  <label for="lastName">Apellidos</label>
                  <div><?php Utils::mostrarErrores('errores', 'lastName'); ?></div>
                </div>

                <!--<div id="mensaje2" class="errores">*Los apellidos no son correctos</div>-->

              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group" data-aos="zoom-in-right">
              <input type="email" name="email" id="inputEmail" onkeyup="this.className = 'campo';" class="form-control campo" placeholder="E-mail" required="required" minlength="5" maxlength="150" pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$"><span></span>
              <label for="inputEmail">Dirección de e-mail</label>
              <div><?php Utils::mostrarErrores('errores', 'email'); ?></div>
            </div>

            <!--<div id="mensaje3" class="errores">*Ingresa un e-mail válido</div>-->

          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group" data-aos="zoom-in-left">
                  <input type="password" name="password" id="inputPassword" onkeyup="this.className = 'campo';" class="form-control" placeholder="Contraseña" required="required" minlength="2"><span></span>
                  <label for="inputPassword">Contraseña</label>
                  <div><?php Utils::mostrarErrores('errores', 'password'); ?></div>
                </div>

                <!--<div id="mensaje4" class="errores">*La contraseña no es correcta</div>-->

              </div>
              <div class="col-md-6">
                <div class="form-label-group" data-aos="zoom-out-up">
                  <input type="password" name="confPassword" id="confirmPassword" onkeyup="this.className = 'campo';" class="form-control" placeholder="Confirm password" minlength="2" required="required"><span></span>
                  <label for="confirmPassword">Confirm password</label>
                </div>

                <!--<div id="mensaje5" class="errores">*Recuerda que debe coincidir tu contraseña</div>-->

              </div>
            </div>
          </div>
          <input type="submit" id="send" value="Enviar" class="btn btn-success" data-aos="zoom-in">
        </form>


        <?php Utils::deleteSession('register'); ?>
        <div class="text-center">
          <!--<a class="d-block small mt-3" href="<?= url_project ?>views/usuario/login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
        </div>
      </div>
    </div>
  </div>