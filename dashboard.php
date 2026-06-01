<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$jumlah = mysqli_query(
    $koneksi,
    "SELECT * FROM mahasiswa"
);

$total_mahasiswa = mysqli_num_rows($jumlah);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>🎓 Student Management System</h1>

<div class="card">

    <h2>Selamat Datang 💜</h2>

    <p>
        Management Systems
    </p>
    <p>
    👨‍🎓 Total Mahasiswa :
    <b><?php echo $total_mahasiswa; ?></b>
    </p>

    <br>

    <a href="mahasiswa.php">📚 Kelola Mahasiswa</a>

    <br><br>

    <a href="logout.php">🚪 Logout</a>

</div>

</body>
</html>