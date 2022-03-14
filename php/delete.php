<?php

include 'conectar.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    $sql="delete from persona where id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
       header('location: /proyecto/ver_lista.php');
    }else{
        die("Error de conexión: " . $conn->connect_error);
    }
}


?>