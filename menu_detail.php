<?php
require_once "menu_app.php";

$id = $_GET['id'];

$d = findMenuByID($conn, $id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL PESANAN</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/menu_detail.css">
    <!-- CSS -->

    <style>
        html {
            font-family: sans-serif;
        }

        button > a {
            text-decoration: none;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
        }

        button > a:hover {
            color: #000;
        }

        button > a:active {
            color: blue;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            text-transform: uppercase;
            text-align: center;
        }

        p {
            text-align: center;
        }

        .button-close {
            border-radius: 10px;
        }

        .button-close:hover {
            background-color: #e3d9cf;
            transition: all 0.3s ease-in-out;
        };
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">GY Restaurant</a>
            <ul class="menu">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="menu_tambah.php">Pesan Menu</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <div class="tombol">
                &#9776;
            </div>
        </div>
    </nav>

    <h1>Detail Pesanan</h1>

    <div class="container">
        <button class="button-close">
            <a href="menu.php">Kembali ke Daftar Pesanan</a>
        </button>
    </div><br>

    <div class="content">
        <p>Jumlah Pesanan: <?= $d['jumlah_pesanan'] ?></p>
        <p>Nama Menu: <?= $d['nama_pesanan'] ?></p>
        <p>Jenis Menu: <?= $d['jenis_menu'] ?></p>
        <p>Harga: <?= $d['harga'] ?></p>
        <p>Created At: <?= $d['created_at']?></p>
        <p>Updated At: <?= $d['updated_at']?></p>
    </div>

    <footer>
        <div class="wrapper">
            &copy; 2024 GY Restaurant
        </div>
    </footer>

    <!-- JS -->
    <script src="scripts/menu_detail.js"></script>
    <!-- JS -->

</body>

</html>

<?php
mysqli_close($conn);
?>