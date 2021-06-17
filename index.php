<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta charset="utf-8">
	<meta name="vieport" content="width=device-width">
	<title>Remen Beach | Welcome</title>
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
	</div>
</header>

<section id="showcase">
	<div class="container">
		<h1>Informasi Wisata Pantai Remen, Tuban</h1>
		<p>Satu-satunya pantai berpasir putih yang berada di Kabupaten Tuban, Tepatnya terletak di Desa Remen, Kecamatan Jenu, Kabupaten Tuban, Provinsi Jawa Timur 62352</p>
	</div>
</section>

<section id="newsletter">
	<div class="container">
		<h1> Mau beli tiket online ? <a href="daftar.php" style="color: #fff;">Daftar Disini</a></h1>

		
		<form>
			<input type="Email" placeholder="Enter Email...">
			<button class="buttonsubs">Send</button>
		</form>		
	</div>
</section>

<div class="slider">
    <div id="img">
      <img src="img/fix1.jpg">
    </div>
</div>

  <script>

    var images = ['img/fix1.jpg', 'img/fix2.jpg', 'img/fix3.jpg', 'img/fix4.jpg', 'img/fix5.jpg', 'img/fix6.jpg'];
    var x = 0;
    var imgs = document.getElementById('img');
    setInterval(slider, 2000);

    function slider() {

      if (x < images.length) {
        x = x + 1;
      } else {
        x = 1;
      }


      imgs.innerHTML = "<img src=" + images[x - 1] + ">";

    }

  </script>

<section id="boxes">
	<div class="container">
		<div class="boxes">
			<img src="img/1.jpg ">
			<h3>Remen Beach</h3>
			<p>Berada di Desa Remen, Kecamatan Jenu, Kabupaten Tuban, Jawa Timur, keindahan pemandangan alam yang disajikan pantai ini mampu memanjakan mata. Banyak wisatawan yang datang berkunjung, baik masyarakat lokal maupun dari luar daerah.
			Selain karena pasir putihnya yang terhampar, pantai ini juga dihiasi banyaknya pohon cemara yang berada di bibir pantai. Kubahan yang menjorok berisi air layaknya danau juga kian menambah pesona dari pantai yang satu ini.
			</p>
			<p>Dari pernyataan masyarakat sekitar, kubahan tersebut merupakan buatan masyarakat sendiri. Kendati demikian, bentuknya sekilas akan terlihat alami. Pengunjung pun bisa duduk santai di sekitar kubahan air tersebut sembari berteduh di bawah pohon cemara.Jika dibandingkan dengan beberapa pantai di Tuban lainnya yang memiliki objek lain berupa wahana permainan, Pantai Remen sendiri tergolong pantai yang masih alami. Sehingga, pengunjung pun nantinya hanya akan menikmati keindahan pantai.
			</p>
			<p>Apabila sedang dalam kondisi sepi pengunjung, suasana alami yang berpadu dengan suara deburan ombak akan mampu menghilangkan penat dan menenangkan sejenak pikiran kalian
			</p>
			<h3>Rute</h3>
			<p>Jika kebanyakan pantai di Tuban umumnya memiliki aksesibilitas yang cukup mudah, hal sebaliknya untuk Pantai Remen. Pasalnya, lokasinya sendiri memang berada di pelosok desa yang terbilang jauh dari jalan raya.</p>
			<p>Untuk mengakses rute lokasinya, kita bisa memanfaatkan jasa transportasi online. Titik jemputnya disarankan berada di area pusat kota Kabupaten Tuban, karena transportasi online memang masih terpusat di kawasan tersebut.</p>
			<p>Butuh waktu sekitar 45 menit perjalanan dari kawasan Tuban Kota menuju lokasinya. Melalui jalur Pantura, arahkan perjalanan menuju Desa Beji dan ikuti jalurnya ke arah Desa Remen. Selanjutnya, perlu sekitar 15 menit perjalanan untuk tiba di Pantai Remen.</p>
			<p>Sesampainya di Desa Remen, rute perjalanan bisa berpatokan pada lokasi Balai Desa Remen. Dari sana, arahkan perjalan ke sebelah timur laut melalui Jalan Sumur Gede. Adapun jarak dari Balai Desa menuju Pantai Remen mencapai 1,3 km.</p>
			<p>Karena masih merupakan destinasi wisata yang belum terlalu populer, belum ada banyak akomodasi di sekitar Pantai Remen, termasuk pusat oleh-oleh. Nah, untuk membeli oleh-oleh khas Tuban bisa melipir ke pusat oleh-oleh yang berada di Rest Area Terminal Lama yang berada di kawasan Tuban kota.</p>
		</div>

</section>


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