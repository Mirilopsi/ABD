<?php


class VistaMensajes{
    private $listaMensajes;
    private $listaUsuarios;

    function __construct(){
        require_once '../Models/ListaMensajes.php';
        require_once '../Models/ListaUsuarios.php';
        $this->ListaMensajes = new ListaMensajes();
        $this->ListaUsuarios = new ListaUsuarios();

    }

    function getDatosUsuarioEmisor($id){

        return $this->ListaUsuarios->encontrarUsuarioPorId($id);
    }

    function mostrarMensaje($mensaje){;

        $usuario = $this->getDatosUsuarioEmisor($mensaje->getEmisor());
        echo '<article class = "mensaje" >
                <div class="cabecera-mensaje" style="background-image: url(../Assets/img/'.$usuario->getFoto().');">
                    <h2>'.$usuario->getNombre().'</h2>
                </div>
                <div class = "cuerpo-mensaje">
                
                    <h3>'.$mensaje->getTitulo().'</h3>
                    <h4>'.$mensaje->getAsunto().'</h4>
                    <p>'.$mensaje->getCuerpo().'</p>
                    
                </div>
                </article>';                
    }

    function mostrarTodosMensajes(){
        $mensajes = $this->ListaMensajes->getMensajes();
        if($mensajes){
            $iterator = $mensajes->getIterator();

            while($iterator->valid()){
                $this->mostrarMensaje($iterator->current());
                $iterator->next();
            }
        }
        else{
            echo '<p>Ahora mismo no hay ningún mensaje. Sé el primero en decir algo!</p>';
        }

    }


}
?>