<?php
require('connectBD.php');

class BDMensajes{
    function getAllMensajes(){
        $conn = conectarBD();

        if(!$conn){
            echo 'Error al conectar con la base de datos.';
            return null;
        }

        $sql = "SELECT * FROM mensajes ";     
        $result = $conn->query($sql);
        $lista[] = "";
        
        if ($result->num_rows > 0) {
            while($row[] = $result->fetch_assoc()){  $lista = $row; };

        }else{
            echo '0 results';
        }

        $conn->close();

        return $lista;	
    }
}
?>