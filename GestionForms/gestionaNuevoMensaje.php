<?php
session_start();

require('../Models/ListaMensajes.php');

$emisor = $_SESSION['usuario'];
$receptor = null;
$tipoMensaje = $_POST['tipoMensaje'];
$titulo = $_POST['titulo'];
$asunto = $_POST['asunto'];
$cuerpo = $_POST['cuerpo'];

if($tipoMensaje !== 'global'){
    $receptor = $_POST['receptor'];
}

$listaMensajes = new ListaMensajes();

$listaMensajes->nuevoMensaje($emisor,$receptor, $titulo, $asunto, $cuerpo );

header("Location: ../index.php");

?>