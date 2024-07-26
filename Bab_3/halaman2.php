<html>
<head>
<title>
<?php
print "Halaman Kedua Untuk Menampilkan nama ".$_REQUEST['nama'];
?>
</title>
<body>
<h1> Ini halaman kedua</h1>
<?php
$nama= $_REQUEST['nama'];
print "Nama yang diambil dari halaman pertama adalah....<b>".$nama."</b>";
?>
</body>
</head>
</html>
