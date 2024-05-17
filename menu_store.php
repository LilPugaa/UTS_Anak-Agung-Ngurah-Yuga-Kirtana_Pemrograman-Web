<?php
require_once "menu_app.php";
session_start();

$m = menuBaru($conn, $_POST);

mysqli_close($conn);

// if (is_null($m)) {
//     $_SESSION['BERHASIL_TAMBAH_MENU_PESANAN'] = "Gagal Menambah Data";
// } else {
//     $_SESSION['BERHASIL_TAMBAH_MENU_PESANAN'] = "Berhasil menambah data Jumlah Pesanan: {$_POST['jumlah']}, 
//     Nama Pesanan: {$_POST['nama']}, Jenis Menu: {$_POST['jenis']}, Harga: {$_POST['harga']}";
// }

// header("Location: menu.php");
// die();

if (is_null($m)) {
    $_SESSION['BERHASIL_TAMBAH_MENU_PESANAN'] = "
        <scrpipt>
            alert('GAGAL MENAMBAH MENU PESANAN!');
            documen.location.href = 'menu.php';
        </script>";
} else {$_SESSION['BERHASIL_TAMBAH_MENU_PESANAN'] = "
        <script>
        alert('BERHASIL MENAMBAH MENU PESANAN!');
        documen.location.href = 'menu.php';
        </script>";}

header("Location: menu.php");
die();