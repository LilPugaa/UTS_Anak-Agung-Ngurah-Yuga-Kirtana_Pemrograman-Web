<?php

// Cara conect ke database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restaurant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//     die("Gagal Connect ke Database: " . mysqli_connect_error());
// }
// echo "Berhasil Connect ke Database";

function getALLData($conn)
{
    $sql = "SELECT * FROM menu";
    $result = mysqli_query($conn, $sql);

    $menu = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $menu[] = $row;
        }
    }


    return $menu;
}

function menuBaru($conn, $menu)
{
    $sql = "INSERT INTO menu
    (jumlah_pesanan, nama_pesanan, jenis_menu, harga, created_at, updated_at)
    VALUES (
        {$menu['jumlah']},
        '{$menu['nama']}',
        '{$menu['jenis']}',
        {$menu['harga']},
        NOW(),
        NOW()
    );";

    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);
    }

    return null;
}

function findMenuByID($conn, $id)
{
    $sql = "SELECT * FROM menu WHERE id = $id lIMIT 1";
    $result = mysqli_query($conn, $sql);

    $menu = [];

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    }

    return null;
}

function updateMenu($data)
{
    global $conn;
    // Ambil data dari formulir
    $id = $data['id'];
    $jumlah_pesanan = $data['jumlah_pesanan'];
    $nama_pesanan = $data['nama_pesanan'];
    $jenis_menu = $data['jenis_menu'];
    $harga = $data['harga'];

    // Query untuk mengupdate data
    $sql = "UPDATE menu SET 
    jumlah_pesanan=$jumlah_pesanan,
    nama_pesanan='$nama_pesanan', 
    jenis_menu='$jenis_menu', 
    harga=$harga,
    updated_at=NOW()
    WHERE id = $id";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}