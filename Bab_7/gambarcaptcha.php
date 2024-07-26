<?php
//ini kode untuk membuat gambar
session_start();
//ini untuk membuat session dulu di PHP, harus diletakkan di atas.
header("Content-type: image/png");
$_SESSION["nomorCaptcha"]="";
//menentukan ukuran width/lebar, dan tinggi/height
$gbr = imagecreate(180, 40);        
//Menentukan warna background.
imagecolorallocate($gbr, 167, 218, 239); 
$grey = imagecolorallocate($gbr, 128, 128, 128);
$black = imagecolorallocate($gbr, 0, 0, 0);        
// Mendefinisikan font yang akan digunakan
//untuk menuliskan angka acak dan menempelkannya ke gambar
$font = 'arial.TTF';        
for($i=0;$i<=5;$i++) {
    //menentukan jumlah karakter yang akan ditampilkan.
    //kalau mau mengganti, tinggal ganti variabel $i
    //generate nomor acak dulu
    $nomor=rand(0, 9);
    $_SESSION["nomorCaptcha"].=$nomor;
    $sudut=rand(-25, 25);
    imagettftext($gbr, 20, $sudut, 8+15*$i, 25, $black, $font, $nomor);    
    // Menambahkan shadow ke    
    imagettftext($gbr,  20, $sudut, 9+15*$i, 26, $grey, $font, $nomor);    
}
    //untuk create gambar
    imagepng($gbr);
    imagedestroy($gbr);
?>
