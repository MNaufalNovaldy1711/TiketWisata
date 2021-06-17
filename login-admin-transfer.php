<?php 
session_start();

include "koneksi.php";


$nama = $_SESSION['nama'];
if($nama==''){
    header('location:index.php');
}

$q="SELECT * FROM tbl_bukti";
// echo $q;
$qry = mysql_query($q);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin-Data Transfer | Remen Beach</title>
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

<h2 style="color: #ffcc00; font-family: align; font-size: 30px; margin-top: 70px; margin-bottom: 50px;"> ADMIN - DATA TRANSFER </h2>
<p style="color: red; font-weight: bold; font-size: 30px; margin-top: -10px;">Selamat Datang <?php echo $nama ?></p>

        <div class="content-isi">
		<!--content-isi1-->
         <table border="1" cellpadding="10" cellspacing="0" class="table">
            <tr>
            	<th bgcolor="#ccc">No</th>
                <th bgcolor="#ccc">Nama</th>
                <th bgcolor="#ccc">Bukti Transfer</th>
                <th bgcolor="#ccc">Aksi</th>
                </tr>

        <?php
        $no=1;
        while ($row = mysql_fetch_array($qry)) { ?>

    <tr>
        <td bgcolor="#ccc"><?php echo $no ?></td>
        <td bgcolor="#ccc"><?php echo $row['atasnama']?></td>
        <td bgcolor="#ccc"><img src="uploads/bukti/<?php echo $row['image']?>" alt="" width="20%"></td>
        <td bgcolor="#ccc"> 
            <a href="login-admin-transfer-hapus.php?id_bukti=<?php echo $row['id_bukti']?>"><button>Hapus</button></a>
        </td>
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