<?php if(isset($_SESSION['delete-pet']) && $_SESSION['delete-pet'] == "complete"): ?>
  <h6 class="alert-green">Eliminado correctamente</h6>
  <?php elseif(isset($_SESSION['delete-pet']) && $_SESSION['delete-pet'] == "failed"): ?>
  <h6 class="alert-red">No se pudo borrar, Inténtelo de nuevo en unos momentos.</h6>
<?php endif; ?>

<?php Utils::deleteSession('delete-pet'); ?>

<table class="table table-responsive-sm text-center" data-aos="zoom-in-down">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Petición</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($pet = $petitions->fetch_object()): ?>
      <tr>
        <th scope="row"><?= $pet->id ?></th>
        <td>
            <kbd><?= $pet->texto ?></kbd>
        </td>
        <td><a href="<?= url_project ?>peticiones/delete&id=<?=$pet->id?>" class="btn btn-danger">Borrar</a></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>