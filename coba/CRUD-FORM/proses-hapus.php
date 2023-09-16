<?php
// GET
$id = $_GET['id'];


// Koneksi
$koneksi = new PDO("mysql:host=localhost;dbname=organisasi", 'root', '');
// query
$query = $koneksi->query("DELETE FROM tb_anggota where ID_ANGGOTA=$id");

// buat ngarahin halaman
header('location:home.php');
