<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <header>
        <h1>Bienvenido, <?php echo $_SESSION['user']; ?></h1>
        <nav>
            <a href="preferences.php">Preferencias</a>
            <a href="cart.php">Carrito</a>
            <a href="../logout.php">Cerrar sesión</a>
        </nav>
    </header>
    <main>
        <h2>Bienvenido a la tienda</h2>
        <p>Utiliza el menú para gestionar tus preferencias o revisar tu carrito.</p>
    </main>
</body>
</html>
