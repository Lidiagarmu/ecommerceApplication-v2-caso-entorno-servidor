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
    <title>Home</title>
    <link rel="stylesheet" href="../cliente/styles/style.css">
</head>
<body>
    <div class="app-container">
        <header>
            <h1>Bienvenid@, <?php echo $_SESSION['user']; ?></h1>
            <form method="POST" action="logout.php">
                <button name="logout">Cerrar sesión</button>
            </form>
        </header>

        <main>
            <h2>Selecciona una opción:</h2>
            <div class="home-options">
                <a href="preferences.php" class="button">Preferencias</a>
                <a href="cart.php" class="button">Carrito</a>
            </div>
        </main>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', () => {
    const theme = localStorage.getItem('theme') || 'light';
    document.body.classList.add(theme);
});
</script>


</body>
</html>
