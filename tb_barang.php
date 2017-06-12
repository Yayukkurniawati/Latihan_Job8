<html>
<head>
<title>Membuat Tabel Barang</title>
</head>
<body>
<?php
include_once("db_coninv.php");
$tabel = mysql_query("CREATE TABLE IF NOT EXISTS barang (
Kode INT NOT NULL,
Nama VARCHAR(30) NOT NULL,
Kategori VARCHAR(15) NOT NULL,
Jumlah INT NOT NULL,
Pokok VARCHAR(15) NOT NULL,
Jual INT NOT NULL,
PRIMARY KEY(Kode))");

echo "<br><br>";
if($tabel)
	{echo "Berhasil membuat tabel Barang melalui script php";}
else
	{echo "Gagal membuat tabel";}
?>
</body>
</html>
