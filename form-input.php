<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Form Inputan Data</title>
    </head>
    <body>
        <form method="POST" action="simpan.php">
            <table>
                <tr><td>USER NAME</td><td><input type="text" onkeyup="isi_otomatis()" name="username"></td></tr>
                <tr><td>PASSWORD</td><td><input type="password" name="password"></td></tr>
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                <tr><td>FULL NAME</td><td><input type="text" name="full_name"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>        