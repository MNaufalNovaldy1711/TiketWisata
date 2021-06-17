<?php 
session_start();

include "koneksi.php";


$nama = $_SESSION['nama'];
if($nama==''){
    header('location:index.php');
}

$q="SELECT * FROM tbl_pengguna";
// echo $q;
$qry = mysql_query($q);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin-Data User | Remen Beach</title>
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
                <li class="active"><a href="login-admin-user.php">Data User</a></li>
                <li class="active"><a href="login-admin-pesan.php">Data Pemesan</a></li>
                <li class="active"><a href="login-admin-transfer.php">Data Transfer</a></li>
                <li class="active"><a href="logout.php">Keluar</a></li>
            </ul>
        </nav>  
    </div>
</header>

<center>

<h2 style="color: #ffcc00; font-family: align; font-size: 30px; margin-top: 70px; margin-bottom: 50px;"> ADMIN - USER </h2>
<p style="color: red; font-weight: bold; font-size: 30px; margin-top: -10px;">Selamat Datang <?php echo $nama ?></p>

        <div class="isi-content">
        
        <div class="content-isi">
        <!--content-isi1-->
         <table border="1" cellpadding="10" cellspacing="0" class="table">
            <tr>
                <td bgcolor="#ccc">No</td>
                <td bgcolor="#ccc">Nama</td>
                <td bgcolor="#ccc">No HP</td>
                <td bgcolor="#ccc">Alamat</td>
                <td bgcolor="#ccc">Aksi</td>
            </tr>
            <?php
    $no=1;
    while ($row = mysql_fetch_array($qry)) { ?>
    <tr>
        <td bgcolor="#ccc"><?php echo $no ?></td>
        <td bgcolor="#ccc"><?php echo $row['username']?></td>
        <td bgcolor="#ccc"><?php echo $row['no_hp']?></td>
        <td bgcolor="#ccc"><?php echo $row['alamat']?></td>
        <td bgcolor="#ccc"><a href="login-admin-user-hapus.php?id_pengguna=<?php echo $row['id_pengguna']?>"> <button>Hapus</button></a></td>
        <!-- <td><a href="detail_booking.php?id_booking=<?php echo $row['id_booking']?>">Detail</a></td> -->
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