<html>
<head>
<title>Menyisipkan Data Tabel Barang</title>
</head>
<body>
<?php
include_once("db_coninv.php");
$insert = mysql_query("INSERT INTO Barang (Kode, Nama, Kategori, Jumlah, Pokok, Jual)
		VALUES ('01','Televisi','Polytron','2','2','1100000'), 
			   ('02','Handphone','Samsung','4','4','1500000'), 
			   ('03','Camera','Canon','1','1','5600000'),
			   ('04','Kipas Angin','Cosmos','6','6','220000'),
			   ('05','CD','Polytron','5','5','200000'),
			   ('06','Leptop','ASUS','2','2','4000000'),
			   ('07','Printer','Canon','3','3','1875000'),
			   ('08','Handphone','Oppo','5','5','3500000'),
			   ('09','Komputer','Samsung','2','2','3500000'),
			   ('10','Printer','Epson','1','1','2350000'),
			   ('11','Televisi','SHARP','1','1','1550000'),
			   ('12','Leptop','Acer','2','2','3500000')
			   ");

echo "<br><br>";
if($insert)
	{echo "Berhasil menyisipkan data pada tabel barang";}
else
	{echo "Gagal menyisipkan data";}
?>
</body>
</html>
