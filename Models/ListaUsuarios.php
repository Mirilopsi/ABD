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
    
    function encontrarUsuarioPorEmail($email){
        $dbUsers = new BDUsuarios();
        $usuario = null;

        if($datosUsuario = $dbUsers->getUsuarioPorAtributo($email, 'email')){
            
            $usuario = new Usuario($datosUsuario['id'],$datosUsuario['nombre'],
                                    $datosUsuario['email'],$datosUsuario['clave'],
                                    $datosUsuario['foto'] );
       }

       return $usuario;
    }

    function encontrarUsuarioPorNombre($nombre){
        $dbUsers = new BDUsuarios();
        $usuario = null;

        if($datosUsuario = $dbUsers->getUsuarioPorAtributo($nombre, 'nombre')){
            
            $usuario = new Usuario($datosUsuario['id'],$datosUsuario['nombre'],
                                    $datosUsuario['email'],$datosUsuario['clave'],
                                    $datosUsuario['foto'] );
       }

       return $usuario;
    }
     
    function anadirNuevoUsuario($nombre, $email, $clave){
         $dbUsers = new BDUsuarios();
         $usuarioCreado = null;

         if(!$this->encontrarUsuarioPorNombre($nombre) && 
            !$this->encontrarUsuarioPorEmail($email)){
                $dbUsers->anadirUsuario($nombre, $email, $clave);

                $usuarioCreado = $this->encontrarUsuarioPorNombre($nombre);             
         }

         return $usuarioCreado;
    }
}

?>