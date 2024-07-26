<html>
<head>
<title> Penilaian captcha </title>
</head>
<body>
<p align="center"> Hasil Login <br/>
	<?php
	//memanggil lagi session untuk dimulai
	session_start();
	if($_SESSION["nomorCaptcha"]!=$_POST["nilaiCaptcha"])
	{
	echo "Username anda ".$_POST["username"];
	echo "<br/>";
	echo "Password anda ".$_POST["password"];
	echo "<br/>";
	echo "Kode Captcha Anda Salah";
	//ini bisa dikasih recover 
	}
	else
	{
	echo "Username anda ".$_POST["username"];
	echo "<br/>";
	echo "Password anda ".$_POST["password"];
	echo "<br/>";
	echo "Kode Captcha Anda Benar";
	}
	?> 
	</p>
</body>
</html>
