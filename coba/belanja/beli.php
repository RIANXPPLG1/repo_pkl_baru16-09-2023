<?php
$connect = new PDO("mysql:host=localhost;dbname=db_belanja", "root", "");
$sql = "select * from tb_barang";
$query = $connect->query($sql);
$data = $query->fetchAll();

$sql2 = "SELECT tb_barang.*, tb_keranjang.id ,tb_keranjang.jumlah_barang FROM `tb_keranjang` INNER JOIN tb_barang on tb_barang.id_barang = tb_keranjang.id_barang";

$query2 = $connect->query($sql2);
$data2 = $query2->fetchAll();









?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: tahoma;
        }


        table {
            margin: 20px;
            border-radius: 15px;

        }

        td {
            padding: 5px;
            text-align: center;


        }



        a {

            text-decoration: none;
            font-weight: bold;

        }
    </style>
</head>

<body>
    <table border="1" cellspacing="0">
        <tr>
            <td>id_barang</td>
            <td>nama_barang</td>
            <td>harga_barang</td>
            <td>id_stok</td>
            <td>stok</td>
            <td>event</td>
        </tr>

        <?php foreach ($data as $data) { ?>
            <tr>
                <td><?= $data["id_barang"] ?></td>
                <td><?= $data["nama_barang"] ?></td>
                <td><?= $data["harga_barang"] ?></td>
                <td><?= $data["id_stok"] ?></td>
                <td><?= $data["stok_barang"] ?></td>
                <td>
                    <a href="masukan_keranjang.php?id=<?= $data["id_barang"] ?>">masukan keranjang</a>
                </td>
            </tr>
        <?php } ?>


    </table>

    <table border="1" cellspacing="0">
        <tr>
            <td>id_barang</td>
            <td>nama_barang</td>
            <td>harga_barang</td>
            <td>total harga</td>
            <td>id_stok</td>
            <td>jumlah</td>
            <td>event</td>
            <td>hapus</td>
        </tr>

        <?php foreach ($data2 as $data2) { ?>
            <tr>
                <td><?= $data2["id_barang"] ?></td>
                <td><?= $data2["nama_barang"] ?></td>
                <td><?= $data2["harga_barang"] ?></td>
                <td><?php
                   $total = $data2['harga_barang'] * $data2['jumlah_barang'];
                    echo $total;
                ?></td>
                <td><?= $data2["id_stok"] ?></td>
                <td><?= $data2["jumlah_barang"] ?></td>
                <td>
                    <form action="plus.php?id=<?= $data2['id']  ?>" method="post">

                        <input type="submit" value="-" name="minus">
                        <input type="submit" value="+" name="plus">
                    </form>
                </td>
                <td>
                    <a href="hapus_keranjang.php?id=<?= $data2["id"] ?>">delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <form action="struk_pembayaran.php" method="POST">

        <a href="struk_pembayaran.php">chek out</a>
    </form>

</body>

</html>