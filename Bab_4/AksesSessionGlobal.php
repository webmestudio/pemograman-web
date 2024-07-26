<?php
session_start();?>
<html>
<head> 
<title> Halaman Lain Untuk Generate Session</title></head>
<body>
<h1>Ini adalah rekap di halaman lain</h1>
<?php
if (!empty ($_SESSION['nama'])) {
print "Nama Anda adalah: ".$_SESSION['nama']."<br/>";
print "Alamat Anda ada di: ".$_SESSION['alamat'];
}
?>
</body>
</html> 
