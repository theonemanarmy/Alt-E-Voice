  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">
        Registrar una cuenta
        <?php if(isset($_SESSION['register']) && $_SESSION['register'] == "complete"): ?>
          <h6 class="alert-green">Registro completado correctamente</h6>
        <?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == "failed"): ?>
          <h6 class="alert-red">Registro Fallido, Introduce bien los datos</h6>  
        <?php elseif(isset($_SESSION['errores'])): ?>
          <h6><?php $_SESSION['errores']; ?></h6>
        <?php endif; ?>

      </div>
      <div class="card-body">
        <form action="<?=url_project?>usuario/save" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Nombre" required="required" autofocus="autofocus">
                  <label for="firstName">Nombre</label>
                  <div><?php Utils::mostrarErrores('errores', 'firstName'); ?></div>
                </div>
                <div id="mensaje1" class="errores">*Ingresa un nombre válido</div>

              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Apellidos" required="required">
                  <label for="lastName">Apellidos</label>
                  <div><?php Utils::mostrarErrores('errores', 'lastName'); ?></div>
                </div>
                <div id="mensaje2" class="errores">*Los apellidos no son correctos</div>

              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail" required="required">
              <label for="inputEmail">Dirección de e-mail</label>
              <div><?php Utils::mostrarErrores('errores', 'email'); ?></div>
            </div>
            <div id="mensaje3" class="errores">*Ingresa un e-mail válido</div>

          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="required">
                  <label for="inputPassword">Contraseña</label>
                  <div><?php Utils::mostrarErrores('errores', 'password'); ?></div>
                </div>
                <div id="mensaje4" class="errores">*La contraseña no es correcta</div>

              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="confPassword" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
                <div id="mensaje5" class="errores">*Recuerda que debe coincidir tu contraseña</div>

              </div>
            </div>
          </div>
          <input type="submit" id="send" value="Registrarse">
        </form>
        
          
          <?php Utils::deleteSession('register'); ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?=url_project?>views/usuario/login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
