<html>
<head>
<?php
$nama="BambangPamungkas";
print "<title>";
print "Parsing nama ".$nama;
print "</title>";
?>	
<body>
<h1> Demo Parsing Variabel Antar Halaman</h1>
Nilai yang akan diparsing: <br/>
<b> nama </b> = <b><?php print $nama?></b>
<br/>
<?php
print "<noscript>"; 
print "Tolong aktifkan JavaScript";
print "</noscript>";
print "<button onClick=window.location='halaman2.php?nama=$nama'>Coba Klik Untuk menampilkan nama di Halaman kedua !</button>";
print "</a>"
?>
</body>
</head>
</html>
