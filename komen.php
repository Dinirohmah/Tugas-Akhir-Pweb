<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>komentar</title>
</head>
<body bgcolor="B8860B">
<?php
//menyimpan inputan post kedalam variabel
$mode      =date("Y-m-d");
$username  = $_POST['username'];
$komentar  = $_POST['komentar'];

echo "<head><title>my shop</head></title>";
$fp= fopen("komentar.txt", "a++");
fputs($fp,"$mode|$username|$komentar\n");
fclose($fp);

echo "<center>";
echo "<b>Terimakasih, Komentar anda akan kami tampung<b><br>";
echo "<a href=pretyous.php>HOME</a><br>";
echo "<a href=lihatkomen.php>Lihat Komentar</a><br>";
echo "</center>";
?>
</body>
</html>