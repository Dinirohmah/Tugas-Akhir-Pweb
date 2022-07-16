<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>maharani</title>
</head>
<body bgcolor="B8860B">
	<table>
		<tr><td colspan="4" bgcolor="brown">
			<font color="white">
			<h2 align="center">Oud Maharani Dress</h2>
		</font></td></tr>
		<tr>
			<td><img src="gambar1.png" width="500" height="400">
        <font color="white">
        <p align="left">Oud Maharani Dress</p>
        <p align="left" onresize="50"><strike>IDR. 300.000,00</strike> IDR 295.000,00</p></font>
        </td>
		</tr>
	</table>
	<?php
$desk="<p>Gamis Maharani sangat cocok untuk pakaian santai dirumah dan bisa seragaman untuk acara nikahan/sunatan.</p>
<p>Bahan Katun yang tebal dan nyaman saat dipakai.Materials :<br>- Bahan : Katun Apple ( BUKAN KATUN RAYON YA )</p>
<p>Detail Ukuran :
- Lingkar Dada : 104 cm<br>
- Panjang Lengan : 55 cm<br>
- Panjang Baju : 136 cm<br>
- lebar ketiak  = 50 cm<br>
- Lingkar Rok Bawah : 260 cm<br>
ALLSIZE FIT TO L<br>
Detail Produk :<br>
- Busui Friendly ( kancing depan )<br>
- Bagian Tangan Karet<br>
- Saku di kanan & kiri<br></p>
<h4>⚠️ KEBIJAKAN RETUR ⚠️
JIKA ADA BARANG YANG RUSAK,HILANG,KURANG BARANG,SALAH KIRIM BARANG/WARNA BISA RETUR, LANGSUNG HUBUNGI ADMIN KAMI AGAR BISA DI RETUR/REFUND 
UNTUK MENGKLAIM RETUR DIWAJIBKAN MENYERTAKAN VIDEO UNBOXING SAAT MENERIMA PAKET
TANPA MEYERTAKAN VIDEO UNBOXING MAKA RETUR TIDAK BISA DIKLAIM</h4>";
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

