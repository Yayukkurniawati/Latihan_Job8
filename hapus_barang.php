<html>
<head>
<title>Hapus Data Barang</title>
</head>
<body>
<?php
include_once("db_coninv.php");
$kode = 2;
$delete = mysql_query("delete from barang where kode = '$kode'");

echo "<br><br>";
if($delete)
	{echo "Berhasil menghapus data barang dengan kode $kode";}
else
	{echo "Gagal menghapus data";}
?>
</body>
</html>
