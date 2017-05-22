<?php

class BDMensajes{
    private $conn;

    function getAllMensajes(){
         $this->conn = mysqli_connect('localhost','miriam', 'miriam', 'abd');

        // if(!$this->conn)
        //     echo 'Error al conectar con la base de datos.';

        $sql = "SELECT * FROM mensajes ";     
        $result = $this->conn->query($sql);
        $lista[] = "";
        
        if ($result->num_rows > 0) {
            while($row[] = $result->fetch_assoc()){  $lista = $row; };

        }else{
            echo '0 results';
        }
        return $lista;	
    }
}
?>