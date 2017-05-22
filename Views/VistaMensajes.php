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
                <div class="cabecera-mensaje">
                <a href="perfil-usuario">
                    <img src="../Assets/img/'.$usuario->getFoto().'">
                </a>
                <div class = "cuerpo-mensaje">
                    <h3>'.$mensaje->getTitulo().'h3>
                    <h4>'.$mensaje->getAsunto().'</h4>
                    <p>'.$mensaje->getCuerpo().'</p>
                    
                </div>
                </article>';                
    }

    function mostrarTodosMensajes(){
        $mensajes = $this->ListaMensajes->getMensajes();

        $iterator = $mensajes->getIterator();

        while($iterator->valid()){
            $this->mostrarMensaje($iterator->current());
            $iterator->next();
        }

    }
}
?>