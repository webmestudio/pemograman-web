<html>
 <head>
 <title>Hasil tangkapan dari Form Terpisah</title>
 </head>
<body>
 <h1> Identitas Anda adalah:</h1>
 <table>
 <?php 
 print "<tr>";
 print "<td>Nama Anda :</td><td><b>".$_POST['nama']."</b></td>";
 print "</tr>";
 print "<tr>";
 print "<td>Umur Anda :</td><td><b>".$_POST['umur']."</b></td> ";
 print "</tr>";
 print "<tr>";
 print "<td>Alamat Anda di : </td><td><b>".$_POST['alamat']."</b></td>";
 print "</tr>";
?>
</table>
 </body>
 </html>
