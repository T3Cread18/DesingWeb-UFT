<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$bando = $_POST['bando'];
$estado = $_POST['estado'];

if(!empty($nombre) || !empty($apellido) || !empty($genero) || 
!empty($edad) || !empty($bando) || !empty($estado) ){

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "cuerpos";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if(mysqli_connect_error()){
       die('Error de Conexion'(mysqli_connect_errorno().')'.mysqli_connect_error());
    }
    else{
        $INSERT="INSERT INTO personas(nombre,apellido,edad,genero,bando,estado)
        values(?,?,?,?,?,?)";

        $stmt = $conn->prepare($INSERT);
        $stmt ->bind_param("ssisss", $nombre, $apellido, $edad, $genero, $bando, $estado);
        $stmt ->execute();
        echo "DATOS AGREGADOS CON EXITO.";
    }
    $stmt->close();

}

?>