<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH PESANAN</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/menu_tambah.css">
    <!-- CSS -->

    <style>
        label {
            margin: 0 0 0 565px;
        }

        select {
            display: block;
            width: 6%;
            padding: 5px;
            border: 1px solid;
            margin: 0 0 15px 565px;
        }

        input[type=text] {
            display: block;
            width: 20%;
            border: 1px solid;
            padding: 5px;
            margin: 0 0 15px 565px;
        }

        .simpan {
            margin: 0 0 0 565px;
        }

        .content {
            padding: 20px;
        }

        button > a {
            text-decoration: none;
        }

        button > a:hover {
            color: #000;
        }

        button > a:active {
            color: blue;
        }

        .button-close {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            margin: 20px;
            margin-left: 625px;
        }

        .button-close:hover {
            background-color: #e3d9cf;
            transition: all 0.3s ease-in-out;
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
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <div class="tombol">
                &#9776;
            </div>
        </div>
    </nav>
    <h1>Silahkan Ketik Pesanan Anda</h1>
    <button class="button-close">
        <a href="menu.php">Lihat Daftar Pesanan</a>
    </button>
    
    <div class="content">
        <form action="menu_store.php" method="post">
            <div>
                <label>Jumlah Pesanan</label>
                <input type="text" name="jumlah">
            </div>
            <div>
                <label>Nama Menu</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label>Jenis Menu</label>
                <select name="jenis">
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div>
                <label>Harga</label>
                <input type="text" name="harga">
            </div>
            <div style="margin-top: 20px;" class="simpan">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>

    <footer>
        <div class="wrapper">
            &copy; 2024 GY Restaurant
        </div>
    </footer>

    <!-- JS -->
    <script src="scripts/menu_tambah.js"></script>
    <!-- JS -->
</body>
</html>