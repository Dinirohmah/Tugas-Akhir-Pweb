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
			<h2 align="center">Ameena Long Outer</h2>
		</font></td></tr>
		<tr>
			 <td><img src="look1.png" width="500" height="400">
      <font color="000000">
        <p><a href="ameena.php">Ameena Long Outer</a></p>
        <p>IDR 165.000,00</p>
      </font></td>
		</tr>
	</table>
	<?php
	$desk="Super Elegant. Ameena Long Outer... Long outer lengan panjang kami hadirkan dengan material yang sangat nyaman dan halus serta adem dengan motif terbatas. warna yang ngga pernah salah untuk style dan occasion apapun dan dimanapun. Desain panjang sampai menutup kaki, bisa di padu padankan dengan celana jeans/kain, gamis polos, atau rok juga bisa... bisa buat yang berhijab atau non hijab, look nya seperti cardigan panjang berlengan, bisa dipakai untuk sehari-hari bikin kamu stand out beda dari yang lain karena cantiiiik banget coraknya.... Kami suguhkan outer cantik dan keren ini dengan harga murah tapi gak murahan ya...<br>
	<p>In Frame : Ameena Long Outer<br>
  Panjang lengan: 47cm<br>
	Panjang Baju: 120 cm<br>
	Lingkar Dada:<br>
	XS=84cm<br>
	S=88cm <br>
	M=92cm <br>
	L=96cm <br>
	XL=104cm<br>
	XXL=110cm<br></p>";
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