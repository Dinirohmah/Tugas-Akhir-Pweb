<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Komentar Anda</title>
</head>
<body bgcolor="B8860B">
<?php
echo "<head><title>your comment</head></title>";
echo "<h3 align=center>PRETTYOUS SHOP</h3>";
$fp= fopen("komentar.txt", "r");
echo "<table border=1 align=center>";
echo "<tr><td>Tanggal</td>";
echo "<td>Username </td>";
echo "<td>Komentar</td></tr>";

while ($isi = fgets($fp,80)) {
	$pisah = explode("|", $isi);
	echo "<tr><td>$pisah[0]</td>";
	echo "<td>$pisah[1]</td>";
	echo "<td>$pisah[2]</td></tr>";
}
echo "</table>";
echo "<a href = pretyous.php> Klik disini </a> Kembali Home";
?>
</body>
</html>