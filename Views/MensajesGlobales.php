<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/logo/favicon.png">
    <link href="../Styles/cabeceras.css" rel="stylesheet">
    <link href="../Styles/mensajeria.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/logo/favicon.png">

</head>

<body>

<nav>
    <?php 
        // include('Common/nav.php'); 
    ?>
</nav>

<div class="cabecera">
    <h2>Mensajes Globales</h2>
</div>

<main id = "lista-mensajes">
    
    <?php 
        require_once('VistaMensajes.php');
    
        $mensajes = new VistaMensajes();
        $mensajes->mostrarTodosMensajes();
    ?>

</main>

<footer>
    <?php include('Common/footer.html');?>
</footer>

</body>


<!--<article class = "mensaje" >
    <div class="cabecera-mensaje">
        <a href="perfil-usuario"><div class = "perfil-usuario" ></div></a>
    </div>
    
    <div class = "cuerpo-mensaje">
        <h3>Título del mensaje</h3>
        <h4>Asunto del mensaje</h4>

        <p>Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit. In eaque nisi officia, fuga minus! Rerum rem officiis eos vitae maxime, illo, eaque ipsum? Sint, optio officiis. sit amet, consectetur adipisicing elit. Animi non accusantium enim, vel excepturi? In?</p>
    </div>
</article>-->
