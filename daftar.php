<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $nama = $_POST['name'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $namalengkap = $_POST['namalengkap'];
    
    if($pass == $repass){
        $q="INSERT INTO tbl_pengguna (username, password,no_hp,alamat,nama_lengkap) VALUES ('$nama', '$pass', '$nohp','$alamat','$namalengkap')";
        $qry=mysql_query($q);
        if($qry){
          echo "<script>alert('Berhasil mendaftar')</script>";
          header('location:login-user.php');
        }

    }else{
        echo "<center><p style='color:red'>Maaf, password tidak sama</p></center>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Akun | Remen Beach</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<header>
	<div class="container">
		<div id="branding">
			<h1><i>-- Remen Beach --</i></h1>	
		</div>
		<nav>
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li class="active"><a href="Price.php"> Price </a></li>
				<li class="active"><a href="Contact.php"> Contact </a></li>
				<li class="active"><a href="Payment.php"> Payment </a></li>
				<li class="active"><a href="datapesan.php"> Data Pesanan </a></li>
				<li class="active"><a href="login-user.php"> Login User </a></li>
				<li class="active"><a href="login-admin.php"> Login Admin </a></li>
			</ul>
		</nav>	
	</div>
</header>

<center>

<h2 style="font-family: arial; padding-left: 50px;"></h2>
	<div class="isi-content">

		<h2 style="color: #ffcc00; font-family: align; font-size: 30px; margin-top: 70px; margin-bottom: 0px;">DAFTAR DISINI</h2>
		
		<div class="content-isi">
			<!--content-isi1-->
			<table border="0">
			<form action="" method="post">
			<tr>
			<p style="color: #ffcc00;">______________________________________________________</p>
				<td style="color: #ffcc00; font-size: 25px;">Nama Lengkap</td>
				<td>:<td><input style="height:20px;" class="tb2" type="text" name="namalengkap" placeholder="Masukan Nama Lengkap" required="" autocomplete="off"></td>
			</tr>
			<tr>
	        	<td style="color: #ffcc00; font-size: 25px;">Username</td>
	        	<td>:<td><input style="height:20px;" class="tb2" type="text" name="name"  placeholder="Masukan Username" / required autocomplete="off"></td>
	        </tr>
			<br>
			<tr>
	        	<td style="color: #ffcc00; font-size: 25px;">No Handphone</td>
	        	<td>:<td><input style="height:20px;" class="tb2" type="number" name="nohp"  placeholder="Masukan No.HP" / required autocomplete="off"></td>
	        </tr>
			<br>
			<tr>
	        	<td style="color: #ffcc00; font-size: 25px;">Alamat</td>
	        	<td>:<td><input style="height:20px;" class="tb2" type="text" name="alamat"  placeholder="Masukan Alamat" / required autocomplete="off"></td>
	        </tr>
			<br>	
	   		<tr>
	       	 	<td style="color: #ffcc00; font-size: 25px;">Password</td>
	        	<td>:<td><input style="height:20px;" class="tb2" type="password" name="password" placeholder="Masukan Password" / required></td>
	        </tr>
	        <tr>
	       	 	<td style="color: #ffcc00; font-size: 25px;">Konfirmasi Password</td>
	        	<td>:<td><input style="height:20px;" class="tb2" type="password" name="repassword" placeholder="Masukan Password" / required></td>
	        </tr>
	        </table>
	        <p style="color: #ffcc00;">______________________________________________________</p>

	        <input style="width: 200px; border-radius:20px; height:30px; margin-left:10px;" type="submit" class="btn btn-primary btn-block" name="submit" value="Daftar">
	        
		</div>
	</div>

</center>


<section id="logo1">
	<div>
		<center><img width="150px" height="210px" src="img/logo.png"></center>		
	</div>
</section>

<footer>
	<p>
		Remen Beach Tuban, Copyright @2021
	</p>
</footer>

</body>
</html>