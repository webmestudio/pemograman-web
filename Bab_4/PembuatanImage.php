<?php
header("Content-type: image/png");
//membuat gambar dari file png.
$image = imagecreatefrompng('gambarAsal.png');
//menentukan warna hitam untuk menulisi gambar
$warna = imagecolorallocate($image, 0,0,0 );
//ini untuk menuliskan teks di gambar
imageString( $image, 20, (20), (50), "Selamat Datang", $warna );
imageString( $image, 20, (20), (100), "IP Anda: ".$_SERVER['REMOTE_ADDR'], $warna );
imageString( $image, 20, (20), (140), "Referer anda: ".$_SERVER['HTTP_REFERER'], $warna);
imageString( $image, 20, (20), (160), "Halaman yang sedang anda buka: ".$_SERVER['PHP_SELF'], $warna);
imageString( $image, 20, (20), (250), "Terima kasih sudah berkunjung, Teks dibuat File PHP", $warna);
imagepng($image);
?>"
