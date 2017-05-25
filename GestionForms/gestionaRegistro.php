<?php
session_start();
require('../Models/ListaUsuarios.php');

$nombreUsuario = $_POST['nombre'];
$email = $_POST['email'];
$clave = $_POST['clave'];

$listaUsuarios = new ListaUsuarios();
$nuevoUsuario = $listaUsuarios->comprobarRegistroValido($nombreUsuario, $email, $clave);

if($nuevoUsuario){
    $_SESSION['login']=true;
    $_SESSION['usuario']= $nombreUsuario;
    header("Location: ../index.php");

}else{
    echo 'el usuairo ya existe;';
}
?>