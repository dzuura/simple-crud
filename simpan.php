<?php
include 'conn.php';
// menyimpan data kedalam variabel
$username       = $_POST['username'];
$password_hash  = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email          = $_POST['email'];
$full_name      = $_POST['full_name'];

// query SQL untuk insert data
$query          = "INSERT INTO users SET username='$username', password='$password_hash', email='$email', full_name='$full_name'";
mysqli_query($conn, $query);

// mengalihkan ke halaman index.php
header("location:index.php");
?>
