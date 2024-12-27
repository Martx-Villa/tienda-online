<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen del Pedido</title>
</head>
<body>
    <h1>Resumen del Pedido</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cliente = htmlspecialchars($_POST['cliente']);
        $producto = htmlspecialchars($_POST['producto']);
        $cantidad = (int) $_POST['cantidad'];

        echo "<h2>Resumen del Pedido:</h2>";
        echo "<p><strong>Cliente:</strong> $cliente</p>";
        echo "<p><strong>Producto:</strong> $producto</p>";
        echo "<p><strong>Cantidad:</strong> $cantidad</p>";
    } else {
        echo "<p>No se recibieron datos. Por favor, regresa al formulario.</p>";
    }
    ?>

    <a href="index.php">Volver al formulario</a>
</body>
</html>
