<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista victimas</title>
        <link href="css/style-index.css" rel="stylesheet">
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
                include('php/conectar.php');
            ?>
         <table>
             <tr><th colspan="6">
                 <h1>Listado de hombres caídos en batalla</h1></th></tr>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Bando</th>
                <th>Estado</th>
            </tr>

            <?php
                $sql="select * from personas";
                $resultado=mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array ($resultado))
                    {
            ?>
                    <tr>
                        <td><?php echo $mostrar['id']?></td>
                        <td><?php echo $mostrar['nombre']?></td>
                        <td><?php echo $mostrar['apellido']?></td>
                        <td><?php echo $mostrar['edad']?></td>
                        <td><?php echo $mostrar['genero']?></td>
                        <td><?php echo $mostrar['bando']?></td>
                        <td><?php echo $mostrar['estado']?></td>
                        <td><?php echo "<a href='php/recibir.php?id=".$mostrar['id']."&nombre=".$mostrar['nombre']."'>Agregar</a>"?></td>
                    </tr>
            <?php
                    }
            ?>
            </table>
    </body>
</html>