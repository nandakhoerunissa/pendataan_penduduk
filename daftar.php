<html>
    <head>
</head>
<center>
<body>
    <?php
    session_start();

    if($_SESSION['status']!="login"){
        header("location:../index.php?pesan=belum_login");
    }
?>
<h4>Selamat Datang, <?php echo $_SESSION['username'];?>! anda telah login.</h4>
    <h1>Pendataan Warga DS.Sukamududur</h1>
    <h4><a href="logout.php">LOGOUT</a></h4>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Umur</th>
            <th>Gmail</th>
        </tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM user';
$query=mysqli_query($koneksi,$sql);
while($nanda_3nov=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$nanda_3nov['id']."</td>";
    echo"<td>".$nanda_3nov['username']."</td>";
    echo"<td>".$nanda_3nov['password']."</td>";
    echo"<td>".$nanda_3nov['umur']."</td>";
    echo"<td>".$nanda_3nov['gmail']."</td>";


    echo"<td>";
    echo "<a href='hapus_daftar.php?id=".$nanda_3nov['id']."'>Hapus</a> |";
    
    echo"</td>";
    echo"</tr>";
}
?>
</table>
<h4><a href ="tambah_daftar.php"><input type="submit" value="tambah" name="tambah"/></h4></a>
</center>
</body>
</html>