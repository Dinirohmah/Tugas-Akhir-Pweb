<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>proses pemesanan</title>
</head>
<body bgcolor="B8860B">
	<?php
//menyimpan inputan post kedalam variabel
$mode      =date("Y-m-d");
$nama      = $_POST['nama'];
$alamat    = $_POST['alamat'];
$email     = $_POST['email'];
$ukuran    = $_POST['ukuran'];
$pesanan   = $_POST['pesanan'];
$komentar  = $_POST['komentar'];

echo "<head><title>my shop</head></title>";
$fp= fopen("pretyous.txt", "a++");
fputs($fp,"$mode|$nama|$alamat|$email|$ukuran|$pesanan|$komentar\n");
fclose($fp);

echo "<center>";
echo "<b>Terimakasih, Pesanan anda akan segera kami proses :)<b><br>";
echo "<a href=pretyous.php>HOME</a><br>";
echo "<a href=open.php>Lihat Pesanan Anda</a><br>";
echo "</center>";
?>
</body>
</html>
