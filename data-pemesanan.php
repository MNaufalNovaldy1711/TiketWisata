<?php 
session_start();

include "koneksi.php";


$nama = $_SESSION['nama'];
if($nama==''){
    header('location:index.php');
}

//username adalah sesion login -> bisa beda"
$q="SELECT * FROM tbl_pesan WHERE atasnama='$nama'";
// echo $q;
$qry = mysql_query($q);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail Data Pemesanan | Remen Beach</title>
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
				<li class="active"><a href="Pemesanan.php">Data Pemesanan </a></li>
				<li class="active"><a href="data-pemesanan.php"> Detail Data Pemesanan </a></li>
				<li class="active"><a href="logout.php">Keluar </a></li>
			</ul>
		</nav>	
	</div>
</header>

<center>

<h2 style="color: #ffcc00; font-family: align; font-size: 30px; margin-top: 70px; margin-bottom: 40px;">Pesan TIKET</h2>
<p style="color: #fff; font-size: 30px; margin-top: -10px;">Selamat Datang atas nama <?php echo $nama  ?></p>

<div class="content-isi">
		<!--content-isi1-->
         <table border="1" cellpadding="10" cellspacing="0" class="table">
            <tr>
            	<th bgcolor="#ccc">No</th>
            	<th bgcolor="#ccc">Tanggal Pesan</th>
            	<th bgcolor="#ccc">Alamat</th>
                <th bgcolor="#ccc">Atas Nama</th>
                <th bgcolor="#ccc">No HP</th>
                <th bgcolor="#ccc">Jumlah Orang</th>
                <th bgcolor="#ccc">Tanggal Pakai</th>
                <th bgcolor="#ccc">Harga Per Tiket</th>
                <th bgcolor="#ccc">Pembayaran</th>
                
            </tr>
            <?php
		    $no=1;
		    while ($row = mysql_fetch_array($qry)) { ?>
		    <tr>
		        <td bgcolor="#ccc"><?php echo $no ?></td>
		        <td bgcolor="#ccc"><?php echo $row['tgl_pesan']?></td>
		        <td bgcolor="#ccc"><?php echo $row['atasnama']?></td>
		        <td bgcolor="#ccc"><?php echo $row['alamat']?></td>
		        <td bgcolor="#ccc"><?php echo $row['no_hp']?></td>
		        <td bgcolor="#ccc"><?php echo $row['jml_org']?></td>
		        <td bgcolor="#ccc"><?php echo $row['tgl_pakai']?></td>
		        <td bgcolor="#ccc">Rp.5000</td>
		        <td bgcolor="#ccc"><a href="detail-pesanan.php?id_pesan=<?php echo $row['id_pesan']?>"><button>Detail</button></a></td>
		        
		    </tr>
		    <?php $no++;} ?>
		</table>
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