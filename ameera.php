<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ameera long Oute</title>
</head>
<body bgcolor="B8860B">
		<table>
		<tr>
			<td colspan="4" bgcolor="brown">
			<font color="white">
			<h2 align="center">Ameera long Outer</h2>
		</font></td></tr>
		<tr>
			 <td><img src="look2.png" width="500" height="400">
      <font color="000000">
        <p><a href="ameera.php">Ameera long Outer</a></p>
        <p>IDR 99.000,00</p></font></td>
		</tr>
	</table>
	<?php
	$desk="<h4>Ameera long Outrer</h4>
✂ DETAIL PRODUK<br>
🔸Bahan Ceruty baby doll motif bunga<br>
🔸Bagian tangan model balon<br>
🔸Kancing di bagian tangan<br>
🔸Ready 3 warna cantik<br>
✂ SIZE<br>
🔸Lingkar Dada : 140cm<br>
🔸Panjang baju : 62cm<br>
🔸Panjang lengan : 50cm<br>";
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