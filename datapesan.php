<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan | Remen Beach</title>
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
<h2 style="color: #ffcc00; font-family: align; font-size: 30px; margin-top: 70px; margin-bottom: 40px;"> DATA PESAN SETIAP HARINYA</h2>
<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#ccc">
			<th>No.</th>
			<th>Tanggal Pesan</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No HP</th>
			<th>Jumlah Orang</th>
			<th>Tanggal Pakai</th>
		</tr>
		<?php
		include("koneksi.php");
		$query = mysql_query("SELECT * FROM tbl_pesan ORDER BY id_pesan DESC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){ ?>
			<tr><td colspan="8">Tidak ada data</td></tr>
		<?php }
		else{ 
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
			?>
			<tr>
				<td bgcolor="#ccc"><?php echo $no ?></td>
				<td bgcolor="#ccc"><?php echo $data['tgl_pesan'] ?></td>
				<td bgcolor="#ccc"><?php echo $data['atasnama'] ?></td>
				<td bgcolor="#ccc"><?php echo $data['alamat'] ?></td>
				<td bgcolor="#ccc"><?php echo $data['no_hp'] ?></td>
				<td bgcolor="#ccc"><?php echo $data['jml_org'] ?></td>
				<td bgcolor="#ccc"><?php echo $data['tgl_pakai'] ?></td>
			</tr>
		<?php 
		$no++;
	} 
}
		?>
	</table>
	<p style="color: #fff;"><i>Tiket Akan Hangus Apabila Tidak Pakai Pada Waktu Yang Di Buat Pemesan</i></p>
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