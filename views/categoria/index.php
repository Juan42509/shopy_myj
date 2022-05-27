<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>

<h1>Gestionar categorias</h1>

<a name="" id="" class="btn btn-warning btn-lg" href="<?= base_url ?>categoria/crear" role="button" style="color: white;">Crear categoria</a>
<br><br>
<table>
  <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>Acciones</th>
  </tr>
  <?php while ($category = $categorias->fetch_object()) : ?>
    <tr>
      <td><?= $cat->id; ?></td>
      <td><?= $cat->nombre; ?></td>
      <td>
        <a name="" id="btn-editarCategoria" class="btn btn-primary" href="<?= base_url ?>categoria/editar&id=<?= $cat->id;?>"><i class="bi bi-pencil-square" style="color: white;"></i></a>
        <a name="" id="" class="btn btn-warning btn-lg" href="<?= base_url ?>categoria/delete&id=<?= $cat->id;?>"><i class="bi bi-trash" style="color: white;"></i></a>

        
      </td>
    </tr>
  <?php endwhile; ?>
</table>

<?php include('./views/layout/footer.php'); ?>

