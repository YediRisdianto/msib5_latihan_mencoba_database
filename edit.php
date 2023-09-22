<?php

    include_once("connection.php");

    // Update
    if (isset($_POST['update'])) {
        $id = $_POST['id'];

        $kode_buku = $_POST['kode_buku'];
        $nama_buku = $_POST['nama_buku'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];

        // query untuk update data
        $query = mysqli_query($mysqli,
        "UPDATE buku SET kode_buku='$kode_buku', nama_buku='$nama_buku', penerbit='$penerbit', tahun_terbit='$tahun_terbit' WHERE id='$id' ");

        header('Location: index.php');
    }

    // Ambil data user
    $id = $_GET['id'];

    $query = mysqli_query($mysqli, "SELECT * FROM buku WHERE id='$id'");

    while($data_buku = mysqli_fetch_array($query)) {
        $kode_buku = $data_buku['kode_buku'];
        $nama_buku = $data_buku['nama_buku'];
        $penerbit = $data_buku['penerbit'];
        $tahun_terbit = $data_buku['tahun_terbit'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat User</title>
    <link rel="stylesheet" href="./css/edit.css">
</head>
<body>
    <div class="container">

    <a href="index.php">Kembali</a>

    <form action="edit.php" method="POST" name="editBuku">
        <table border="0">
            <tr>
                <td>Kode buku</td>
                <td><input type="text" name="kode_buku" value="<?= $kode_buku ?>"></td>
            </tr>
            <tr>
                <td>Nama Buku</td>
                <td><input type="text" name="nama_buku" value="<?= $nama_buku ?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?= $penerbit ?>"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit" value="<?= $tahun_terbit ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    
    </div>
</body>
</html>