<?php

include 'koneksi.php';

$id=$_GET['id_pengguna'];
if(empty($id)){
	header('location:login-admin-user.php');
}

$q="DELETE FROM tbl_pengguna WHERE id_pengguna='$id'";
$qry=mysql_query($q);
if($qry){
	header('location:login-admin-user.php');
}