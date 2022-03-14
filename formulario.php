<?php

include 'php/conectar.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$bando = $_POST['bando'];
$estado = $_POST['estado'];

if (!empty($nombre) || !empty($apellido) || !empty($genero) ||
    !empty($edad) || !empty($bando) || !empty($estado)){

    
    $sql = "INSERT INTO persona(nombre,apellido,edad,genero,bando,estado)
    values('$nombre','$apellido',$edad,'$genero','$bando','$estado')";

if ($conn->query($sql)===TRUE) {
       echo "<script>if(confirm('DATOS AGREGADOS CON EXITO')){document.location.href='ver_lista.php'};</script>";
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}else{
    echo "FALTAN DATOS OBLIGATORIOS";
    $conn->close();
}
?>