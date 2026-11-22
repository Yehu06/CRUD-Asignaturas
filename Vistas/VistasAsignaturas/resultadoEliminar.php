
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<?php
if ($resultado)
{
    echo "<h2>Asignatura eliminada correctamente</h2>";
}
else
{
    echo "<h2>Error al eliminar la asignatura</h2>";
}
?>

<a href="/MVC-Asignaturas/index.php?c=CAsignatura&m=listar">
    Volver a las asignaturas
</a>

</body>
</html>
