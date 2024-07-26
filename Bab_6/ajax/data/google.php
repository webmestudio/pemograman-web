<?php 
//ini kode untuk menghubungi server google dan akan memperoleh respon berupa kode javascript
//kode javascript ini kemudian akan dieksekusi menggunakan perintah eval
$handle = fopen("http://www.google.com/complete/search?hl=en&js=true&qu=".$_GET["qu"], "r"); 
while (!feof($handle)){
$text = fgets($handle);
echo $text;
}
fclose($handle);
?>