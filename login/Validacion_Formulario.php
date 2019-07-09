<?php
	//require_once 'C:\wamp64\www\Proyecto_Hiringroom\login\conexiones\BaseDatosLogin.php';
    
     $error = "";

    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

    	$nombre = $_POST['nombre'];
    	$apellido = $_POST['apellido'];
    	$username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $error = "OK";
        //Validar el nombre
        // la funcion preg_match valida las expresiones regulares´, en este caso si en el nombre se estan ingresando numeros o no

        if(!is_string($nombre) || preg_match("/[0-9 ]/", $nombre)){ 
        	$error = 'nombre';
        }
        if(!is_string($apellido) || preg_match("/[0-9 ]/", $apellido)){ 
        	$error = 'apellido';
        }
        if(empty($username) || !is_string($username) || !preg_match("/[a-zA-Z0-9_]/", $username)){ 
        	$error = 'username';
        }
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        	$error = 'email';
        }
        if(empty($password) || preg_match("/[-.;: ]/", $password)){ 
        	$error = 'password';
        }
        
        /*
        Controlar errores...
         
        var_dump($_POST);
        var_dump($error);
        die();
        */
    } else{

            $error = "FALTAN VALORES POR AGREGAR";
            echo $error;

     }

     //if($error != "OK"){
     	header("location:Registro.php?error=$error");
     
     
?>