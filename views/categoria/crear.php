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
            <h1>Creación de categorías</h1>
<form action="<?=base_url?>categoria/save" method="POST">
<div class="form-group">
<label for="nombre">Nombre Categoría:</label>
    <input type="text" name="nombre" placeholder="Ingresar nombre de categoría" class="form-control" id="username" required/>
 
    
    <button type="submit" class="btn btn-warning btn-lg" id="button-btn" value="guardar">Crear</button>
    
</form>
<?php include('./views/layout/footer.php'); ?>

