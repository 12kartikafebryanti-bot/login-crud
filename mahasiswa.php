<?php
session_start();
include 'koneksi.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>📚 Data Mahasiswa</h2>
<a href="tambah.php" class="btn-tambah">
    ➕ Tambah Mahasiswa
</a>

<br><br>

<a href="dashboard.php">Kembali ke Dashboard</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NRP</th>
    <th>Prodi</th>
    <th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)) { ?>

<tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['Nama']; ?></td>
    <td><?php echo $row['NRP']; ?></td>
    <td><?php echo $row['Prodi']; ?></td>
   <td>
    <a class="btn-edit"
       href="edit.php?id=<?php echo $row['ID']; ?>">
       ✏️ Edit
    </a>

    <a class="btn-hapus"
       href="hapus.php?id=<?php echo $row['ID']; ?>"
       onclick="return confirm('Yakin ingin menghapus data ini?')">
       🗑️ Hapus
    </a>
</td>
</tr>

<?php } ?>

</table>

</body>
</html>