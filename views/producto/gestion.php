<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>

<h1>Gestión de productos</h1>


<a style="color: white;" class="btn btn-warning btn-lg" href="<?=base_url?>producto/crear" role="button">Crear producto</a>
<!-- <a href="<?=base_url?>producto/crear" class="button button-small">
	Crear producto
</a> -->
<br><br>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha creado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>
	
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?>
	<strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>	
	<strong class="alert_red">El producto NO se ha borrado correctamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete'); ?>
	
<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		<th>ACCIONES</th>
	</tr>
	<?php while($pro = $productos->fetch_object()): ?>
		<tr>
			<td><?=$pro->id;?></td>
			<td><?=$pro->nombre;?></td>
			<td>$<?= number_format($pro->precio);?></td>
			<td><?=$pro->stock;?></td>
			<td>
				<a style="color: white;" class="btn btn-primary" href="<?=base_url?>producto/editar&id=<?=$pro->id?>" role="button"><i class="bi bi-pencil-square"></i></a>
				<a style="color: white;"  class="btn btn-danger" href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" role="button"><i class="bi bi-trash"></i></a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>

<?php include('./views/layout/footer.php'); ?>