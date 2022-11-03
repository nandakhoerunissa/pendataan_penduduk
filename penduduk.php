<html>
    <head>
</head>
<body>
    <h1>Pendataan Warga DS.Sukamududur</h1>
    <table border="1">
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Agama</th>
        </tr>
<?php
include("koneksi.php");
$sql='SELECT * FROM tb_penduduk';
$query=mysqli_query($koneksi,$sql);
while($nanda_3nov=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$nanda_3nov['nik']."</td>";
    echo"<td>".$nanda_3nov['nama']."</td>";
    echo"<td>".$nanda_3nov['agama']."</td>";
    echo"<td>";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
</body>
</html>