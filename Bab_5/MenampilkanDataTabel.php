<html>
<head> <title> Menampilkan Data Halaman Web</title> </head>
<body>
<h1> Tampilan data dari tabel data_pengguna</h1>
<?php
//deklarasi koneksi
$koneksi_database = mysql_connect("localhost","root","");
//erorr handling
if (!$koneksi_database)
  {
  die('Tidak bisa konek nih ke server: ' . mysql_error());
  }
//pemilihan db
mysql_select_db("data_php", $koneksi_database);
$query_dari_db= mysql_query("SELECT * FROM data_pengguna");
//pencetakan nilai dari database ke dalam bentuk tabel html
//membuat table header
print "<table border='1'><tr> 
<th>No</th>
<th>Nama</th>
<th>Umur</th>
</tr>";
//membuat table baris selain header dan table data
while($baris = mysql_fetch_array($query_dari_db))
  {
  print "<tr>";
  print "<td>" . $baris['no'] . "</td>";
  print "<td>" . $baris['nama'] . "</td>";
  print "<td>" . $baris['umur'] . "</td>";
  print "</tr>";
  }
print "</table>";
//menutup koneksi
mysql_close($koneksi_database);
?>
</body>
</html>
