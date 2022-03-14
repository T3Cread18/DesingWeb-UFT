<?php

include 'php/conectar.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$bando = $_POST['bando'];
$estado = $_POST['estado'];

$actualizar =$_POST['actualizar'];



if (!empty($nombre) || !empty($apellido) || !empty($genero) ||
    !empty($edad) || !empty($bando) || !empty($estado)){

    if (mysqli_connect_error()) {
        die("Error de conexión: " . $conn->connect_error);
    }else{
        
        $INSERT = "INSERT INTO persona(nombre,apellido,edad,genero,bando,estado)
        values(?,?,?,?,?,?)";

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssisss", $nombre, $apellido, $edad, $genero, $bando, $estado);
        $stmt->execute();

        echo "<script>if(confirm('DATOS AGREGADOS CON EXITO')){document.location.href='ver_lista.php'};</script>";
        
    }
    $stmt->close();
    $conn->close();
}else{
    echo "FALTAN DATOS OBLIGATORIOS";
    $conn->close();
}

?>