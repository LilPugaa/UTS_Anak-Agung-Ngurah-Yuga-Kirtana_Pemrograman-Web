<?php
session_start();
require_once "menu_app.php";

$y = getALLData($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU PESANAN</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/menu.css">
    <!-- CSS -->

    <a href="index.php"></a>

    <style>
        table {
            width: 95%;
            margin-left: 39px;
            border: 1px solid;
        }

        tr {
            text-align: center;
        }

        th {
            background-color: #965d25;
            color: #e3d9cf;
        }

        th, td {
            border: 1px solid;
        }

        button > a {
            text-decoration: none;
            color: #0F00FF;
        }

        button > a:active {
            color: #0F00FF;
        }

        html {
            font-family: sans-serif;
        }

        button > a {
            text-decoration: none;
        }

        button > a:hover {
            color: #000;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button-close {
            padding: 10px 20px;
            font-size: 16px;
            margin: 20px;
        }

        .button-close:hover {
            background-color: #e3d9cf;
            transition: all 0.3s ease-in-out;
        }

        .button-close > a:active {
            color: #0F00FF;
        }

        .button-insert {
            padding: 10px 20px;
            font-size: 16px;
            margin: 20px;
        }

        .button-insert:hover {
            background-color: #e3d9cf;
            transition: all 0.3s ease-in-out;
        }

        .button-insert > a:active {
            color: #0F00FF;
        }

        .button-detail {
            padding: 10px 15px;
            font-size: 14px;
        }

        .button-detail:hover {
            background-color: #e3d9cf;
            transition: all 0.3s ease-in-out;
        }

        .button-detail > a:active {
            color: #0F00FF;
        }

        .button-update {
            padding: 10px 20px;
            font-size: 14px;
        }

        .button-update:hover {
            background-color: #e3d9cf;
            transition: all 0.3s ease-in-out;
        }

        .button-detail > a:active {
            color: #0F00FF;
        }

        .button-delete {
            padding: 10px 20px;
            font-size: 14px;
            margin-left: 10px;
        }

        .button-delete:hover {
            background-color: #e3d9cf;
            transition: all 0.3s ease-in-out;
        }

        .button-delete > a:active {
            color: blue;
        }

        .button-close {
            border-radius: 10px;
        }

        .button-insert {
            border-radius: 10px;
        }

        .button-detail {
            border-radius: 10px;
        }

        .button-update {
            border-radius: 10px;
        }

        .button-delete {
            border-radius: 10px;
        }
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
                <li><a href="menu.php">Layanan</a></li>
                <li><a href="menu.php">Kontak</a></li>
            </ul>
            <div class="tombol">
                &#9776;
            </div>
        </div>
    </nav>
    <div>
        <h1>Daftar Pesanan</h1>

        <div class="container">
            <button class="button-close">
                <a href="index.php">Kembali ke Beranda</a>
            </button>
            <button class="button-insert">
                <a href="menu_tambah.php">Tambah Pesanan</a>
            </button>
        </div>

        <?php if (isset($_SESSION['BERHASIL_TAMBAH_MENU_PESANAN'])): ?>
            <p><?= $_SESSION['BERHASIL_TAMBAH_MENU_PESANAN'] ?></p>
            <?php session_unset(); ?>
        <?php endif; ?>

        <br><br>
        <div class="table-container">
            <table border="1" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Jumlah Pesanan</th>
                        <th>Nama Menu</th>
                        <th>Jenis Menu</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($y as $a => $b): ?>
                        <tr>
                            <td><?= $b['jumlah_pesanan'] ?></td>
                            <td style="text-align: left;"><?= $b['nama_pesanan'] ?></td>
                            <td style="text-align: left;"><?= $b['jenis_menu'] ?></td>
                            <td><?= $b['harga'] ?></td>
                            <td>
                                <button class="button-detail">
                                    <a href="<?= "menu_detail.php?id={$b['id']}" ?>">Detail</a>
                                </button>
                                <br><br>
                                <button class="button-update">
                                    <a href="<?= "menu_update.php?id={$b['id']}" ?>">Update</a>
                                </button>
                                <button class="button-delete">
                                    <a href="<?= "menu_delete.php?id={$b['id']}" ?>" onclick="return confirm('Yakin ingin menghapus <?= $b['nama_pesanan'] ?> dari daftar pesanan?');">Delete</a>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- <br>
        <br> -->
    </div>

    <footer>
        <div class="wrapper">
            &copy; 2024 GY Restaurant
        </div>
    </footer>

    <!-- JS -->
    <script src="scripts/menu.js"></script>
    <!-- JS -->

</body>

</html>

<?php
mysqli_close($conn);
?>