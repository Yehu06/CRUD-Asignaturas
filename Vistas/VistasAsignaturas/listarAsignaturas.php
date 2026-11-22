
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Asignaturas</title>
    <link rel="stylesheet" href="/MVC-Asignaturas/formulario.css">
</head>
<body>

<div class="contenedor">

    <h1>Asignaturas</h1>

    <a href="/MVC-Asignaturas/Vistas/VistasAsignaturas/anadirAsignatura.php" class="boton">
        Añadir asignatura
    </a>

    <br><br>

    <?php

    if($resultado->num_rows>0)
    {
        while($fila=$resultado->fetch_array())
        {
            echo '<div class="tarjeta">';

            echo '<div>';
            echo '<strong>'.$fila["nombre"].'</strong>';
            echo '<p>Código: '.$fila["codigo"].'</p>';
            echo '<p>Color: '.$fila["color"].'</p>';
            echo '<div class="color-asignatura" style="background-color:'.$fila["color"].';"></div>'; 
            echo '</div>';

            echo '<a class="boton modificar" href="/MVC-Asignaturas/index.php?c=CAsignatura&m=cogerId&id='.$fila["id"].'">Modificar</a>';

            echo '<a class="boton borrar" href="/MVC-Asignaturas/index.php?c=CAsignatura&m=gestionarEliminar&id='.$fila["id"].'">Eliminar</a>';

            echo '</div>';
        }
    }
    else
    {
        echo '<p>No hay asignaturas</p>';
    }

    ?>

</div>

</body>
</html>
