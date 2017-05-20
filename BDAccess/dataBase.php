<?php

class DataBase{
    private $conn;

    function __construct(){
        $this->conn = mysqli_connect('localhost','miriam', 'miriam', 'abd');

        if(!$this->conn)
            echo 'Error al conectar con la base de datos.';

    }
    
    /**
    * Se encarga de obtener un usuario mediante su id de la base de datos
    * @param $id: es el id de usuario que queremos obtener
    * @return $user: datos del usuario si se ha encontrado, cadena vacía en caso contrario
    **/
    function getUser($name){
        
        $sql = "SELECT * FROM users WHERE name = '$name' OR mail = '$name'";     
        $result = $this->conn->query($sql);
        $user = "";
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()){
                $user = $row;
            };

        }else{
            echo '0';
        }

        return $user;	
    }

    /**
    * Se encarga de obtener una lista de usuarios 
    * @return $users: lista de usuarios si hay usuarios en la bd, cadena vacía en caso contrario
    **/
    function getUsers(){
        
        $sql = "SELECT * FROM users ";     
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

    function __destruct(){
        $this->conn->close();        
    }

    
}

?>