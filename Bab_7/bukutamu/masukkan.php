	<?php

	if(!$_POST){
	echo "file ini tidak boleh diakses langsung";
	exit();
	}

	//Koneksi
	$host="localhost";
	$user="root";
	$pass="";
	$db="guestbook";
	$con=@mysql_connect("$host","$user","$pass") or die("database tidak bisa konek");
 	@mysql_select_db($db,$con) or die("database tidak terhubung");
$i=0;
	foreach($_POST as $key => $value){
	
	$i=$i+1;
	$variabel[$i]=$value;
	}

	//variabel didapatkan dari array yang disimpan di variabel $_POST
	$nama=$variabel['1'];
	$email=$variabel['2'];
	$asal=$variabel['3'];
	$homepage=$variabel['4'];
	$komentar=$variabel['5'];

	/*bersihkan karakter yang tidak diinginkan, mirip dengan strip_tags di contoh sebelumnya*/

	$nama=htmlspecialchars($nama);
	$email=htmlspecialchars($email);
	$homepage=htmlspecialchars($homepage);
	$asal=htmlspecialchars($asal);
	$komentar=htmlspecialchars($komentar);

	$nama=wordwrap($nama,20,"\n",1);

	$email=wordwrap($email,40,"\n",1);

	$homepage=wordwrap($homepage,40,"\n",1);
	$asal=wordwrap($asal,20,"\n",1);
	$komentar=wordwrap($komentar,20,"\n",1);

	if(!$nama or !$email or !$asal or !$homepage or !$komentar){
	echo "semua field wajib  diisi";
	return false;
	}

	if ($email != "") {

	}

	$ip=getenv('REMOTE_ADDR');
	$query=@mysql_query("insert into bukutamu2(nama,email,website,alamat,isi,ip) value('$nama','$email','$homepage','$asal','$komentar','$ip')");

	if($query){
	echo "berhasil memasukkan data";
	

	//update tampilan data terbaru
	$queryx=@mysql_query("select * from bukutamu2 order by id desc limit 0,1");
	while($resultx=mysql_fetch_array($queryx)){
	$nama=$resultx['nama'];
	$email=$resultx['email'];
	$website=$resultx['website'];
	$alamat=$resultx['alamat'];
	$isi=$resultx['isi'];

	$nama=$resultx['nama'];
	$email=$resultx['email'];
	$website=$resultx['website'];
	$alamat=$resultx['alamat'];
	$isi=$resultx['isi'];

	echo "nama : $nama<br/>email : $email<br/>website : $website<br/>";

	echo "alamat : $alamat <br/>$isi<p></p><hr/>";
	}
	}else{
	echo "gagal memasukkan data";
	}
	?>
