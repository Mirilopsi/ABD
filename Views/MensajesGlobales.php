<!DOCTYPE html>
<html>

<head>
    <title>Mensajes Globales</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="32x32" href="../Assets/logo/favicon.png">
    <link href="../Styles/cabeceras.css" rel="stylesheet">
    <link href="../Styles/mensajeria.css" rel="stylesheet">
    <link href="../Styles/form.css" rel="stylesheet">

</head>

<body>

<nav>
    <?php 
        include('Common/nav.php'); 
    ?>
</nav>

<div class="cabecera">
    <h2>Mensajes Globales</h2>
</div>

<main id = "lista-mensajes">
    
    <?php 
        require_once('VistaMensajes.php');
    
        $mensajes = new VistaMensajes();
        $mensajes->mostrarMensajesGlobales();
    ?>
    
    <div id="nuevo-mensaje" class = "formulario">
        <form method="post" action="../GestionForms/gestionaNuevoMensaje.php">
            <label for="titulo">titulo</label>
            <input type="text" name ="titulo" required>
            <label for="cuerpo">mensaje</label>
            <textarea name="cuerpo" cols="30" rows="10" required></textarea>
            <div class="botones-form">
                <input type ="submit" name="submit" >
                <button name="cancelar"  onclick="esconderFormNuevoMensaje()">cancelar</button>
            </div>
        </form>
    </div>

    <button id="boton-nuevo" onclick="mostrarFormNuevoMensaje()"><label><img src="../Assets/img/ic_message_white_24px.svg"/>Nuevo</label></button>

</main>

<footer>
    <?php include('Common/footer.html');?>
</footer>

<script src="../Scripts/showBox.js"></script>
</body>
