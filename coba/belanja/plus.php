<?php
$id = $_GET['id'];

$connect = mysqli_connect('localhost', 'root', '', 'db_belanja');
if (isset($_POST['minus']) ) {
    
    $query = mysqli_query($connect, "UPDATE tb_keranjang set jumlah_barang=jumlah_barang-1 where id='$id'");
    $kondisi = mysqli_query($connect,"SELECT jumlah_barang FROM tb_keranjang where id='$id'");
    $kondisi2 = $kondisi->fetch_assoc() ;

 
    if($kondisi2['jumlah_barang'] == 0){
       $query = mysqli_query($connect,"DELETE FROM `tb_keranjang` WHERE id='$id'");
        // die();
    }

    // $kondisi3 = ($kondisi2['jumlah_barang']);




}else if(isset($_POST['plus'])){

    $query = mysqli_query($connect,"UPDATE tb_keranjang set jumlah_barang=jumlah_barang+1 where id='$id' ");

}




header("location:beli.php");
