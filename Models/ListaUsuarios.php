<?php

require '/../BDAccess/BDUsuarios.php';
require_once 'Usuario.php';

class ListaUsuarios{
    /**
    * Función que encripta un string, en este caso la contraseña de acceso de un usuario
    * @param clave: contraseña de acceso del usuario.
    * @return clave encriptada mediante MD5
    **/
    function encriptarClave($clave, $nombreUsuario){
        $claveEncriptar =  '$1$'.$nombreUsuario;

        return crypt($clave, $claveEncriptar);
    }
    
    /**
    * Función encargada de encontrar un usuario por atributo (nombre, email, id...);
    * @param columna: atributo por el que se quiere encontrar al usuario. (tipo string: 'nombre', 'email'...)
    * @param nombre: valor que se utiliza para encontrar al usuario (p.ej:'paco', 'manuela@email.com'..)
    * @return usuario encontrado si existe, null en caso contrario.
    **/
    function encontrarUsuario($columna, $nombre){
        $dbUsers = new BDUsuarios();
        $usuario = null;

        if($datosUsuario = $dbUsers->comprobarUsuarioExistente($nombre)){
            
            $usuario = new Usuario($datosUsuario['id'],$datosUsuario['nombre'],
                                    $datosUsuario['email'],$datosUsuario['clave'],
                                    $datosUsuario['foto'] );
       }

       return $usuario;
    }
     

    /**
    * Función que comprueba si el valor introducido en el login corresponde con un nombre o email en la bd
    * @param nombre: nombre o email del usuario registrado
    * @param clave: contraseña del usuario de acceso a la aplicación
    * @return nombreUsuario: la función devuelve el usuario logeado en caso de éxito, null en caso contrario.
    **/
    function comprobarLoginValido($nombre, $clave){
        $valido = false;
        $dbUsers = new BDUsuarios();
        $usuario = $dbUsers->comprobarUsuarioExistente($nombre);

        if($usuario){
            if($this->encriptarClave($clave, $nombre) === $usuario->getClave()){
                $valido = true;
            }
        }
        return $valido;
    }

    /**
    * Función que comprueba si los valores introducidos en el registro son válidos (nombre e email no repetidos)
    * @param nombre: nombre del usuario registrado
    * @param email: email del usuario registrado
    * @param clave: contraseña del usuario de acceso a la aplicación
    * @return nombreUsuario: la función devuelve el usuario logeado en caso de éxito, null en caso contrario.
    **/
    function comprobarRegistroValido($nombre, $email, $clave){
        $valido = false;
        if(!$usuario = $this->encontrarUsuario($nombre) &&
           !$usuario = $this->encontrarUsuario($email)){
            $this->anadirNuevoUsuario($nombre, $email, $clave);
            $valido = true;
        }
        return $valido;
    }


    /**
    *Función que añade un nuevo usuario a la tabla de usuarios de la bd
    * @param nombre: nombre del usuario registrado
    * @param email: email del usuario registrado
    * @param clave: contraseña del usuario de acceso a la aplicación
    **/
    function anadirNuevoUsuario($nombre, $email, $clave){
         $dbUsers = new BDUsuarios();

        $pass = $this->encriptarClave($clave, $nombre);
        $dbUsers->anadirUsuario($nombre, $email, $pass);

    }
}

?>