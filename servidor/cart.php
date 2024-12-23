<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../cliente/styles/style.css">
</head>
<body>
    <div id="app" class="app-container">
        <header>
            <h1>Carrito de Compras</h1>
            <a href="home.php" class="backButton">Volver al Home</a>
        </header>

        <section id="cart">
            <h2>Productos</h2>
            <select id="product-select">
                <option value="1" data-price="10">Zapatos </option>
                <option value="2" data-price="20">Camiseta </option>
                <option value="3" data-price="30">Abrigo </option>
                <option value="4" data-price="5">Guantes</option>
            </select>
            <button onclick="addToCart(event)">Añadir al carrito</button>
            <button onclick="clearCart(event)">Vaciar carrito</button>
            <div id="cart-items"></div>
        </section>
    </div>
    <script src="../cliente/scripts/script.js"></script>
</body>
</html>
