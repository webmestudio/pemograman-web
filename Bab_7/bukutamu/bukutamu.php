<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>
    <title>
    Buku Tamu 
    </title>
</head>
<body>
    <?php 
    //konek ke database
    mysql_connect("localhost","root","");
    mysql_select_db("bukutamu");
    /*********************************************/
   //ini untuk form dan input
    
    echo "<h2> Silakan masukkan komentar Anda: </h2>";
    
    if ($_POST['postbtn']) {
        $nama= strip_tags($_POST['nama']);
        $email=strip_tags($_POST['email']);
        $pesan=strip_tags($_POST['pesan']);
        
        if ($nama && $email && $pesan) {
            $waktu= date("h:i A");
            $tanggal=date("F d, Y");
            $ip=$_SERVER['REMOTE_ADDR'];
            
            //masukkan ke database
            mysql_query("INSERT INTO bukutamu VALUES (
            '','$nama','$email', '$pesan','$waktu', '$tanggal', '$ip'
            )");
        } else
        echo "Anda tidak memasukan semua informasi";
    }
    echo "<form action='./bukutamu.php' method='post'>
        <table>    
        <tr> 
            <td>Nama</td>
            <td><input type='text' name='nama' style='width:200px'/></td>
        </tr>
        <tr> 
            <td>Email</td>
            <td><input type='text' name='email' style='width:200px'/></td>
        </tr>
         <tr> 
            <td>Pesan</td>
            <td><textarea name='pesan' style='width:200px; height:100px'/> </textarea></td>
        </tr>
         <tr> 
            <td></td>
            <td><input type='submit' name='postbtn' value='kirim'/></td>
        </tr>
        </table>
    </form>";
    /*********************************************/
    //ini untuk display data
    echo "<h2> Komentar yang masuk </h2>";
    $query=mysql_query("SELECT * FROM bukutamu ORDER BY id DESC");
    $jmlrow= mysql_num_rows($query);
    
    if ($jmlrow>0){
    echo "<hr/>";
    //artinya jika ada di sini
        while ($row=mysql_fetch_assoc($query)) {
            $id=$row['id']; 
            $nama=$row['nama'];
            $email = $row['email'];
            $pesan=$row['pesan'];
            $waktu =$row['waktu'];
            $tanggal=$row['tanggal'];
            $ip = $row['ip'];
            
            $pesan = nl2br($pesan);
            echo "<div> Oleh <b> $nama </b> at <b> $waktu </b> on <b>$tanggal</b><br/>  $pesan </div><hr/>";
        }
    }
    else 
        echo "Tidak ada data";
    
    /*********************************************/
    
    mysql_close();
    ?>
</body>
</html>
