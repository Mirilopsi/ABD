<?php
 $db = mysqli_connect('localhost', 'miriam', 'miriam');

if($this->db)
    echo 'conexión realizada con éxito.';
else
    echo 'Error al conectar con la base de datos.';

return $db;
?>