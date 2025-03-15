<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST["categoria"];
    $query = "SELECT * FROM enlaces WHERE categoria LIKE '%$categoria%'";
    $resultado = mysqli_query($conexion, $query);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filtrar Enlaces</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Filtrar Enlaces por Categoría</h1>
    
    <form method="post">
        <label>Categoría:</label>
        <input type="text" name="categoria" required>
        <button type="submit">Buscar</button>
    </form>

    <?php if (isset($resultado)) { ?>
        <h2>Resultados:</h2>
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
    <?php } ?>

    <h2><a href="index.php">Volver al inicio</a></h2>
</body>
</html>
