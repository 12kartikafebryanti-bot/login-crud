<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM user
    WHERE Username='$username'
    AND Password='$password'"
);

if(mysqli_num_rows($query) > 0){

    $_SESSION['login'] = true;

    header("Location: dashboard.php");

}else{

    echo "Username atau Password salah";

}
?>