<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar en MongoDB Atlas</title>
</head>
<body>
    <h2>Ingrese un Nombre y Edad</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>
        <label for="matricula">Matricula:</label>
        <input type="number" name="matricula" id="matricula" required> <br><br>
        <input type="submit" value="Guardar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'controller.php';

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $matricula = $_POST['matricula'];

        $controller = new PersonaController();
        $resultado = $controller->guardarPersona($nombre, $edad, $matricula );

        if ($resultado) {
            echo "<h3>¡Datos insertados correctamente en MongoDB Atlas!</h3>";
        } else {
            echo "<h3>Error al insertar los datos</h3>";
        }
    }
    ?>
</body>
</html>
