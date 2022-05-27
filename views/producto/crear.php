<?php include('./views/layout/header.php'); ?>
<?php include('./views/layout/sidebar.php'); ?>
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
        <div class="image"></div>
        <div class="frm">

<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
	<h1>Editar producto <?=$pro->nombre?></h1>
	<?php $url_action = base_url."producto/save&id=".$pro->id; ?>
	
<?php else: ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>
	
<div class="form-group">
	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>

		<label for="descripcion">Descripción</label>
		<textarea name="descripcion" class="form-control" ><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

		<label for="precio">Precio</label>
		<input type="text" name="precio" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

		<label for="stock">Stock</label>
		<input type="number" name="stock" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

		<label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?>
		<select name="categoria" class="form-control">
			<?php while ($cat = $categorias->fetch_object()): ?>
				<option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>
		
		<label for="imagen">Imagen</label>
		<?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
			<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb"/> 
		<?php endif; ?>
		<input type="file" name="imagen" />
		<button type="submit" class="btn btn-warning btn-lg" id="button-btn" value="Guardar">Crear</button>
 
	</form>
</div>

<?php include('./views/layout/footer.php'); ?>