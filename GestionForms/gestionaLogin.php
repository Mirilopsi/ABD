<?php
session_start();

require('../Models/ListaUsuarios.php');
//El usuario puede identificarse tanto por el nombre de usuario como por el email
$nombreUsuario = $_POST['usuario'];
$claveUsuario = $_POST['clave'];

$listaUsuarios = new ListaUsuarios();

// $usuario = $listaUsuarios->encontrarUsuarioPorEmailONombre($nombreUsuario);
$valido = $listaUsuarios->comprobarLoginValido($nombreUsuario, $claveUsuario);

if($valido){
        $_SESSION['login']=true;
        $_SESSION['usuario']=$valido->getNombre();
        $_SESSION['idUsuario']=$valido->getId();
        header("Location: ../index.php");
        

}else{
    echo 'El usuario '.$nombreUsuario.' no existe.';
}


?>