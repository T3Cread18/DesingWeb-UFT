<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "cuerpos";

    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
        die("Error de Conexion: " . $conn->connect_error);
    }
    
echo "Conexion Exitosa";
?>