
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once 'C:\wamp64\www\Proyecto_Hiringroom\codigos\cabecera.php' ?>
    
    <h1>Registrarse</h1>

    <?php if(!empty($message)):?>
        <p><?= $message ?></p>
    <?php endif;?>

    <span>o<a href="Login.php">Loguearse</a></span>

    <form action="mostrar.php" method="POST">
    <p>
    <input type="text" name="email" placeholder="E-mail">
    </p>
    <p>
    <input type="text" name="pass" placeholder="Contraseña">
    </p>
    <p>
    <input type="text" name="confirmar-password" placeholder="Confirmar Contraseña">
    </p>
    <input type="submit" value="Enviar">
    </form>
</body>

</html>