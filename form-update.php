<?php
include 'conn.php';
$id         = $_GET['user_id'];
$users      = mysqli_query($conn, "select * from users where user_id='$id'");
$row        = mysqli_fetch_array($users);
?>

<!DOCTYPE htmL>
<html>
    <head>
        <title>Digital Talent</title>
    </head>
    <body>
        <form method="post" action="update.php">
            <input type="hidden" value=" <?php echo $row['user_id'];?>" name="user_id">
            <table>
                <tr><td>USER_NAME</td><td><input type="text" value="<?php echo $row['username'];?>" name="username"></td></tr>
                <tr><td>PASSWORD</td><td><input type="password" value="<?php echo $row['password'];?>" name="password"></td></tr>
                <tr><td>EMAIL</td><td><input type="text" value="<?php echo $row['email'];?>" name="email"></td></tr>
                <tr><td>FULL_NAME</td><td><input type="text" value="<?php echo $row['full_name'];?>" name="full_name"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>

