<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>

<h1>Algunos de nuestros productos</h1>

<?php while($product = $productos->fetch_object()): ?>
	<div class="product">
		<a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
			<?php if($product->imagen != null): ?>
				<img src="<?=base_url?>uploads/images/<?=$product->imagen?>" />
			<?php else: ?>
				<img src="<?=base_url?>assets/img/camiseta.png" />
			<?php endif; ?>
			<h2><?=$product->nombre?></h2>
		</a>
		<p><?= number_format($product->precio); ?></p>
		<!-- <a name="" id="" class="btn btn-primary" href="<?=base_url?>carrito/add&id=<?=$product->id?>" role="button">Comprar</a> -->
		<!-- <a name="" id="comprar" class="btn btn-primary" href="#" role="button">Comprar</a> -->
		<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
	</div>
<?php endwhile; ?>

<?php include('./views/layout/footer.php'); ?>

<script>
	$( "#comprar" ).click(function() {
		var id = 123;
		$.ajax({
			url: "<?= base_url ?>carrito/prueba",
  			type: "GET",
			dataType: "json",
			data:{
				id : id
			},
			success: function(data){
				console.log(data);
			}
		})
	});
</script>