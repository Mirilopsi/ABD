<?php
require_once('connectBD.php');
class BDUsuarios{


   /**
    * Se encarga de obtener un usuario mediante su id de la base de datos
    * @param $id: es el id de usuario que queremos obtener
    * @return $user: datos del usuario si se ha encontrado, cadena vacía en caso contrario
    **/
    function getUsuarioPorId($id){
        $conn = conectarBD();


        $sql = "SELECT * FROM usuarios WHERE id = $id";     
        $resultado = $conn->query($sql) or die ($conn->error);
        $usuario = null;
        if ($resultado->num_rows > 0) {
            
            while($fila = $resultado->fetch_assoc()){
                $usuario = $fila;
            };

        }
        $conn->close();

        return $usuario;	
    }
    
    


        /**
    * Se encarga de obtener un usuario mediante su nombre de la base de datos
    * @param $nombre: es el nombre de usuario que queremos obtener
    * @return $user: datos del usuario si se ha encontrado, cadena vacía en caso contrario
    **/
    function comprobarUsuarioExistente( $nombre){
        $conn = conectarBD();

        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' OR email = '$nombre'";     
        $resultado = $conn->query($sql) or die ($conn->error);
        $usuario = false;
        if ($resultado->num_rows > 0) {
            
            while($fila = $resultado->fetch_assoc()){
                $usuario = $fila;
            };

        }
        $conn->close();

        return $usuario;	
    }    
    
    
    /**
    * Se encarga de obtener una lista de usuarios 
    * @return $users: lista de usuarios si hay usuarios en la bd, cadena vacía en caso contrario
    **/
    function getAllUsuarios(){
        $conn = conectarBD();
        
        $sql = "SELECT * FROM usuarios ";     
        $result = $conn->query($sql) or die ($conn->error);
        $lista[] = "";
        
        if ($result->num_rows > 0) {
            
            while($row[] = $result->fetch_assoc()){
                $lista = $row;
            };

        }else{
        }
        $conn->close();

        return $lista;	
    }


    /**
    * Se encarga de añadir un usuario a la bd
    * @param $nombre: es el nombre de usuario que vamos a registrar
    * @param $email: es el email de usuario que vamos a registrar
    * @param $clave: clave del usuario que se va a registrar 
    */
     function anadirUsuario($nombre, $email, $clave){
        $conn = conectarBD();

        $sql = "INSERT INTO usuarios (id, nombre, email, clave, foto)
                VALUES (NULL,'$nombre','$email', '$clave', NULL ) ";     
        $result = $conn->query($sql) or die ($conn->error);

        $conn->close();
     }
    
}

?>