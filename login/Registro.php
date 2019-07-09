<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require_once 'C:\wamp64\www\Proyecto_Hiringroom\codigos\cabecera.php'?>
    
    <h1>Registrarse</h1>

    <span><strong><a href="Login.php">Loguearse</a></strong></span><br><br>

    <?php 
        if (!empty($_GET['error'])){
        $error = $_GET['error'];
        if ($error == 'FALTAN VALORES POR AGREGAR'){
            echo '<strong style="color:red">Introduce todos los valores en el formulario</strong>';
        }
        if ($error == 'nombre'){
            echo '<strong style="color:red">Introduce bien el nombre en el formulario</strong>';
        }
        if ($error == 'apellido'){
            echo '<strong style="color:red">Introduce bien el apellido en el formulario</strong>';
        }
        if ($error == 'username'){
            echo '<strong style="color:red">Introduce bien el username en el formulario</strong>';
        }
        if ($error == 'email'){
            echo '<strong style="color:red">Introduce bien el email en el formulario</strong>';
        }
        if ($error == 'password'){
            echo '<strong style="color:red">Introduce bien la contraseña en el formulario</strong>';
        }
        if ($error == 'OK'){
            echo '<strong style="color:green">OK</strong>';
        }
        }
    ?>
    
    <form action="Validacion_Formulario.php" method="POST">
    <p>
        <input type="text" name="nombre" placeholder="Nombre">
    </p>
    <p>
        <input type="text" name="apellido" placeholder="Apellido" >
    </p>
    <p>
        <input type="text" name="username" placeholder="Username" >
    </p>
    <p>
        <input type="email" name="email" placeholder="E-mail" >
    </p>
    <p>
        <input type="password" name="password" placeholder="Contraseña">
    </p>
 
        <input type="submit" value="Enviar">
    </form>
</body>

</html>