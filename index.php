<?php

// Memanggil koneksi menuju database
include_once("connection.php");

// Memanggil data dari database
$result = mysqli_query($mysqli, 'SELECT * FROM buku');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

    <div class="container">
    <h1>Data Buku</h1>

    <a class="back-button" href="add.php">Tambah Buku</a>

    <table border="1">
        <tr>
            <th>Kode Buku</th>
            <th>Nama Buku</th>
            <th>Pernerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php
            while($data_buku = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $data_buku['kode_buku']; ?></td>
            <td><?php echo $data_buku['nama_buku']; ?></td>
            <td><?php echo $data_buku['penerbit']; ?></td>
            <td><?php echo $data_buku['tahun_terbit']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data_buku['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $data_buku['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
</body>
</html>

