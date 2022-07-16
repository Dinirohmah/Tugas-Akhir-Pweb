<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cellisa</title>
</head>
<body bgcolor="B8860B">
	<table>
		<tr><td colspan="4" bgcolor="brown">
			<font color="white">
			<h2 align="center">Cellisa Dress</h2>
		</font></td></tr>
		<td><img src="gambar2.png" width="350" height="400">
        <font color="000000">
          <p align="center"><a href="cellisa.php">Cellisa Dress</a></p>
          <p align="center"><strike>IDR 455.000,00</strike><br>IDR 400.000,00</p>
          </font></td>
	</table>
	<?php
	$desk="<h4>Detail Ukuran :</h4>
M -/+100cm<br>
L -/+105cm<br>
XL -/+108cm<br>
XXL -/+110cm<br>
3XL -/+120CM<br>
Detail & Bahan :
-Maxmara prada crepe kain premium dengan karakter halus, klok jatuh dipakai, tidak menerawang, tidak mudah kusut. dan adem dipakai. 
-Zipper depan [busui friendly] 
-Lengan serut cantik pergelangan karet [wudhu friendly]
-Jahitan rapi,finishing steam 

Happy Shopping🛒";
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