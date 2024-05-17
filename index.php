<?php
require_once "menu_data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GY RESTAURANT</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- CSS -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="/#" class="logo">GY Restaurant</a>
            <ul class="menu">
                <li><a href="/#">Beranda</a></li>
                <li><a href="menu_tambah.php">Pesan Menu</a></li>
                <li><a href="/#">Layanan</a></li>
                <li><a href="/#">Kontak</a></li>
            </ul>
            <div class="tombol">
                &#9776;
            </div>
        </div>
    </nav>

    <!-- Main -->
    <header>
        <div class="header-opacity"></div>
        <div class="header-main">
            <h4>gyrestaurant.id </h4>
            <h5>Selamat Datang di<br />GY Restaurant</h5>
            <p>Silahkan pesan menu Anda</p>
            <a href="menu_tambah.php" class="button button-xl">Pesan Menu</a>
        </div>
    </header>

    <footer>
        <div class="wrapper">
            &copy; 2024 GY Restaurant
        </div>
    </footer>

    <!-- JS -->
    <script src="scripts/script.js"></script>
    <!-- JS -->
</body>

</html>