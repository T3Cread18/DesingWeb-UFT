<?php

include 'conectar.php';

$id=$_GET['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$bando = $_POST['bando'];
$estado = $_POST['estado'];

if(!empty($nombre) || !empty($apellido) || !empty($genero) ||
!empty($edad) || !empty($bando) || !empty($estado)){

    if(isset($id)){
   
        $sql="UPDATE persona SET nombre='$nombre', apellido='$apellido', edad=$edad, genero='$genero', bando='$bando', estado='$estado' 
        where id=$id";
        $result=mysqli_query($conn, $sql);
    
        if($result){
            echo "<script>if(confirm('ACTUALIZADO CON EXITO')){document.location.href='../ver_lista.php'};</script>";
        }else{
            die("Error de conexión: " . $conn->connect_error);
        }
        $stmt->close();
        $conn->close();
    }

}else{
    echo "FALTAN DATOS OBLIGATORIOS";
    $conn->close();
}

?>