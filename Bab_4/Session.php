<?php
session_start();
$_SESSION['nama'] = $_REQUEST['nama'];
$_SESSION['alamat']=$_REQUEST['alamat'];
?>
<html>
 <head>
<title>Isikan Data Anda Dengan Menggunakan Session</title>
</head>
 <body>
 <h1>Isikan data Anda</h1>
 <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
 <table>
 <tr>
 <td>Nama : </td>
 <td><input type="text" name="nama" value="<?php print $_SESSION['nama'] ?>" /> </td> 
 </tr>
 <tr>
 <td>Alamat :</td>
 <td><textarea name="alamat" rows="6" cols="40"><?php print $_SESSION['alamat']?> </textarea> </td>
 </tr>
 <tr>
 <td><!--Untuk melayout saja--></td>
 <td>
 <input type="submit" value="Proses dengan Session" />
 </td>
 </tr>
  </table>
  </form>
</body>
<?php
if (!empty ($_SESSION['nama'])) {
print "Nama Anda adalah: ".$_SESSION['nama']."<br/>";
print "Alamat Anda ada di: ".$_SESSION['alamat'];
}
?>
 </html>
