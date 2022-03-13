<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$bando = $_POST['bando'];
$estado = $_POST['estado'];

if(!empty($nombre) || !empty($apellido) || !empty($genero) || 
!empty($edad) || !empty($bando) || !empty($estado) ){

    $host = "localhost:8081";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "proyecto";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
       die('error de conexion('.mysqli_connect_errno().')'.myslqi_connect_error());
    }
    else{
        $INSERT="INSERT INTO persona(nombre,apellido,edad,genero,bando,estado)
        values(?,?,?,?,?,?)";

        $stmt = $conn->prepare($INSERT);
        $stmt ->bind_param("ssisss", $nombre, $apellido, $edad, $genero, $bando, $estado);
        $stmt ->execute();
        echo "DATOS AGREGADOS CON EXITO.";
    }
    $stmt->close();
    $conn->close();
}

//header("Location: formulario.html");
//die();
?>