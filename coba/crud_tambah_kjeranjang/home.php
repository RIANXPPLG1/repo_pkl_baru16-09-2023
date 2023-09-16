<?php
$connect = new PDO("mysql:host=localhost;dbname=keranjang", "root", "");
$sql = "select * from tb_keranjang";
$query = $connect->query($sql);
$data = $query->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>rian mart</h1 >

    <table border="1">
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>harga</td>
            <td>tipe</td>
            <td>event</td>

        </tr>

        <?php  ?>

        <?php foreach ($data as $data) { ?>
            <tr>
                <td><?= $data["id_barang"] ?></td>
                <td><?= $data["nama_barang"] ?></td>
                <td><?= $data["harga_barang"] ?></td>
                <td><?= $data["tipe_barang"] ?></td>

                <td>
                  <a href="hapus.php?id=<?= $data["id_barang"]?>">hapus</a>
                </td>
            </tr>
        <?php } ?>
        
        
        
    </table>
   <a href="form.php">tambah data</a>
</body>

</html>