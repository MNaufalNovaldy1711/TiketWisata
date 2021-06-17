<?php

include 'koneksi.php';

$id=$_GET['id_pesan'];
if(empty($id)){
	header('location:login-admin-pesan.php');
}

$q="DELETE FROM tbl_pesan WHERE id_pesan='$id'";
$qry=mysql_query($q);
if($qry){
	header('location:login-admin-pesan.php');
}