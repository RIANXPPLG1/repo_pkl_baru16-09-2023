<?php 
$connect = new PDO("mysql:host=localhost;dbname=db_supermarket", "root", "");
$sql = "select * from tb_makanan";
$query = $connect->query($sql);
$data = $query->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-align: center;
        }


       




    </style>

</head>
<body>
    
    <h1>list barang</h1>

    <table border="1" cellspacing="0">
        <tr>
            <td width="20px">id</td>
            <td width="200px">nama makanan</td>
            <td width="200px">harga maknan</td>
        </tr>

        <?php foreach($data as $data){?>
            <tr>
                <td><?= $data["id_makanan"]; ?></td>
                <td><?= $data["nama_makanan"]; ?></td>
                <td><?= $data["harga_makanan"]; ?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>