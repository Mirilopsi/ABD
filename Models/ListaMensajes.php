<?php

require 'Mensaje.php';
require '/../BDAccess/BDMensajes.php';

class ListaMensajes{


    function getMensajes(){
        
        $datosMensaje = new BDMensajes();
        $mensaje = $datosMensaje->getAllMensajes();
        $listaMensajes = null;
        if($mensaje){
            $listaMensajes = new ArrayObject();
            
            for($i = 0; $i < sizeof($mensaje); $i++){
                $listaMensajes->append(
                        new mensaje($mensaje[$i]['id'], $mensaje[$i]['emisor'], 
                        $mensaje[$i]['receptor'], $mensaje[$i]['titulo'],
                        $mensaje[$i]['asunto'], $mensaje[$i]['cuerpo'],
                        $mensaje[$i]['fecha']));
            }
        }

        return $listaMensajes;
    }
    
    function nuevoMensaje($emisor, $receptor,$titulo, $asunto, $cuerpo){
        $dbMensajes = new BDMensajes();
        $dbMensajes->nuevoMensaje($emisor, $titulo, $asunto, $cuerpo);
    }
    
}

?>