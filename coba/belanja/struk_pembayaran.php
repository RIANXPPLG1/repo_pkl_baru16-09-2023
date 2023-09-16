<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="uang">
        <input type="submit" value="bayar" name="bayar"><br>


    </form>

    
</body>
</html>


<?php 

$connect = new PDO("mysql:host=localhost;dbname=db_belanja", "root", "");
$sql = "SELECT tb_barang.*, tb_keranjang.id FROM `tb_keranjang` INNER JOIN tb_barang on tb_barang.id_barang = tb_keranjang.id_barang";
$query = $connect->query($sql);
$data = $query->fetchAll();
$simpan = null;

foreach($data as $data){
  
    $simpan += $data['harga_barang'];
    echo $data['nama_barang']." : ". $data['harga_barang']."<br>";
    
}
echo "total yang harus di bayar : ". $simpan."<br>";
echo "<hr>";

function bayar($uang) {
    global $simpan;
    if ($uang == $simpan) {
        echo "Terimakasih telah belanja";
    } elseif($uang > $simpan) {
        echo "Terimakasih telah belanja <br>";
        echo "kembalian anda : ".$uang-$simpan;
    }else{
        echo "uang anda tidak cukup";
    }
}
if(isset($_POST['bayar'])){
    bayar($_POST['uang']);
}

?>
