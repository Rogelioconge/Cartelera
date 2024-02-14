<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Compra de Entradas</title>
</head>
<body>
    <h1>Formulario de Compra de Entradas</h1>
    <form action="<?php echo base_url('Cine/calcularPrecio'); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="entradas">Entradas:</label>
        <input type="number" id="entradas" name="entradas" min="1" required><br>
        <label for="pago">Pago:</label>
        <input type="number" id="pago" name="pago" required><br>
        <button type="submit">Calcular Precio</button>
    </form>

    <?php if (isset($nombre) && isset($total)): ?>
    <h2>Resumen de la Compra:</h2>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Total a pagar: $<?php echo $total; ?></p>
    <?php if (isset($cambio)): ?>
    <p>Pago recibido: $<?php echo $pago; ?></p>
    <p>Cambio: $<?php echo $cambio; ?></p>
    <?php endif; ?>
    <?php endif; ?>
</body>
</html>
