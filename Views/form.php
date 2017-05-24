<!DOCTYPE html>
<html>

<head>
    <title></title>
   
    <link rel="stylesheet" type="text/css" href="styles/form.css">

</head>
<body>
<div class="contenedorForm" id="loginForm" >
    <p>Tienes que hacer login para ver el contenido</p>
    <form action="Models/Login.php" method="post">
        <div class = "perm" id="campoUser">
            <label for="user"> User </label>
            <input type="text" name="user" class="user"  required>
        </div>
        <div class = "perm" id="campoPass">
            <label for="userPass"> Contraseña </label>
            <input type="text" name="userPass"  class="userPass"required>
        </div>
        <button type="submit" >Login </button>
    </form>


</div>

	<script src="Scripts/validateForm.js"></script>
</body>

</html>