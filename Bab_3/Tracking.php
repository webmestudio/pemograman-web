<html>
<head> <title> 
Tracking
</title> </head>
<body>
<h1> Ini adalah identitas Anda </h1>
<table border="1">
<tr> 
<td>Anda menggunakan browser </td>
<td><?php print $_SERVER['HTTP_USER_AGENT'] ?> </td>
</tr>
<tr> 
<td> Anda menggunakan IP address </td>
<td> <?php print $_SERVER['REMOTE_ADDR'] ?></td>
</tr>
<tr> 
<td> Anda datang ke sini dari </td>
<td> <?php 
  if ( ! empty( $_SERVER['HTTP_REFERER'] ) ) {
   print $_SERVER['HTTP_REFERER']; } 
   else {
 print "Tidak ada yang membawa anda kesini";
  }
  ?></td>
</tr>
<tr>
<td> Halaman yang sedang anda buka adalah </td>
<td> <?php print $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] ?></td>
</tr>
</table>
</body>
</html>
