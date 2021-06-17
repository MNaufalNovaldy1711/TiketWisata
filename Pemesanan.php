<?php
session_start();

include "koneksi.php";

$nama = $_SESSION['nama'];
if($nama==''){
    header('location:daftar.php');
}

if(isset($_POST['submit'])){
    $nama = $_POST['atasnama'];
    $tgl_pesan = $_POST['tgl_pesan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $jml_org = $_POST['jml_org'];
    $tgl_pakai = $_POST['tgl_pakai'];


        $q="INSERT INTO tbl_pesan (username,tgl_pesan, alamat, no_hp, jml_org, tgl_pakai,date)VALUES ('$nama','$tgl_pesan','$alamat','$no_hp','$jml_org', '$tgl_pakai')";
        $qry=mysql_query($q);
        if($qry){
            echo "<center><h2><p style='color:green;'>Anda berhasil memesan TIKET, Silahkan cek Data pemesanan anda</p></h2></center>";
        }else{
            echo "gagal PESAN";
        }
    }



?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Pemesanan | Remen Beach</title>
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

<form action="pesan-proses.php" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td style="color: #ffcc00; font-size: 25px;">TGL PESAN</td>
				<td>:</td>
				<td><input type="date" name="tgl_pesan" size="50" required></td>
			</tr>
			<tr>
				<td style="color: #ffcc00; font-size: 25px;">ATAS NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama" size="50" value="<?php echo $nama ?>" readonly></td>
			</tr>
			<tr>
				<td style="color: #ffcc00; font-size: 25px;">ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="30" rows="4" required></textarea>
				</td>
			</tr>
			<tr>
				<td style="color: #ffcc00; font-size: 25px;">NO HP</td>
				<td>:</td>
				<td>
					<input type="text" name="no_hp" required>
				</td>
			</tr>
			<tr>
				<td style="color: #ffcc00; font-size: 25px;">JUMLAH ORANG</td>
				<td>:</td>
				<td><input type="text" name="jml_org" size="10" required></td>
			</tr>
			<tr>
				<td style="color: #ffcc00; font-size: 25px;">TGL PAKAI</td>
				<td>:</td>
				<td><input type="date" name="tgl_pakai" size="50" required></td>
			</tr>
			
			<tr>
				<td colspan="2"></td>
				<td>
					<input style="width: 200px; border-radius:20px; height:30px; margin-left:10px;" type="submit" value="TAMBAH" name="tambah">
				
					<input style="width: 200px; border-radius:20px; height:30px; margin-left:10px;" type="reset" name="submit" value="Batal">
				</td>
			</tr>

		</table>

	</form>

	<table border="1" cellpadding="10" cellspacing="0" class="table">
            <tr>
                <th bgcolor="#ccc">No</th>
                <th bgcolor="#ccc">Tanggal Booking</th>
                <th bgcolor="#ccc">Atas Nama</th>
                <th bgcolor="#ccc">Alamat</th>
                <th bgcolor="#ccc">No HP</th>
                <th bgcolor="#ccc">Jumlah Orang</th>
                <th bgcolor="#ccc">Tanggal Pakai</th> 
                <th bgcolor="#ccc">Harga Per Tiket</th> 
            </tr>
        <?php
   

   	//tandabawah
   	$q="SELECT * FROM tbl_pesan WHERE atasnama='$nama'";
    // echo $q;
    $qry = mysql_query($q);
    $no=1;
    while ($row = mysql_fetch_array($qry)) { ?>
    <tr>
        <td bgcolor="#ccc"><?php echo $no ?></td>
        <td bgcolor="#ccc"><?php echo $row['tgl_pesan'];?></td>
        <td bgcolor="#ccc"><?php echo $row['atasnama'];?></td>
        <td bgcolor="#ccc"><?php echo $row['alamat'];?></td>
        <td bgcolor="#ccc"><?php echo $row['no_hp'];?></td>
        <td bgcolor="#ccc"><?php echo $row['jml_org'];?></td>
        <td bgcolor="#ccc"><?php echo $row['tgl_pakai'];?></td>
        <td bgcolor="#ccc">Rp.5000</td>
    </tr>
    	<?php $no++;} ?>
	</table>
  

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