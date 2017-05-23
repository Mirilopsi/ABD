<?php

require 'Mensaje.php';
require '/../BDAccess/BDMensajes.php';

class ListaMensajes{


    public function getMensajes(){
        
        $datosMensaje = new BDMensajes();
        $mensaje = $datosMensaje->getAllMensajes();
        $listaMensajes = new ArrayObject();
        
        for($i = 0; $i < sizeof($mensaje); $i++){
            $listaMensajes->append(
                    new mensaje($mensaje[$i]['id'], $mensaje[$i]['emisor'], 
                    $mensaje[$i]['receptor'], $mensaje[$i]['titulo'],
                    $mensaje[$i]['asunto'], $mensaje[$i]['cuerpo'],
                    $mensaje[$i]['fecha']));
        }

        return $listaMensajes;
    }
    
    
}

?>