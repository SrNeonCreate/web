<?php
include("config.php");
$resultado = mysqli_query($conexion, "SELECT * FROM enlaces ORDER BY fecha_creacion DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Enlaces</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Lista de Enlaces</h1>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>URL</th>
            <th>Categoría</th>
            <th>Fecha</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila["titulo"]; ?></td>
                <td><a href="<?php echo $fila["url"]; ?>" target="_blank"><?php echo $fila["url"]; ?></a></td>
                <td><?php echo $fila["categoria"]; ?></td>
                <td><?php echo $fila["fecha_creacion"]; ?></td>
            </tr>
        <?php } ?>
    </table>

    <h2><a href="index.php">Agregar nuevo enlace</a></h2>
    <h2><a href="filtrar.php">Filtrar por categoría</a></h2>
</body>
</html>
