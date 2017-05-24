<!DOCTYPE html>
<html>

<head>
    <link href="/practicaABD/Styles/nav.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Barrio|Open+Sans+Condensed:300" rel="stylesheet">    
    <link href="/practicaABD/Styles/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/logo/favicon.png">

</head>

<body>
    
    <nav id="menu">
        <div class="navBar">
            <li>
                <a href= '/practicaABD/index.php'><img src="/practicaABD/Assets/logo/logo2.png"></a>
            </li>
            <ul class="botonesMenu">
                <li class="opcion parent">Mensajes
                    <ul>
                        <li><a href="/practicaABD/Views/MensajesGlobales.php">Globales</a></li>
                        <li>Personales</li>
                    </ul>
                </li>
                <li class="opcion">Mi Perfil</li>

                <li class="opcion">
                    <?php 
                        if(isset($_SESSION['login'])){ 
                            echo '<a href="/practicaABD/GestionForms/gestionaLogout.php">logout</a> ';
                        }else{ 
                            echo '<a href="/practicaABD/Views/login.html">login</a> ';
                        } 
                    ?>                        
                </li>
            </ul>

        </div>
    </nav>

</body>