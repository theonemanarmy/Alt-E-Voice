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
        <td><a href="<?= url_project ?>peticiones/delete" class="btn btn-danger">Borrar</a></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>