<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Práctica ABD</title>
    <link rel="stylesheet" type="text/css" href="/Styles/nav.css">
    <link rel="stylesheet" type="text/css" href="/Styles/main.css">
    <link rel="stylesheet" type="text/css" href="/Styles/mensajes.css">

    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Poiret+One" rel="stylesheet">
    <?php include 'Models/Users.php';?>
    
</head>

<body>
    <?php 
        // if(!isset($_SESSION['login'])){
        //    include '/views/form.php';
        // }
    ?>
    <nav>
        
        <h1>MUSIC NOW!</h1>
        <img class="perfil" src="Assets/img/perfil.png">
        <ul id="botones-cabecera">
            <li class="grupal"><a href="#">Mensajes</a></li>
            <li class="logout"><a href="#">Log out</a></li>
        </ul>
    </nav>
    <main>
        <header>
            <h2>MENSAJES GLOBALES</h1>
		</header>
		<section id="mensajes">			
			<?php
                $user = new Users();
            ?>
		</section>
		<form >
			<textarea class = "introduce-mensaje"></textarea> 
			<input type="submit" name="envia-mensaje" class = "envia-mensaje">
		</form>
	
	</main>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</body>
</html>
