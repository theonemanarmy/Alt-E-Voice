<h3>insertar datos de prueba</h3>

<?php if(isset($_SESSION['insert']) && $_SESSION['insert'] == "complete"): ?>
    <h6 class="alert-green">Registro completado correctamente</h6>
<?php elseif(isset($_SESSION['insert']) && $_SESSION['insert'] == "failed"): ?>
    <h6 class="alert-red">Registro Fallido, Introduce bien los datos</h6>
<?php endif; ?>

<form action="<?=url_project?>peticiones/insertar" method="post">
    <input type="text" name="text" placeholder="petición aquí">
    <input type="submit" value="Enviar">
</form>

<?php Utils::deleteSession('insert'); ?>