<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
</head>
<body>
<h2>List Users</h2>
<table border="1">
    <tr>
        <th>USER_ID</th><th>USER_NAME</th><th>PASSWORD</th><th>EMAIL</th><th>FULL_NAME</th><th>ACTION</th>
    </tr>
    <?php
    include'conn.php' ;
    $users = mysqli_query($conn, "select * from users");
    $no=1;
    foreach ($users as $row) {
        echo"
        <tr>
            <td>$no</td>
            <td>".$row['username']."</td>
            <td>".$row['password']."</td>
            <td>".$row['email']."</td>
            <td>".$row['full_name']."</td>
            <td><a href='form-update.php?user_id=$row[user_id]'>Update</a>
                <a href='delete.php?user_id=$row[user_id]'>Delete</a>
            </td>
        </tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>

