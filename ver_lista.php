<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista victimas</title>
        <link href="css/style-index.css" rel="stylesheet">
        <link href="css/listado.css" rel="stylesheet">
    </head>
    <body>
<div class="nav-bg">
    <nav class="navegacion-principal contenedor">
        <a href="index.html">Inicio</a>
        <a href="formulario.html">Añadir Víctima</a>
        <a href="ver_lista.php">Ver lista completa</a>
    </nav>
</div>
            <?php
                include('php/conectar.php');
            ?>
         <table>
             <tr><th colspan="6">
                 <h1 class="l1">Listado de hombres caídos en batalla</h1></th></tr>
            <tr class="titulos">
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Bando</th>
                <th>Estado</th>
            </tr>


            <?php
                $sql="select * from persona";
                $resultado=mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array ($resultado)){

                    $id=$mostrar['id'];
                    $nombre=$mostrar['nombre'];
                    $apellido=$mostrar['apellido'];
                    $edad=$mostrar['edad'];
                    $genero=$mostrar['genero'];
                    $bando=$mostrar['bando'];
                    $estado=$mostrar['estado'];

                    echo 
                    '<tr class="datos">
                    <td>'.$id.'</td>
                    <td>'.$nombre.'</td>
                    <td>'.$apellido.'</td>
                    <td>'.$edad.'</td>
                    <td>'.$genero.'</td>
                    <td>'.$bando.'</td>
                    <td>'.$estado.'</td>
                    
                    <td>
                    <button class="btn btn-primary">
                    <a href="php/actualizar.php?id='.$id.'">Actualizar</a>
                    </button>
                    </td>

                    <td>
                    <button class="btn btn-danger">
                    <a href="php/delete.php?id='.$id.'">Borrar</a>
                    </button>
                    </td>
                
                    </tr>';
    
                }
            ?>        
            </table>
    </body>
</html>