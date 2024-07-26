<html>
<head>
    <title>
    Please input dong username dan password
    </title>	
</head>
<body>
   <p align="center"> <b>Please Masukkan Username dan Password Anda </b></p>
    
    <form action="cekhasil.php" method="post">
    <table border="0" cellpadding="0" cellspacing="0" align="center">
    
    <tr>
        <td> Username </td>
        <td> <input name="username" value = "" maxlength="10"> </td>
    </tr>
    <tr>
        <td>Password</td>
        <td> <input type="password" name="password" value = "" maxlength="10"></td>
    </tr>
    <tr>
        <td>
        Captcha </td>
        <td><img src="gambarcaptcha.php" alt="gambarCaptcha" />
        </td>
    </tr>
    <td>
    Isikan captcha
    </td>
        <td><input name="nilaiCaptcha"  value="" maxlength="6" /></td>
    <tr>
        <td>    <input type ="submit" value="Proses"> </td>    
    </tr>
    </table> 
    </form>
</body>
</html>
