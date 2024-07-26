<?php
//memulai session.
session_start();
//mengecek bahwa input diambil dari form yang diposting
// Kalau tidak, akan munculkan pesan
if ($_SERVER["REQUEST_METHOD"] <> "POST") 
 die("Tidak bisa diakses kalau tidak lewat server");

//mengecek kode sekurity dan nilai session tidak kosong.
//mengecek apakah teks input sesuai dengan teks yang disimpan
if ( ($_REQUEST["txtCaptcha"] == $_SESSION["kode_sekuriti"]) && 
    (!empty($_REQUEST["txtCaptcha"]) && !empty($_SESSION["kode_sekuriti"])) ) {
  echo "<h1>Anda memasukkan captcha dengan benar!</h1>";
} else {
  echo "<h1>Captcha anda salah, coba lagi!</h1>";
}
?>
