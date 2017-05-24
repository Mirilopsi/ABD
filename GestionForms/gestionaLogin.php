<?php
session_start();

require('../Models/ListaUsuarios.php');
//El usuario puede identificarse tanto por el nombre de usuario como por el email
$nombreUsuario = $_POST['usuario'];
$claveUsuario = $_POST['clave'];

$listaUsuarios = new ListaUsuarios();

$usuario = $listaUsuarios->encontrarUsuarioPorEmailNombre($nombreUsuario);

if($usuario){

    // Encriptamos la contraseña introducida por el usuario para poder
    // compararla con la contraseña cifrada de la bd

    $claveEncriptar =  $nombreUsuario.'%$';

    if(crypt($claveUsuario, $claveEncriptar) == $usuario->getClave()){
        $_SESSION['login']=true;
        $_SESSION['usuario']=$usuario;
        header("Location: ../index.php");
        
    }else{ 
        echo 'contraseña incorrecta...'.crypt($claveUsuario, $claveEncriptar);
    }
}else{
    echo 'El usuario '.$nombreUsuario.' no existe.';
}


?>