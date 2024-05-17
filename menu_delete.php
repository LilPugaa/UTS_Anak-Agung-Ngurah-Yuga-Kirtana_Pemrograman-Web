<?php
require_once "menu_app.php";

$id = $_GET["id"];
$sql = "DELETE FROM menu WHERE id = $id";
$result = mysqli_query($conn, $sql);

// if ($result) {
//     header("Location: menu.php?msg=Berhasil Delete Menu");
// } else {
//     echo "Gagal Delete Menu " . mysqli_error($conn);
// }

if ($result) {
    echo "
        <script>
            alert('BERHASIL MENGHAPUS MENU PESANAN');
            document.location.href = 'menu.php';
        </script>";
} else {
    echo "Failed: " . mysqli_error($conn);
}