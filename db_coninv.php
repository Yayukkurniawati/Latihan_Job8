<html>
<head>
<title>Koneksi Database Inventory</title>
</head>
<body>
<b>
<?php
$koneksi = mysql_connect($host = 'localhost', $username = 'root', $password = '');
if($koneksi)
	{echo "Koneksi server berhasil <br><br>";}
else
	{echo "Gagal koneksi ke server <br><br>";}

$dtabase = 'Db_Inventory';
$mydb = mysql_select_db($dtabase, $koneksi);
if($mydb)
	{echo "Berhasil memilih database";}
else
	{echo "Tidak dapat memilih database";}
?>
</b>
</body>
</html>
