<?php
/*	Bagian ini untuk create gambar dengan PHP, mirip dengan tutorial pertama. */

//memulai session
session_start();

//Mengirim gambar ke browser. 
buat_gambar(); 
exit(); 

function buat_gambar() 
{ 
    //Meng-generate random string menggunakan md5 
    $md5_hash = md5(rand(0,999)); 
    //Dari yang  dihasilkan, dipotong jadi 5 saja.
    $kode_sekuriti = substr($md5_hash, 15, 5); 

    //Kemudian disimpan ke session bernama kode_sekuriti
    $_SESSION["kode_sekuriti"] = $kode_sekuriti;

    //Mengeset lebar dan tinggi gambar
    $width = 100; 
    $height = 20;  

    //membuat resource gambar
    $image = ImageCreate($width, $height);  

    //Membuat warna
    $white = ImageColorAllocate($image, 255, 255, 255); 
    $black = ImageColorAllocate($image, 0, 0, 0); 
    $grey = ImageColorAllocate($image, 204, 204, 204); 

    //Membuat background hitam 
    ImageFill($image, 0, 0, $black); 

    //Menambahkan string kode_sekuriti ke gambar.
    ImageString($image, 3, 30, 3, $kode_sekuriti, $white); 

    //Menambahkan garis ke gambar agar lebih sulit dibaca
    ImageRectangle($image,0,0,$width-1,$height-1,$grey); 
    imageline($image, 0, $height/2, $width, $height/2, $grey); 
    imageline($image, $width/2, 0, $width/2, $height, $grey); 
 
    //Menentukan jenis file yang akan dibuat, yaitu JPEG
    header("Content-Type: image/jpeg"); 

    //Meng-output jenis file JPEG
    ImageJpeg($image); 
    
    //Membebaskan resource
    ImageDestroy($image); 
} 
?>
