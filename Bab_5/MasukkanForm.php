<html>
 <head>
 <title>Memasukkan Data ke Tabel dengan Form</title>
 </head>
 <body>
 <h1> Isikan data di form berikut </h1>
 <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
  <table>
 <tr>
 <td>
 Siapa nama Anda: 
 </td>
 <td><input type="text" name="nama" /> </td> 
 </tr>
 <tr>
<td> Berapa umur Anda :</td>
<td> <input type="number" name ="umur"/> </td> 
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
 
 <?php
 

 if ( ! empty( $_POST['nama'] ) ) {
     print "<tr><td>Nama anda: </td><td>".$_POST['nama']."</td></tr> </br>";
 }
  if ( ! empty( $_POST['umur'] ) ) {
 	 print "<tr><td>Umur anda: </td><td>".$_POST['umur']."</td></tr> </br>";
	 }
	 
 ?>

 <?php
 if ( ! empty( $_POST['nama'] ) and !empty( $_POST['umur'] ) ) {
    //ini kode untuk memasukkan 
  $koneksi = mysql_connect("localhost","root","");
if (!$koneksi)
  {
  die('Tidak bisa konek nih ke server: '. mysql_error());
  }
mysql_select_db("data_php", $koneksi);

mysql_query("INSERT INTO data_pengguna (nama, umur) VALUES ('".$_POST['nama']."',". $_POST['umur'].")");
mysql_close($koneksi);
print 'Data sukses dimasukkan cuuuy';
}
?>

 </body>
 </html>
