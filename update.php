<?php
include 'conn.php';
// menyimpan data kedalam variabel
$user_id       = $_POST['user_id'];
$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);  // mengenkripsi password           
$username      = $_POST['username'];
$password      = $_POST['password'];
$email         = $_POST['email'];
$full_name     = $_POST['full_name'];
// query SQL untuk insert data
$query="UPDATE users SET username='$username',password='$password_hash',email='$email', full_name='$full_name' where user_id='$user_id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>