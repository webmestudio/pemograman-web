	<html>
	<head>
	<title>Buku Tamu dengan Ajax </title>
	<script type="text/javascript" src="kirimkan.js"></script>
	</head>
	<body>
	<div id="halamantengah">
	<form action="javascript:get(document.getElementById('FormKu'));" name="FormKu" id="FormKu" class="form">
	Nama<br/>
	<input type="text" name="nama" size="35" id="idnama" /><br/>
	email<br/>
	<input type="text" name="email" size="35" id="idemail" /><br/>
	Asal<br/>
	<input type="text" name="Asal" size="35" id="idasal"/><br/>
	Homepage<br/>
	<input type="text" name="Homepage" size="35" value="http://" id="idhomepage"/><br/>
	Komentar<br/>
	<textarea name="Komentar" rows="5" cols="45" class="inputx" id="idkomentar" /></textarea>
	<br>
	<input type="button" name="button" value="Kirimkan"
	onclick="javascript:get(this.parentNode);" />
	</form>
	<hr/>
	<span id="informasi"></span>
	</div>

	<?php
	$host="localhost";
	$user="root";
	//password kosong karena default dari XAMPP yang ga pake password
	$pass="";
	$db="guestbook";
	$con=@mysql_connect("$host","$user","$pass") or die("Ada kesalahan di DB");
	//Memilih database
	@mysql_select_db($db,$con) or die("Tidak bisa koneksi ke database");
	$query=@mysql_query("select * from bukutamu2 order by id desc");
	//desc ini agar yang komen terakhir ditampilkan duluan
	while($result=mysql_fetch_array($query)){
	$nama=$result['nama'];
	$email=$result['email'];
	$website=$result['website'];
	$alamat=$result['alamat'];
	$isi=$result['isi'];

	echo "nama : $nama<br/>email : $email<br/>website : $website<br/>";

	echo "alamat : $alamat <br/>$isi<p></p><hr/>";

	}

	?>

	</body>
