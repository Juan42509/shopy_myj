<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>

<h1>Carrito de la compra</h1>

<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
<table>
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Unidades</th>
		<th>Eliminar</th>
	</tr>
	<?php 
		foreach($carrito as $indice => $elemento): 
		$producto = $elemento['producto'];
	?>
	
	<tr>
		<td>
			<?php if ($producto->imagen != null): ?>
				<img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
			<?php else: ?>
				<img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
			<?php endif; ?>
		</td>
		<td>
			<a href="<?= base_url ?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
		</td>
		<td>
			<?= number_format($producto->precio) ?>
		</td>
		<td>
			<?=$elemento['unidades']?>
			<div class="updown-unidades">
				<a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button">+</a>
				<a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button">-</a>
			</div>
		</td>
		<td>
			<a style="color: white;" class="btn btn-warning" href="<?=base_url?>carrito/delete&index=<?=$indice?>" role="button"><i class="bi bi-trash"></i></a>
		<!-- <a href="" class="button button-carrito button-red">Quitar producto</a> -->
		</td>
	</tr>
	
	<?php endforeach; ?>
</table>
<br/>
<div class="delete-carrito">
	<!-- <a href="<?=base_url?>carrito/delete_all" class="button button-delete button-red">/a> -->
	<a style="color: white;" class="btn btn-danger" href="<?=base_url?>carrito/delete_all" role="button">Vaciar carrito</a>
</div>
<div class="total-carrito">
	<?php $stats = Utils::statsCarrito(); ?>
	<h3>Precio total: $ <?= number_format($stats['total']) ?> </h3>
	<!-- <a href="<?=base_url?>pedido/hacer" class="button button-pedido"></a> -->
	<a style="color: white;" class="btn btn-primary" href="<?=base_url?>pedido/hacer"" role="button">Hacer pedido</a>
</div>

<?php else: ?>
	<p>El carrito está vacio, añade algun producto</p>
<?php endif; ?>

<?php include('./views/layout/footer.php'); ?>