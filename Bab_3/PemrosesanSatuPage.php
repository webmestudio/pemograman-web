<html>
 <head>
 <title>Menampilkan Nilai Masukan dalam Satu Halaman</title>
 </head>
 <body>
 <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
 <table>
 <tr>
 <td>
 Siapa nama Anda: 
 </td>
 <td><input type="text" name="nama" /> </td> 
 </tr>
 <tr>
<td> Sebutkan Alamat Anda :</td>
<td> <input type="text" name ="alamat"/> </td> 
 </tr>
 <tr>
 <td> <!--ini dikosongkan untuk layout saja--></td>
 <td>
 <button type="submit"> Kirim </button>
 </td>
 </tr>
 </table>
 </form>
 <!--Tabel untuk menampilkan-->
 <table>
 <?php
 if ( ! empty( $_POST['nama'] ) ) {
     print "<tr><td>Nama anda: </td><td>".$_POST['nama']."</td></tr>";
 }
  if ( ! empty( $_POST['alamat'] ) ) {
 	 print "<tr><td>Alamat Anda: </td><td>".$_POST['alamat']."</td></tr>";
	 }
 ?>
 </table>
 </body>
 </html>
