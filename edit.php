<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:penduduk.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_penduduk WHERE id=$kode";
$query = mysqli_query($koneksi,$sql);
$nanda_3nov=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1>From Edit Warga</h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $nanda_3nov['id']?>" />
            <p>
                <label name="nik">Nik:</label>
                <input type="number"  name="nik" value= "<?php echo $nanda_3nov['nik']?>" />
</p>
<p>
                <label name="nama">Nama:</label>
                <input type="text"name="nama" value="<?php echo $nanda_3nov['nama']?>" />
</p>
<p>
                
                <label for="agama">Agama :</label>
                
<select name="agama" value="islam" value="<?php echo $nanda_3nov['agama']?>">
<option value="islam">Islam</option>
<option value="katolik">Katolik</option>
<option value="kristen">Kristen</option>
<option value="budha">Budha</option>
<option value="hindu">Hindu</option>
<option value="konghucu">Konghucu</option>
</p>
<p>
<input type="submit" value="edit" name="edit"/>
</p>
</fieldset>
</form>
</body>
</html>