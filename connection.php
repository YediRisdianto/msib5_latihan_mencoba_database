<?php

$host = 'localhost'; //127.0.0.1
$database_name = 'peminjaman_buku';
$database_username = 'root';
$database_password = '';

// Membuat koneksi menuju database
$mysqli = mysqli_connect($host, $database_username, $database_password, $database_name);

?>