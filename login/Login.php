<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once 'C:\wamp64\www\Proyecto_Hiringroom\codigos\cabecera.php' ?>
    <h1>LOGIN</h1>
    <span><strong><a href="Registro.php">Registrarse</a></strong></span><br><br>
    <form action="Login.php" method="POST">
    <p>
    <input type="email" name="email" placeholder="E-mail">
    </p>
    <p>
    <input type="password" name="contraseña" placeholder="Contraseña">
    </p>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php 
        function busquedaXEstado($vacantes){
            foreach ($vacantes as $estado){
                echo $estado['estado']."<br>";
            }
        }
?>