
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar asignatura</title>
    <link rel="stylesheet" href="/MVC-Asignaturas/formulario.css">
</head>
<body>

<div class="contenedor">

    <h1>Eliminar asignatura</h1>

    <?php
    if($objC->fila)
    {
    ?>

        <p>¿Estás seguro de que quieres eliminar la asignatura
            <strong><?php echo $objC->fila['nombre']; ?></strong>?
        </p>

        <form method="POST" action="/MVC-Asignaturas/index.php?c=CAsignatura&m=gestionarEliminar">

            <input type="hidden" name="id" value="<?php echo $objC->fila['id']; ?>">

            <input type="submit" name="confirmar" value="Sí, eliminar">

        </form>

    <?php
    }
    else
    {
        echo "<p>La asignatura no existe.</p>";
    }
    ?>

    <a href="/MVC-Asignaturas/index.php?c=CAsignatura&m=listar">Cancelar y volver</a>

</div>

</body>
</html>
