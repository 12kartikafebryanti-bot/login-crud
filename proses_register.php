<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query(
    $koneksi,
    "INSERT INTO user (Username, Password, Nama)
     VALUES ('$username','$password','$nama')"
);

header("Location: login.php");
?>