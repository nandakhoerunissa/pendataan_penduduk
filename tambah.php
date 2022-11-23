<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendataan Warga DS.Sukamududur</title>
</head>
<body>
    <h1>Pendataan Warga DS.Sukamududur</h1>
    <form action="proses_tambah.php" method="POST">                        
        
        <form>
            <fieldset>
            <h4><a href="logout.php">BACK</a></h4>
     <p>
        <label for="nik">NIK:</label>
        <input type="number" name="nik"/>
</p>
    <p>
        <label for="nama">Nama:</label>
        <input type="text" name="nama"/>
</p>
<p>
    <label for="agama">Agama:</label>
    <input type="radio" name="agama" value="islam"/>Islam</lebel>
    <input type="radio" name="agama" value="katolik"/>Katolik</lebel>
    <input type="radio" name="agama" value="kristen"/>Kristen</lebel>
    <input type="radio" name="agama" value="budha"/>Budha</lebel>
    <input type="radio" name="agama" value="hindu"/>Hindu</lebel>
    <input type="radio" name="agama" value="konghucu"/>Konghucu</lebel>
</p>
<p>
    <input type="submit" value="Kirim Data" name="tambah"/>
</p>
</fieldset>
</form>
</body>
</html>