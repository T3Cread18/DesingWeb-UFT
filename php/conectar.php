<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "proyecto";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
       die('error de conexion('.mysqli_connect_errno().')'.myslqi_connect_error());
    }
    else{
        echo "Conectada.";
    }
?>