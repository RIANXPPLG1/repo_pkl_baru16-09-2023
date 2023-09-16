<?php
$koneksi = new PDO("mysql:host=localhost;dbname=organisasi", 'root', '');
$sql = "select * from tb_anggota";
$query = $koneksi->query($sql);

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
    <h1>Halaman Home</h1>

    <a href="tambah-data.php">Tambah Data</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Jabatan</td>
            <td>Seksi</td>
            <td>Aksi</td>
        </tr>

        <?php foreach ($data as $data) { ?>
            <tr>
                <td><?= $data['ID_ANGGOTA'] ?></td>
                <td><?= $data['NAMA_ANGGOTA'] ?></td>
                <td><?= $data['JABATAN_ANGGOTA'] ?></td>
                <td><?= $data['SEKSI_ANGGOTA'] ?></td>
                <td>
                    <button>Update</button>
                    <a href="proses-hapus.php?id=<?= $data['ID_ANGGOTA'] ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>