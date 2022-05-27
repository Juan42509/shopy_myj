<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>

<?php if (isset($_SESSION['identity'])): ?>
	<h1>Realizar el pedido</h1>
	<p>
		<a href="<?= base_url ?>carrito/index">Ver los productos y el precio del pedido</a>
	</p>
	<br/>

<!DOCTYPE html>
<html class="claseimag">
<head>
<link rel="stylesheet" href="<?=base_url?>assets/css/formularios.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=base_url?>assets/css/formularios.css">
</head>
<body>
<div class="container" id="registration-form">
        <div class="imager"></div>
        <div class="frm">
	
	<h3>Dirección para el envio:</h3>
	<div class="form-group">
	<form action="<?=base_url.'pedido/add'?>" method="POST">
		<label for="provincia">Barrio:</label>
		<input type="text" class="form-control" placeholder="Ingresar el barrio"  name="provincia" required />
		
		<label for="ciudad">Ciudad:</label>
		<input type="text" name="localidad" class="form-control" placeholder="Ingresar la localidad" required />
		
		<label for="direccion">Dirección:</label>
		<input type="text" name="direccion" class="form-control" placeholder="Ingresar dirección del pedido"  required />
		
		<button type="submit" class="btn btn-warning btn-lg" id="button-btn"  value="Confirmar pedido">Confirmar pedido</button>

		
	</form>
		
<?php else: ?>
	<h1>Necesitas estar identificado</h1>
	<p>Necesitas estar logueado en la web para poder realizar tu pedido.</p>
<?php endif; ?>

<?php include('./views/layout/footer.php'); ?>
