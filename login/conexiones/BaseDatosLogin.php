<?php
function conectar(){
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "sistema_vacantes";
        $conexion = mysql_connect($server,$username,$password) or die("Error al conectar con la base de datos".mysql_error());
        mysql_select_db($db, $connexion);
        echo "La conexion fue exitosa";
        return $conexion;

        }

     
?>
