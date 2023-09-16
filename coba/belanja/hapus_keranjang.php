<?php 

$id = $_GET['id'];

$connect = mysqli_connect("localhost","root","","db_belanja");
$query = mysqli_query($connect,"DELETE FROM tb_keranjang where id=$id");

header("location:beli.php");
?>