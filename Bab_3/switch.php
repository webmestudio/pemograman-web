<?php
$nilai_ujian = 90;
print "Nilai Anda ".$nilai_ujian;
print "<br/>";
switch ($nilai_ujian) {
case ($nilai_ujian<50):
	print "Maaf, tidak lulus";
	break;
case ($nilai_ujian>=50):
	print "Anda lulus";
	break;
default:
	break;
}
?>
