<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kazaghtan Dress</title>
</head>
<body bgcolor="B8860B">
		<table>
		<tr>
			<td colspan="4" bgcolor="brown">
			<font color="white">
			<h2 align="center">Kazaghtan Dress</h2>
		</font></td></tr>
		<tr>
			<td><img src="look3.png" width="500" height="400">
				<font color="000000">
      <p><a href="kaza.php">Kazaghtan Outer</a></p>
      <p>IDR 99.000,00</p></font></td>
		</tr>
	</table>
	<?php
	$desk="<h4>Detail Singkat Produk Kardigan/Outer Cardigan Brokat</h4>
>>> Outer Cardigan Bahan Brokat Berkualitas Tinggi<br>
>>> Bahan Lembut Nyaman dipakai<br>
>>> Kuat dan Jahitan Rapih<br>
>>> Cocok untuk Busana Kondangan Maupun Lebaran<br>
>>> Tampil Cantik dan Menawan<br>
Kardigan Brokat Lengan Panjang Pakaian Wanita Masa Kini.<br>
<b>NOTE :</b><br>
1. Realpict tidak bisa 100% ya Kak karena efek kamera
2. Untuk ketersediaan warna/motifnya juga mungkin tidak bisa sama persis dengan gambar karena keterbatasan bahan produksi
3. Jika warna/motif yang dipesan kosong kami akan konfirmasikan via chat ya kak
UNTUK VARIAN LAIN SILAHKAN KUNJUNGI TOKO KAMI

<p>PERHATIAN!!!!
diharapkan ketika paket sampai di mohon untuk membuat vidio unboxing agar ketika ada kesalahan barang atau
pesanan bisa untuk bukti, selain bukti vidio unboxing kita tidak akan menerima komplen. di mohon 
kerjasamanya ya kak...</p>";
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