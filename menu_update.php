<?php
require_once "menu_app.php";
$id = $_GET['id'];
// $p = $menu[$id];

// if (isset($_POST["submit"])) {
//     $jumlah_pesanan = $_POST['jumlah_pesanan'];
//     $nama_pesanan = $_POST['nama_pesanan'];
//     $jenis_menu = $_POST['jenis_menu'];
//     $harga = $_POST['harga'];

//     $sql = "UPDATE menu SET jumlah_pesanan=$jumlah_pesanan, nama_pesanan='$nama_pesanan', jenis_menu='$jenis_menu', harga=$harga WHERE id = $id";

//     $result = mysqli_query($conn, $sql);

//     if ($result) {
//         header("Location: menu.php?msg=Berhasil Update Menu");
//         exit;
//     } else {
//         echo "Gagal Update Menu " . mysqli_error($conn);
//     }
// }

// function nyelekMenu($b, $d)
// {
//     if ($b == $d) {
//         return 'selected';
//     }

//     return '';
// }

$id = $_GET['id'];

if (isset($_POST['submit']) > 0) {
    if (updateMenu($_POST)) {
        echo "
        <script>
            alert('MENU BERHASIL DI UPDATE!');
            document.location.href = 'menu.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert('MENU GAGAL DI UPDATE!');
            document.location.href = 'menu.php';
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PESANAN</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/menu_update.css">
    <!-- CSS -->

    <style>
        label {
            margin: 0 0 0 578px;
        }

        select {
            display: block;
            width: 6%;
            padding: 5px;
            border: 1px solid;
            margin: 0 0 15px 578px;
        }

        input[type=text] {
            display: block;
            width: 20%;
            border: 1px solid;
            padding: 5px;
            margin: 0 0 15px 578px;
        }

        .simpan {
            margin: 0 0 0 578px;
        }

        .content {
            padding: 20px;
        }

        .button-close {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            margin: 20px;
            margin-left: 618px;
        }

        .button-close > a {
            text-decoration: none;
        }

        .button-close:hover {
            background-color: #e3d9cf;
        }

        .button-close > a:hover {
            color: #000;
        }

        .button-close > a:active {
            color: blue;
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
    <h1>Update Menu</h1>
    <button class="button-close">
        <a href="menu.php">Kembali ke Daftar Pesanan</a>
    </button>
    
    <div class="content">

        <?php
        $sql = "SELECT * FROM menu WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $b = mysqli_fetch_assoc($result);
        ?>

        <form action="" method="post">
            <input type="hidden" class="hidden" name="id" value="<?php echo $b['id']; ?>">
            <div>
                <label>Jumlah Pesanan</label>
                <input type="text" name="jumlah_pesanan" value="<?php echo $b['jumlah_pesanan'] ?>">
            </div>
            <div>
                <label>Nama Pesanan</label>
                <input type="text" name="nama_pesanan" value="<?php echo $b['nama_pesanan'] ?>">
            </div>
            <div>
                <label>Jenis Menu</label>
                <select name="jenis_menu">
                    <option value="Makanan" <?php echo ($b['jenis_menu'] == 'Makanan') ? 'selected' : ''; ?>>Makanan</option>
                    <option value="Minuman" <?php echo ($b['jenis_menu'] == 'Minuman') ? 'selected' : ''; ?>>Minuman</option>
                    <option value="Lainnya" <?php echo ($b['jenis_menu'] == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                </select>
            </div>
            <div>
                <label>Harga</label>
                <input type="text" name="harga" value="<?php echo $b['harga'] ?>">
            </div>
            <div style="margin-top: 20px;" class="simpan">
                <input type="submit" name="submit" value="Simpan">
            </div>
        </form>
    </div>

    <footer>
        <div class="wrapper">
            &copy; 2024 GY Restaurant
        </div>
    </footer>

</body>

</html>

<?php
mysqli_close($conn);
?>