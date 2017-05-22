<?php
require ('Users.php');

$nameUser = $_POST['user'];
$pass = $_POST['userPass'];

$users = new ListaUsuarios();

$seed =  $nameUser.'%$';

if($user = $users->findUser($nameUser)){

    if(crypt($pass, $seed) == $user['password']){
        $_SESSION['login']=true;
        $_SESSION['user']=$user;
        echo 'ok!!';
    }else{ 
        echo 'usuario incorrecto...'.crypt($pass, $seed).'+'. $user['password'];
    }
}else{
    echo 'El usuario '.$nameUser.' no existe.';
}

?>