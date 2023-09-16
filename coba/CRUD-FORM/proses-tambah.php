<?php

$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$seksi = $_POST['seksi'];


$koneksi = mysqli_connect("localhost", 'root', '', 'organisasi');

$query = mysqli_query($koneksi, "INSERT INTO tb_anggota values('','$nama', '$jabatan', '$seksi')");

header("location:home.php");
