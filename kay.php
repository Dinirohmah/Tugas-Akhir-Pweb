<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kayla Outer</title>
</head>
<body bgcolor="B8860B">
		<table>
		<tr>
			<td colspan="4" bgcolor="brown">
			<font color="white">
			<h2 align="center">Kayla Outer</h2>
		</font></td></tr>
		<td><img src="look4.png" width="500" height="400">
      <font color="000000">
        <p><a href="kay.php">Kayla Outer</a></p>
        <p>IDR 89.000,00</p>
      </font></td>
		</tr>
	</table>
	<?php
	$desk="<p>Terbuat dari bahan voal ( ada sebagian yg mix polyester ) dgn karakteristik lembut, adem, 
	tipis <br>sehingga nyaman dipakai<br>
so stylish utk outfit km 😍
panjang outer standar 110cm
panjang long outer 127cm
finishing lasercut
all size yahh
banyak motif, bisa pilih dari motif kerudung yg ready yah
<h4>Detail Produk :</h4>
# Bahan 	: Voal<br
# Ukuran	: 115 cm x 115cm <br>
# Berat	  : 100 Gr , 1kg -+ 10 pcs<br>";
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