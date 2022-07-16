<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pesanan</title>
</head>
<body bgcolor="B8860B">
<?php
echo "<head><title>My Shop</head></title>";
echo "<h3 align=center>PRETTYOUS SHOP</h3>";
$fp= fopen("pretyous.txt", "r");
echo "<table border=1 align=center>";
echo "<tr><td>Tanggal</td>";
	echo "<td>Nama </td>";
	echo "<td>Alamat</td>";
	echo "<td>Email</td>";
	echo "<td>Ukuran</td>";
	echo "<td>Pesanan</td>";
	echo "<td>Komentar</td></tr>";

while ($isi = fgets($fp,200)) {
	$pisah = explode("|", $isi);
	echo "<tr><td>$pisah[0]</td>";
	echo "<td>$pisah[1]</td>";
	echo "<td>$pisah[2]</td>";
	echo "<td>$pisah[3]</td>";
	echo "<td>$pisah[4]</td>";
	echo "<td>$pisah[5]</td>";
	echo "<td>$pisah[6]</td></tr>";
}
echo "</table>";
echo"<br><br>";
echo "<center>";
echo "<a href = pretyous.php> Klik disini </a> Kembali Home</center>";
?>
</body>
</html>
