<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "cuerpos";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
        die("Connection failed: " . $conn->connect_error);
    }
?>