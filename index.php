<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQQLi</title>
</head>
<body>
     <h2>Login SMKN7 Baleendah</h2>
     <br/>

     <?php 
     if (isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
        	echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
        	echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
      	
      } 
      ?>
      <br/>
      <br/>
      <form method="post" action="cek_login.php">
      	 <table>
      	 	<tr>
      	 	<td>Username</td>
      	 	<td>:</td>
      	 	<td><input type="text" name="username" placeholder="Masukan username"></td>
      	    </tr>
      	    <tr>
      	 	<td>Password</td>
      	 	<td>:</td>
      	 	<td><input type="password" name="password" placeholder="Masukan password"></td>
      	    </tr>
            <tr>
            	<td></td>
            	<td></td>
            	<td><input type="submit" value="LOGIN"></td>
            </tr>
      	 </table>
      </form>
</body>
</html>