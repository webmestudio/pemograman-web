<?php
$koneksi = mysql_connect("localhost","root","");
if (!$koneksi)
  {
  die('Tidak bisa konek nih ke server: '. mysql_error());
  } 
mysql_select_db("data_php", $koneksi);
mysql_query("INSERT INTO data_pengguna (nama, umur) 
VALUES ('Joko Bachdim', 20)");
mysql_close($koneksi);
?>
