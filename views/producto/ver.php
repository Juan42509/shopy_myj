<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>

<?php if (isset($product)): ?>
	<h1><?= $product->nombre ?></h1>
	<div id="detail-product">
		<div class="image">
			<?php if ($product->imagen != null): ?>
				<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
			<?php else: ?>
				<img src="<?= base_url ?>assets/img/camiseta.png" />
			<?php endif; ?>
		</div>
		<div class="data">
			<p class="description"><?= $product->descripcion ?></p>
			<p class="price">$ <?= number_format($product->precio) ?></p>
			<a style="color: white;" class="btn btn-success" href="<?=base_url?>carrito/add&id=<?=$product->id?>" role="button">Comprar</a>
			<!-- <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a> -->
		</div>
	</div>
<?php else: ?>
	<h1>El producto no existe</h1>
<?php endif; ?>

<?php include('./views/layout/footer.php'); ?>
