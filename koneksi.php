<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="nopal";

mysql_connect($servername,$username,$password) or die("Gagal");
mysql_select_db($db) or die ("Db gagal");