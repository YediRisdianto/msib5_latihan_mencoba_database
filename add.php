<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="./css/add.css">
</head>
<body>

<div class="container">
    <h1>Tambah Data Buku</h1>

    <a class="back-button" href="index.php">Kembali</a>

    <form action="add.php" method="POST" name="addBuku">
        <table border="0">
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Nama Buku</td>
                <td><input type="text" name="nama_buku"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahun_terbit"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <!-- Handle permintaan POST dari form diatas -->
    <?php
        if(isset($_POST['Submit'])) {
            $kode_buku = $_POST['kode_buku'];
            $nama_buku = $_POST['nama_buku'];
            $penerbit = $_POST['penerbit'];
            $tahun_terbit = $_POST['tahun_terbit'];

            // Memanggil koneksi menuju database
            include_once("connection.php");

            // Query untuk insert data ke database
            $result = mysqli_query($mysqli, 
            "INSERT INTO buku (kode_buku,nama_buku,penerbit,tahun_terbit) VALUES ('$kode_buku','$nama_buku','$penerbit','$tahun_terbit')");

            echo "Berhasil menambah data buku. <a href='index.php'>Lihat Data Buku</a>";
        }
    ?>

</div>
</body>
</html>