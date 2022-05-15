<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>

<h1>Editar Categoria</h1>

<div class="form-group">
    <form action="<?= base_url ?>categoria/saveEdit" method="post">
        <label>Categoria</label>
        <input type="text" name="nombre_cat" value="<?= $categoria->nombre ?>">
        <input type="hidden" name="id_cat" value="<?= $categoria->id ?>">
        <input type="submit" value="Guardar">
    <form >

</div>

<?php include('./views/layout/footer.php'); ?>