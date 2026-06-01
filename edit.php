<?php
include 'koneksi.php';

$id = $_GET['id'];
if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $nrp = $_POST['nrp'];
    $prodi = $_POST['prodi'];

    mysqli_query(
        $koneksi,
        "UPDATE mahasiswa
         SET Nama='$nama',
             NRP='$nrp',
             Prodi='$prodi'
         WHERE ID='$id'"
    );

    header("Location: mahasiswa.php");
}

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM mahasiswa WHERE ID='$id'"
);

$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Data Mahasiswa</h2>
<a href="mahasiswa.php">← Kembali ke Data Mahasiswa</a>
<br><br>
<form method="POST">

    Nama :
    <input type="text" name="nama" value="<?php echo $row['Nama']; ?>">
    <br><br>

    NRP :
    <input type="text" name="nrp" value="<?php echo $row['NRP']; ?>">
    <br><br>

    Prodi :
    <input type="text" name="prodi" value="<?php echo $row['Prodi']; ?>">
    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>
</body>
</html>