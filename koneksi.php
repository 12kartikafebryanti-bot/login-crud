<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "database"
);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>