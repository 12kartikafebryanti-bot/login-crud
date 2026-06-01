<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];
    $prodi = $_POST['prodi'];

    mysqli_query(
        $koneksi,
        "INSERT INTO mahasiswa (Nama, NRP, Prodi)
        VALUES ('$nama','$nrp','$prodi')"
    );

    header("Location: mahasiswa.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>
<a href="mahasiswa.php">← Kembali ke Data Mahasiswa</a>
<br><br>

<form method="POST">

    Nama :
    <input type="text" name="nama">
    <br><br>

    NRP :
    <input type="text" name="nrp">
    <br><br>

    Prodi :
    <input type="text" name="prodi">
    <br><br>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

</body>
</html>