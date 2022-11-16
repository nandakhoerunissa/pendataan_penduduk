<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login</title>
</head>
<center>
<body>
    <h2>Latihan Login XII RPL SMKN 1 SAYUNG</h2>
    <br/>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo"login gagal! usernamne dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo"anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo"anda harus login untuk mengakses halaman admin";
        }    

    }
?>
<br/>
<br/>
<form method="POST" action="cek_login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text"   name="username" placeholder="Masukan username"></td>
</tr>
<tr>
    <td>password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Masukan password"></td>  
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="LOGIN">
    <a href ="tambah.php"><input type="button" value="DAFTAR" name="DAFTAR"/></a></td>
</tr>
</table>
</form>
</center>
</body>
</html>
