<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Red</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($net = $networks->fetch_object()) : ?>
      <tr>
        <th scope="row"><?= $net->id ?></th>
        <td><?= $net->nombre ?></td>
        <td><a href="<?= url_project ?>red/delete" class="btn btn-danger">Olvidar</a></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>