<?php

require '/../BDAccess/BDUsuarios.php';
require_once 'Usuario.php';

class ListaUsuarios{

    function encontrarUsuarioPorId($id){
       $dbUsers = new BDUsuarios();
       $datosUsuario = $dbUsers->getUsuarioPorId($id);
       
       $usuario = new Usuario($datosUsuario['id'],$datosUsuario['nombre'],
                            $datosUsuario['email'],$datosUsuario['clave'],
                            $datosUsuario['foto'] );

       return $usuario;
    }
    
    function encontrarUsuarioPorEmailNombre($nombre){
        $dbUsers = new BDUsuarios();
       $datosUsuario = $dbUsers->getUsuarioPorEmailNombre($nombre);
       $usuario =null;
       if($datosUsuario){
            $usuario = new Usuario($datosUsuario['id'],$datosUsuario['nombre'],
                                    $datosUsuario['email'],$datosUsuario['clave'],
                                    $datosUsuario['foto'] );
       }
       return $usuario;
    }
}

?>