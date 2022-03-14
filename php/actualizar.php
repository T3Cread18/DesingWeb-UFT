<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actulizar</title>
        <link href="../css/style-index.css" rel="stylesheet">
        <link href="../css/style-form.css" rel="stylesheet">

    </head>
    <body>
<div class="nav-bg">
    <nav class="navegacion-principal contenedor">
        <a href="index.html">Inicio</a>
        <a href="formulario.html">Añadir Víctima</a>
        <a href="ver_lista.php">Ver lista completa</a>
        <a href="#">Desaparecidos</a>
        
    </nav>
</div>

<?php
include 'conectar.php';

if(isset($_GET['id'])){

    $id=$_GET['id'];
    $sql="select * from persona where id=$id";
    $result=mysqli_query($conn, $sql);
    $mostrar=mysqli_fetch_array ($result);

    if($result){

        $nombre=$mostrar['nombre'];
        $apellido=$mostrar['apellido'];
        $edad=$mostrar['edad'];
        $genero=$mostrar['genero'];
        $bando=$mostrar['bando'];
        $estado=$mostrar['estado'];

        $radio_mascu='';
        $radio_femen='';
        $radio_nodeter='';

        echo 
                    '<div class="formulario">
                    <form action="update_sql.php?id='.$id.'" method="post">
                
                        <h2>Datos del Cuerpo</h2>
                        <table>
                
                            <tr>
                                <td> <input type="text" placeholder="Nombre" name="nombre" value="'.$nombre.'" required></td>
                            </td>
                
                            </tr>
                                <td> <input type="text" placeholder="Apellido" name="apellido" value="'.$apellido.'" required></td>
                            
                            <tr>
                                <td> <input type="number" placeholder="Edad" step="1" pattern="\d+" min="18" max="99" name="edad" value="'.$edad.'" required></td>
                            </tr>
                            
                            <tr>
                                <td> 
                                    <input type="radio" id="masculino" name="genero" value="Maculino" required>
                                    <label for="masculino">Maculino</label><br>
                                    <input type="radio" id="femenino" name="genero" value="Femenino" required>
                                    <label for="femenino">Femenino</label><br>
                                    <input type="radio" id="no determinado" name="genero" value="No Determinado" required>
                                    <label for="no determinado">No Determinado</label>
                                </td>
                            </tr>
                
                            <tr>
                                
                                <td>
                                    <p>Bando:</p> 
                                    <select class="selector" name="bando" required>
                                        <option value="Fuerzas Armadas Ucranianas">Fuerzas Armadas Ucranianas</option>
                                        <option value="Fuerzas Armadas Rusas">Fuerzas Armadas Rusas</option>
                                        <option value="Civil">Civil</option>
                                        <option value="No Determinado">No Determinado</option>
                                    </select>
                                </td>
                            </tr>
                
                            <tr>
                                <td> 
                                    <p>Estado:</p> 
                                    <select class="selector" name="estado">
                                        <option value="Muerto en Combate">Muerto en Combate</option>
                                        <option value="Desaparecido en Combate">Desaparecido en Combate</option>
                                        <option value="Desertor">Desertor</option>
                                        <option value="No Determinado">No Determinado</option>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <input type="submit" value="Actualizar" name="actualizar">
                                </td>
                            </tr>
                
                        </table>
                    </form>
                    </div>';

    }else{
        die("Error de conexión: " . $conn->connect_error);
    }
}


?>

</body>
</html>