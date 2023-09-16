<?php 
$nama = $_POST["nama"];
$harga = $_POST["harga"];
$tipe = $_POST["tipe"];
$connect = mysqli_connect("localhost", 'root', '', 'keranjang');

$query = mysqli_query($connect,"INSERT INTO tb_keranjang VALUES ('','$nama','$harga','$tipe')");

header("location:home.php");

