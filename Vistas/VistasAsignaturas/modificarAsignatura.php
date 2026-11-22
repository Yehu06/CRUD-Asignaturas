
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar asignatura</title>
    <link rel="stylesheet" href="/MVC-Asignaturas/formulario.css">
</head>
<body>

    <div class="contenedor">

        <h1>Modificar asignatura</h1>

        <?php
        if($objC->fila)
        {
        ?>

            <form action="/MVC-Asignaturas/index.php?c=CAsignatura&m=modificar" method="POST">

                <input type="hidden" name="id" value="<?php echo $objC->fila['id']; ?>">

                <label>Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $objC->fila['nombre']; ?>" required>

                <label>Código:</label>
                <input type="text" name="codigo" value="<?php echo $objC->fila['codigo']; ?>" maxlength="6" required>

                <label>Color:</label>
                <input type="color" name="color" value="<?php echo $objC->fila['color']; ?>">

                <input type="submit" value="Guardar cambios">

            </form>

        <?php
        }
        else
        {
            echo "<p>La asignatura no existe.</p>";
        }
        ?>

        <a href="/MVC-Asignaturas/index.php?c=CAsignatura&m=listar">Volver</a>

    </div>

</body>
</html>
