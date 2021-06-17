<?php
session_start();

include "koneksi.php";


if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $q="SELECT * FROM tbl_admin WHERE username='$name' AND password='$password'";

    $qry=mysql_query($q);
    $row = mysql_fetch_array($qry);
    if ($row['username'] == $name AND $row['password'] == $password) {

        session_start(); // memulai fungsi session
        $_SESSION['nama'] = $name;

        header("location:login-admin-user.php"); 
    }else {
        echo "Gagal Masuk"; // jika gagal, maka muncul teks gagal masuk
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Admin | Remen Beach</title>
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

<h2 style="color: #ffcc00; font-family: align; font-size: 30px; margin-top: 70px; margin-bottom: 40px;">LOGIN ADMIN</h2>
<p style="color: #fff; ">Masukan data dibawah ini</p>

        <div class="content-isi">
        <!--content-isi1-->
        <table border="0">
        <form action="" method="post">
        <tr>
            <p style="color: #ffcc00;">______________________________________________________</p>
            <td style="color: #ffcc00; font-size: 25px;">Username</td>
            <td>:<td><input style="height:20px;" class="tb2" type="text" name="username"  placeholder="Masukan Username" / required></td></tr>
        <br>    
        <tr>
            <td style="color: #ffcc00; font-size: 25px;">Password</td>
            <td>:<td><input style="height:20px;" class="tb2" type="password" name="password" placeholder="Masukan Password" / required></td></tr>
        </table>
        <p style="color: #ffcc00;">______________________________________________________</p>

        <input style="width: 200px; border-radius:20px; height:30px; margin-left:10px;" type="submit" class="btn btn-success btn-block" name="submit" value="Masuk">
        </div>

</center>


<section id="logo1">
    <div>
        <center><img width="150px" height="210px" src="img/logo.png"></center>      
    </div>
</section>

<footer>
    <p>
        Pro Mobile Lagend, Copyright @2020
    </p>
</footer>

</body>
</html>