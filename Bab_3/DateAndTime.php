<html>
<head>
<title>Waktu dengan PHP</title>
</head>
<body>
<div>
<?php
echo "<h1>Tanggal Sekarang</h1>";
$tgl_Sekarang=getdate();
print "Sekarang Tanggal :".$tgl_Sekarang['mday']."<br/>"."Sekarang Bulan :".$tgl_Sekarang['mon']."<br/>"."Sekarang Tahun :".$tgl_Sekarang['year']."<br />";
echo "<h1>Tanggal Buatan</h1>";
$waktu_buatan = mktime( 2, 30, 0, 5, 1, 2010 );
print "Tanggal Buatan :".date("d/m/y G.i:s", $waktu_buatan);
?>
</div>
</body>
</html>
