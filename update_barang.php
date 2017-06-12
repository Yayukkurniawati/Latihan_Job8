<html>
<head>
<title>Update Data Tabel Barang</title>
</head>
<body>
<?php
include_once("db_coninv.php");
$update = mysql_query("update barang set nama = 'TV' WHERE Kode = 001");


echo "<br><br>";	
if($update)
	{echo "Berhasil mengupdate data pada tabel barang";}
else
	{echo "Gagal mengupdate data";}
?>
</body>
</html>
