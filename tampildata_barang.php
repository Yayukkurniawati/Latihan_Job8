<html>
<head>
<title>Pengambilan Data Barang</title>
</head>
<body>
<pre><h2>
Nama		: Yayuk Kurniawati
Kelas		: SKA-15.A2
NPM		: 888740306150114
Matakuliah	: Pemrograman Web</h2></pre>
<table border="2" cellpadding="4" cellspacing="5" >
<tr bgcolor="CCCCCC" align="center">
	<td>No.</td>
    <td>Nama</td>
    <td>Kategori</td>
    <td>Jual</td>
</tr>

<?php
echo "<hr>";
echo "<h3>Program Sederhana Database MYSQL Server</h3>";
echo "<hr>";

include_once("db_coninv.php");
echo"<br><br>";
$selectview = mysql_query("select kode, nama, kategori, jual from barang order by kode, nama asc");
while($data = mysql_fetch_array($selectview))
{	echo"<tr>
	<td>$data[0]</td>
	<td>$data[1]</td>
	<td>$data[2]</td>
	<td>$data[3]</td>
	</tr>";
}
?>

</table>
</body>
</html>
