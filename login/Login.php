<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once 'C:\xampp\htdocs\Proyecto_Hiringroom\codigos\cabecera.php' ?>
    <h1>LOGIN</h1>
    <span>o<a href="Registro.php">Registrarse</a></span>
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