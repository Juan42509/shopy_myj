<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda M&J</title>
        <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->
            <header id="header">
                <div id="logo">
                    <img src="<?=base_url?>assets/img/logo4.png" alt="Camiseta Logo" />
                        <a href="<?=base_url?>">
                        TIENDA DE ROPA M&J
                    </a>
                </div>
            </header>

            <!-- MENU -->
            <?php $categorias = Utils::showCategorias(); ?>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="<?=base_url?>">Inicio</a>  
                    </li>
                    <?php if(isset($_SESSION['admin'])): ?>
                <li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
                
                <li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
                <li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
            <?php endif; ?>
                    <?php while($cat = $categorias->fetch_object()): ?>
                        <li>
                            <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                        </li>
                    <?php endwhile; ?>
                    <ul>
                    <li><a href="<?=base_url?>carrito/index"><img src="<?=base_url?>assets/img/CaritoCompra.png" id = "carrito"/></a></li>
                    <?php if(isset($_SESSION['identity'])): ?>
                <li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
            <?php else: ?> 
                <li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
            <?php endif; ?>
                    <li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
                </ul>
                
            </nav>
            <div id="content">
