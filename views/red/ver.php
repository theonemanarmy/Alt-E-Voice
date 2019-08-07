<?php if(isset($_SESSION['delete-red']) && $_SESSION['delete-red'] == "complete"): ?>
  <h6 class="alert-green">Eliminado correctamente</h6>
  <?php elseif(isset($_SESSION['delete-red']) && $_SESSION['delete-red'] == "failed"): ?>
  <h6 class="alert-red">No se pudo borrar, Inténtelo de nuevo en unos momentos.</h6>
<?php endif; ?>

<?php Utils::deleteSession('delete-red'); ?>

<table class="table table-responsive-sm text-center" data-aos="zoom-in-up">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Red</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($net = $networks->fetch_object()) : ?>
      <tr>
        <th scope="row"><?= $net->id ?></th>
        <td><?= $net->nombre ?></td>
        <td><a href="<?= url_project ?>red/delete&id=<?=$net->id?>" class="btn btn-danger">Olvidar</a></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>