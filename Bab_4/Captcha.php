<?php
header("Content-type: image/png");
//membuat gambar dari file png, anda bisa mencari sumber
//captcha dari google image dengan keyword "captcha background"
$image = imagecreatefrompng('captcha.png');
//Membuat string acak untuk sumber captcha
$md5 = md5(microtime() * mktime());
//nilai acak ini diambil 8 karakter saja
$string = substr($md5,0,8);
//menentukan warna hitam untuk menulisi gambar
$warna = imagecolorallocate($image, 0,0,0 );
//ini untuk menuliskan teks captcha di gambar
imageString( $image, 20, 20, 10, $string, $warna );
imagepng($image);
//anda bisa menggunakan session untuk menyimpan captcha
?>"