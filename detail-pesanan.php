<?php
include "koneksi.php";
// include "head.php";
$idpesan = $_GET['id_pesan'];

$q="SELECT * FROM tbl_pesan WHERE id_pesan='$idpesan'";
$qry=mysql_query($q);
?>

<center><h1>DATA PESAN TIKET</h1>

<center>
<table border="1" cellpadding="5" cellpadding="0">
    <?php
    while ($row=mysql_fetch_array($qry)) { ?>
    <tr>
        <th>Tgl Pesan</th>
        <td><?php echo $row['tgl_pesan']?></td>
    </tr>
    <tr>
        <th>Atas Nama</th>
        <td><?php echo $row['atasnama']?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $row['alamat']?></td>
    </tr>
    <tr>
        <th>No HP</th>
        <td><?php echo $row['no_hp']?></td>
    </tr>
    <tr>
        <th>Jumlah Orang</th>
        <td><?php echo $row['jml_org']?></td>
    </tr>
    <tr>
        <th>Tgl Pakai</th>
        <td><?php echo $row['tgl_pakai']?></td>
    </tr>
    
    <?php } ?>
</table>
<br>
Total Bayar : Harga Tiket X Jumlah Orang = Contoh(10.000 x 5) = 50.000
<br><br>
Silahkan, melakukan Transfer dan Pilih Rek.Bank di Menu <a href="payment.php">Payment</a> atas nama <b>Pantai Remen Jenu-Tuban</b> 
<br>

<?php
//Buat konfigurasi upload
//Folder tujuan upload file
$eror       = false;
$folder     = 'uploads/bukti/';
//type file yang bisa diupload
$file_type  = array('jpg','jpeg','png','JPG','JPEG','PNG');
//tukuran maximum file yang dapat diupload
$max_size   = 1000000; // 1MB
if(isset($_POST['submit'])){
    //Mulai memorises data
    $file_name  = $_FILES['data_upload']['name'];
    $file_size  = $_FILES['data_upload']['size'];
    $detail = $_POST['atasnama'];
    //cari extensi file dengan menggunakan fungsi explode
    $explode    = explode('.',$file_name);
    $extensi    = $explode[count($explode)-1];

    //check apakah type file sudah sesuai
    if(!in_array($extensi,$file_type)){
        $eror   = true;
        $pesan .= '- Type file yang anda upload tidak sesuai<br />';
    }
    if($file_size > $max_size){
        $eror   = true;
        $pesan .= '- Ukuran file melebihi batas maximum<br />';
    }
    //check ukuran file apakah sudah sesuai

    if($eror == true){
        echo '<div id="eror">'.$pesan.'</div>';
    }
    else{
        //mulai memproses upload file
        if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
            //catat nama file ke database
            $catat = mysql_query('INSERT INTO tbl_bukti(image,atasnama) values ("'.$file_name.'","'.$detail.'")');
            echo '<div id="msg">Berhasil mengupload bukti '.$file_name.'</div>';
        } else{
            echo "Proses upload eror";
        }
    }
}
?>


<br><br>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Upload bukti</th>
            <td> <input type="file" name="data_upload" id="fileToUpload"></td>
        </tr>

        <tr>
            <th>Atas Nama</th>
            <td><input type="text" name="atasnama" placeholder="Tgl Pesan / Nama Lengkap / Kota / Jumlah Orang / Tgl Pakai" / required autocomplete="" style="width: 175%; "></td>
        </tr>
    </table>

    <input type="submit" value="Simpan" name="submit">
</form>
<button onclick="myFunction()">Cetak</button>
<script>
function myFunction() {
    window.print();
}
</script>
<p style="color: blue;"><i>NB : Setelah melakukan transfer, silahkan tekan tombol <b>CETAK</b> di atas ini (untuk bukti pembayaran)</i></p>
<center>

<br>
<a href="data-pemesanan.php" style="color: red; text-decoration: none; font-size: 14px;"> >> Kembali << </a>