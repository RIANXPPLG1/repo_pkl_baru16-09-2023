<?php

$id = $_GET['id'];

$connect = mysqli_connect("localhost","root","","keranjang");
 $query = mysqli_query($connect,"DELETE FROM tb_keranjang where id_barang =$id");

 header("location:home.php");