<?php
$tujuan = "zaki.penulis@gmail.com";//ganti dengan email tertentu
$subject = "Testing kirim email dengan PHP!";
$body = "Bagaimana kabarnya mas, ini merupakan pengiriman teks email menggunakan PHP?";
if (mail($tujuan, $subject, $body)) {
  print("<p>Pesan terkirim dengan baik!</p>");
 } else {
  print("<p>Pesan gagal dikirim...</p>");
 }
?>
