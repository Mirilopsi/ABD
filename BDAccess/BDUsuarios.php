<?php
require_once('../config/config.php');
class BDUsuarios{


   /**
    * Se encarga de obtener un usuario mediante su id de la base de datos
    * @param $id: es el id de usuario que queremos obtener
    * @return $user: datos del usuario si se ha encontrado, cadena vacía en caso contrario
    **/
    function getUsuarioPorId($id){
        
        $sql = "SELECT * FROM usuarios WHERE id = $id";     
        $resultado = $conn->query($sql);
        $usuario = "";
        if ($resultado->num_rows > 0) {
            
            while($fila = $resultado->fetch_assoc()){
                $usuario = $fila;
            };

        }else{
            echo '0';
        }

        return $usuario;	
    }
    
    
    /**
    * Se encarga de obtener un usuario mediante su nombre o email de la base de datos
    * @param $nombre: es el nombre de usuario que queremos obtener
    * @return $user: datos del usuario si se ha encontrado, cadena vacía en caso contrario
    **/
    function getUsuarioPorEmailNombre($nombre){
         $conn = mysqli_connect('localhost','miriam', 'miriam', 'abd');
        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'";     
        $resultado = $conn->query($sql);
        $usuario = "";
        if ($resultado->num_rows > 0) {
            
            while($fila = $resultado->fetch_assoc()){
                $usuario = $fila;
            };

        }else{
            echo 'no encontrado';
        }

        return $usuario;	
    }

    /**
    * Se encarga de obtener una lista de usuarios 
    * @return $users: lista de usuarios si hay usuarios en la bd, cadena vacía en caso contrario
    **/
    function getAllUsuarios(){
        
        $sql = "SELECT * FROM usuarios ";     
        $result = $this->conn->query($sql);
        $lista[] = "";
        
        if ($result->num_rows > 0) {
            
            while($row[] = $result->fetch_assoc()){
                $lista = $row;
            };

        }else{
            echo '0 results';
        }

        return $lista;	
    }


    
}

?>