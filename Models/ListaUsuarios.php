<?php

require '/../BDAccess/BDUsuarios.php';
require_once 'Usuario.php';

class ListaUsuarios{

    public function encontrarUsuarioPorId($id){
       $dbUsers = new BDUsuarios();
       $datosUsuario = $dbUsers->getUsuarioPorId($id);
       
       $usuario = new Usuario($datosUsuario['id'],$datosUsuario['nombre'],
                            $datosUsuario['email'],$datosUsuario['clave'],
                            $datosUsuario['foto'] );

       return $usuario;
    }
    
    
}

?>