<?php

include 'koneksi.php';

$id=$_GET['id_bukti'];
if(empty($id)){
	header('location:login-admin-transfer.php');
}

$q="DELETE FROM tbl_bukti WHERE id_bukti='$id'";
$qry=mysql_query($q);
if($qry){
	header('location:login-admin-transfer.php');
}