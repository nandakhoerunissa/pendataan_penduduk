<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $agama=$_POST['agama'];

    $sql="INSERT INTO tb_penduduk (nik,nama,agama) VALUES('$nik','$nama','$agama')";
    $query=mysqli_query($koneksi,$sql);
}
else{
     ("akses dilarang");
}
?>