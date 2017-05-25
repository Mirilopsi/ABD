<?php
session_start();

require('../Models/ListaMensajes.php');

$emisor = $_SESSION['idUsuario'];
$titulo = $_POST['titulo'];
$cuerpo = $_POST['cuerpo'];


$listaMensajes = new ListaMensajes();

$listaMensajes->nuevoMensajeGlobal($emisor, $titulo, $cuerpo );

header("Location: ../Views/MensajesGlobales.php");

?>