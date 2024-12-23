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
    <title>Preferencias</title>
    <link rel="stylesheet" href="../cliente/styles/style.css">
</head>
<body>
    <div id="app" class="app-container">
        <header>
            <h1>Preferencias</h1>
            <a href="home.php" class="button">Volver al Home</a>
        </header>

        <section>
            <h2>Configura tus preferencias</h2>
            <div>
                <label for="language">Idioma:</label>
                <select id="language" onchange="setLanguagePreference()">
                    <option value="es" selected>Español</option>
                    <option value="en">Inglés</option>
                </select>
            </div>
            <div>
                <label for="theme">Tema:</label>
                <select id="theme" onchange="setThemePreference()">
                    <option value="light" selected>Claro</option>
                    <option value="dark">Oscuro</option>
                </select>
            </div>
        </section>
    </div>
    <script src="../cliente/scripts/script.js"></script>
</body>
</html>
