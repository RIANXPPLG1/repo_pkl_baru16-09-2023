<?php
$id = $_GET['id']; // 2

$connect = mysqli_connect("localhost", "root", "", "db_belanja");
$query = mysqli_query($connect, "SELECT * FROM tb_keranjang WHERE id_barang='$id'");
$idbejir = $query->fetch_assoc();

if ($idbejir) {
    $sql = mysqli_query($connect, "UPDATE tb_keranjang set jumlah_barang=jumlah_barang+1 where id_barang='$id'");
} else if (!$idbejir) {
    $sql = mysqli_query($connect, "insert into tb_keranjang values(NULL,'$id',1)");
}

header("location:beli.php");
