<!DOCTYPE html>
<html>

<head>
    <title>Music Now!</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Barrio|Open+Sans+Condensed:300" rel="stylesheet">
    <link href="Styles/main.css" rel="stylesheet">
    <link href="Styles/principal.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/logo/favicon.png">
    <?php 
        session_start();
        include_once "config/config.php";
    ?>
    
</head>

<body>
<?php include('Views/Common/nav.php'); ?>
    <header id="home">
        <div class="cabecera">
            <img src="Assets/logo/logoNubes.gif" alt="logo music now!">
            <h1>MUSIC NOW!</h1>
        </div>
    </header>

    <main>
        <h2>¿Qué es?</h2>
        <article>
            <h3>¿Eres un apasionado de la música pero tus amigos no?</h3>
            <h3>¿Estas cansado de estar en un páramo musical?</h3>
            <h3>¿Quieres conocer nuevos grupos o fardar de lo fan que eres con otros melómanos?</h3>
            <p>¡¡¡Pues <cite>MUSIC NOW</cite> es tu página!!!, así que ve marcándola como favorita porque te va a enganchar. Disfruta repartiendo sabiduría con gente que tengan los mismos gustos que tú, conoce gente y pasa las horas muertas escuchando y
                disfrutando de esta gran afición que es la música.</p>
            <p>Además esta página es la práctica obligatoria final de la asignatura Ampliación de Bases de Datos. Con esta página ponemos en práctica lo aprendido en clase además de estudiar para el examen final de la misma.</p>

        </article>
        <h2>¿Qué me puede ofrecer?</h2>
        <article class="contenido">
            <h3>Mensajes globales</h3>
            <p>Con MUSIC NOW vas a poder conocer a gente con la que compartir la pasión por la música. Tiene la opción de mandar mensajes globales, que podrá escribir y leer todo aquel que se registre en la aplicación.</p>

        </article>

    </main>
    <?php include('Views/Common/footer.html');?>
</body>

</html>