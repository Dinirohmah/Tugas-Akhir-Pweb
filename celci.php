<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>celcillia dress</title>
</head>
<body bgcolor="B8860B">
		<table>
		<tr><td colspan="4" bgcolor="brown">
			<font color="white">
			<h2 align="center">Celcillia Dress</h2>
		</font></td></tr>
		<tr>
			<td><img src="gambar4.png" width="500" height="400">
        <font color="white">
        <p align="left"><a href="celci.php">Celcillia Dress</a></p>
        <p align="left"><strike>IDR 450.000,00</strike>IDR 400.000,00</p>
        </font></td>
		</tr>
	</table>
	<?php
	$desk="<h4>Barang asli realpict seperti di foto.</h4>
Bahan ITYCREPE super<br>
qualitas premium<br>
resleting depan<br>
busui<br>
tangan karet<br>
Ikatpinggang<br>
bordir cantik<br>
<b>Ukuran :</b>
Ld 106<br>
Pb 135<br>
Allsize bahan ity crep<br>
HIMBAUAN UNTUK CUSTOMER!!! <br>
1. MOHON BERIKAN ALAMAT JELAS DAN LENGKAP KETIKA MEMBUAT PESANAN <br>
2. MOHON AGAR NOMOR YANG DICANTUMKAN DIPESANAN AGAR SELALU AKTIF<br>
3. PERUBAHAN ALAMAT/WARNA/PRODUK SETELAH DIKONFIRMASI TIDAK BISA YA";
echo "$desk";
?>
<table align="center" border="0" cellspacing="0" width="100%" bgcolor="B8860B">
	<tr align="center" border="0">
      <th "colspan="8" bgcolor="B8860B"><font color="000000">
        <h2>Komentar Anda</h2></font></th></tr>
        <form name="form1" method="post" action="komen.php">              
          <table width="58%" border="0" align="center"></tr>
    <tr><td>Username</td>
    	<td><input type="text" name="username" id="username"></td></tr>
   <tr>
   	<td>Komentar</td>
   	<td><textarea name="komentar" id="komentar"></textarea></td></textarea></tr>

   <tr>
   	<td>&nbsp;</td>
   	<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
   	</td>
   </tr></table>
</body>
</html>