
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Añadir asignatura</title>
    <link rel="stylesheet" href="/MVC-Asignaturas/formulario.css">
</head>
<body>

<div class="contenedor">

    <h1>Añadir asignatura</h1>

    <form method="POST" action="/MVC-Asignaturas/index.php?c=CAsignatura&m=añadir">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Código:</label>
        <input type="text" name="codigo" maxlength="6" required>

        <label>Color:</label>
        <input type="color" name="color">

        <input type="submit" value="Guardar">

    </form>

    <a class="boton" href="/MVC-Asignaturas/index.php?c=CAsignatura&m=listar">Volver</a>

</div>

</body>
</html>
