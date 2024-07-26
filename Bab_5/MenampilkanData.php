<?php
//deklarasi koneksi
$koneksi_database = mysql_connect("localhost","root","");
//error handling
if (!$koneksi_database)
  {
  die('Tidak bisa konek nih ke server: ' . mysql_error());
  }
//pemilihan database  
mysql_select_db("data_php", $koneksi_database);
//deklarsi sql statement
$query_dari_db = mysql_query("SELECT * FROM data_pengguna");
//menampilkan data
print "<h1> Berikut ini data-data yang ada: </h1>";
while($baris = mysql_fetch_array($query_dari_db))
  {
  echo $baris['no'] . " " . $baris['nama']."  ".$baris['umur'];
  echo "<br />";
  }
mysql_close($koneksi_database);
?>
