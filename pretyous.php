<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Tugas Kelompok PWEB</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="B8860B">
 <table align="center" border="0" cellspacing="0" width="100%">
   <tr align="center" border="0">
    <th colspan="7" bgcolor="B8860B"><font color="F0F8FF">
     <h4>Batas waktu pembayaran maksimal 90 menit setelah order dibuat.</h4></font></th>
   </tr>
  <tr>
    <td colspan="2" align="left" bgcolor="F5DEB3">
      <h2><font color="B8860B">PRETTYOUS</h2>
      <td align="center" bgcolor="F5DEB3"><font color="#B8860B">
        <a href="shop.html">SHOP ALL</font></td>
      <td align="center" bgcolor="F5DEB3">
        <label><font color="#B8860B">COLLECTION</font></label>
         <select name="COLLECTION">
          <option value="Blouse"><a href="blouse.html">Blouse</a></option>
          <option value="Tunic"><a href="tunic.html">Tunic</a></option>
          <option value="T-shirt"><a href="t-shirt.html">T-shirt</a></option>
          <option value="Outer"><a href="outer.html">Outer</a></option>
          <option value="Inner"><a href="inner.html">Inner</a></option>
        </select>
        </td>
    </td>
  </tr>
  <tr>
    <td border="1" colspan="7">
      <img src="header1.png" align="center" width="1350" height="500">
  </tr>
  <tr>
    <td colspan="7" align="center"><font color="white">
      <br>
      <h1>WELCOME TO</h1>
      <h1>PRETTYOUS SHOP</h1></p></font></td>
  </tr>
</table>
  <table border="0" width="100%">
  <tr>
    <td colspan="2" bgcolor="DEB887"><img src="new1.png" width="650" height="500" align="right"></td>
    <td colspan="2" bgcolor="DEB887"><img src="new2.png" width="550" height="500"></td>
  </tr><br><br>
  <tr>
    <td colspan="4"><font color="white"><h1 align="center">Look at This!!</h1></font></td>
  </tr>
  <tr>
  <td colspan="4" bgcolor="B8860B">
    <font color="black"><h2 align="center">SALE !!</h3>
  </td></tr>
  <tr>
    <td><img src="gambar1.png" width="350" height="400">
        <font color="000000">
        <p align="center"><a href="maharani.php">Oud Maharani Dress</a></p>
        <p align="center" onresize="25"><strike>IDR. 300.000,00</strike><br>IDR 295.000,00</p></font></td>
    <td><img src="gambar2.png" width="350" height="400">
        <font color="000000">
          <p align="center"><a href="cellisa.php">Cellisa Dress</a></p>
          <p align="center"><strike>IDR 455.000,00</strike><br>IDR 400.000,00</p>
          </font></td>
    <td><img src="gambar3.png" width="350" height="400">
        <font color="000000">
        <p align="center"><a href="safa.php">Safaa Dress</a></p>
        <p align="center"><strike>IDR 395.000,00</strike><br>IDR 345.000,00</p>
        </font></td>
    <td><img src="gambar4.png" width="300" height="400">
        <font color="000000">
        <p align="center"><a href="celci.php">Celcillia Dress</a></p>
        <p align="center"><strike>IDR 450.000,00</strike><br>IDR 400.000,00</p>
        </font></td>
        <br><br>
        <tr>
          <td colspan="4">
            <font color="black"><h2 align="center">NEW ARRIVAL</h2></td>
        </tr>
  </tr>
  <tr>
    <td><img src="look1.png" width="370" height="400">
      <font color="000000">
        <p><a href="ameena.php">Ameena Long Outer</a></p>
        <p>IDR 165.000,00</p>
      </font></td>
    <td><img src="look2.png" width="350" height="400">
      <font color="000000">
        <p><a href="ameera.php">Ameera long Outrer</a></p>
        <p>IDR 99.000,00</p></font></td>
    <td><img src="look3.png" width="350" height="400">
      <font color="000000">
      <p><a href="kaza.php">Kazaghtan Outer</a></p>
      <p>IDR 99.000,00</p></font></td>
    <td><img src="look4.png" width="300" height="400">
      <font color="000000">
        <p><a href="kay.php">Kayla Outer</a></p>
        <p>IDR 89.000,00</p>
      </font></td>
      <br><br>
  </tr>
  <br><br>
  <table align="center" border="0" cellspacing="0" width="100%" bgcolor="B8860B">
    <tr align="center" border="0">
      <th "colspan="8" bgcolor="B8860B"><font color="000000">
        <h2>Pesan</h2></font></th></tr>
        <form name="form1" method="post" action="proses.php">              
          <table width="58%" border="0" align="center"></tr>
<tr>
<td>Nama Lengkap</td>
<td><input name="nama" type="text" id="nama"></td>
</tr>

<tr>
<td>Alamat</td>
<td><textarea name="alamat" id="alamat"></textarea></td> </textarea></tr>
</tr>

<tr>
<td>E-Mail</td>
<td><input name="email" type="text" id="email"></td> </tr>
</tr>

<tr>
  <td>Ukuran</td>
  <td><select name="ukuran" id="ukuran">
    <option>--pilihan--</option>
    <option>XXL</option>
    <option>XL</option>
    <option>L</option>
    <option>M</option>
    <option>S</option></td>
    </select>
</tr>

<tr>
<td>Pesanan</td>
<td><select name="pesanan" id="pesanan">
  <option>--pilihan--</option>
  <option>Oud Maharani Dress</option>
  <option>Cellisa Dress</option>
  <option>Safaa Dress</option>
  <option>Celcillia Dress</option>
  <option>Ameena Long Outer</option>
  <option>Ameera long Outrer</option>
  <option>Kazaghtan Outer</option>
  <option>Kayla Outer</option>
</select></td>
</tr>

<tr>
<td>Komentar</td>
<td><textarea name="komentar" id="komentar"></textarea></td> </textarea></tr>

<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
</td>
</tr>
</table>
</form>
   <table align="center" border="0" cellspacing="0" width="100%" bgcolor="B8860B">
    <tr align="center" border="0">
      <th "colspan="8" bgcolor="B8860B"><font color="F0F8FF">
        <h4>MASUK DAN SIMPAN AKUN</h4></font></th></tr>
    <tr>
      <td colspan="9" align="center" bgcolor="B8860B"><font color="white">
        <a href="login.html">LOGIN AKUN</a></font></td>
    </tr>
 </table>

</body>

</html>