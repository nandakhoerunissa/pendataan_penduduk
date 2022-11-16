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
            <th>Nik</th>
            <th>Nama</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>

<?php
include("koneksi.php");
$sql='SELECT * FROM tb_penduduk';
$query=mysqli_query($koneksi,$sql);
while($nanda_3nov=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$nanda_3nov['id']."</td>";
    echo"<td>".$nanda_3nov['nik']."</td>";
    echo"<td>".$nanda_3nov['nama']."</td>";
    echo"<td>".$nanda_3nov['agama']."</td>";
    echo"<td>";
    echo "<a href='edit.php?id=".$nanda_3nov['id']."'>Edit</a> |";
    echo "<a href='hapus.php?id=".$nanda_3nov['id']."'>Hapus</a> |";
    
    echo"</td>";
    echo"</tr>";
}
?>
</table>
<h4><a href ="tambah.php"><input type="submit" value="tambah" name="tambah"/></h4></a>
</center>
</body>
</html>