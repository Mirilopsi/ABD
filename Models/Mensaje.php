<?php

class Mensaje{

    private $id;
    private $emisor;
    private $receptor;
    private $titulo;
    private $asunto;
    private $cuerpo;
    private $fecha;
    private $visto;

    function Mensaje($id, $emisor, $receptor,$titulo, $asunto, $cuerpo, $fecha, $visto){
        $this->id = $id;
        $this->emisor = $emisor;
        $this->receptor = $receptor;
        $this->titulo = $titulo;
        $this->asunto = $asunto;
        $this->cuerpo = $cuerpo;
        $this->fecha = $fecha;
        $this->visto = $visto;
    }

    public function getMensajeId(){
        return $this->id;
    }
    public function getEmisor(){
        return $this->emisor;
    }
    public function getReceptor(){
        return $this->receptor;
    }
    public function getTitulo(){
        return $this->titulo;
    } 
    public function getAsunto(){
        return $this->asunto;
    } 
    public function getCuerpo(){
        return $this->cuerpo;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getMensajeVisto(){
        return $this->visto;
    }

}

?>