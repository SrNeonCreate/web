<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $url = $_POST["url"];
    $categoria = $_POST["categoria"];

    $sql = "INSERT INTO enlaces (titulo, url, categoria) VALUES ('$titulo', '$url', '$categoria')";
    if (mysqli_query($conexion, $sql)) {
        echo "<p>Enlace agregado correctamente.</p>";
    } else {
        echo "<p>Error al agregar enlace: " . mysqli_error($conexion) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestor de Enlaces</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Gestor de Enlaces</h1>

    <h2>Añadir Enlace</h2>
    <form method="post">
        <label>Título:</label>
        <input type="text" name="titulo" required>
        <br>
        <label>URL:</label>
        <input type="url" name="url" required>
        <br>
        <label>Categoría:</label>
        <input type="text" name="categoria" required>
        <br>
        <button type="submit">Agregar</button>
    </form>

    <h2><a href="listar.php">Ver todos los enlaces</a></h2>
</body>
</html>
