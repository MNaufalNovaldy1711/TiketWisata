<?php
	if(isset($_POST['tgl_pesan']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['no_hp']) && isset($_POST['jml_org']) && isset($_POST['tgl_pakai']) && isset($_POST['tambah']))
	{
		include('koneksi.php');

		$tgl_pesan = $_POST['tgl_pesan'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		$jml_org = $_POST['jml_org'];
		$tgl_pakai = $_POST['tgl_pakai'];

		$input = mysql_query("INSERT INTO tbl_pesan VALUES(NULL, '$tgl_pesan', '$nama', '$alamat', '$no_hp', '$jml_org', '$tgl_pakai')") or die(mysql_error());

		if($input){
			echo "DATA BERHASIL DITAMBAHKAN";
			echo "<a href='pemesanan.php'>Back</a>";
		}
		else{
			echo "GAGAL MENAMBAHKAN DATA";
			echo "<a href='pemesanan.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data";
		echo "<a href='pemesanan.php'>Back</a>";
	}
?>