<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery Hide Show Fade and Slide - JQuery 4</title>
	<script src="js/jquery-3.3.1.js">
	</script>
	<script src="js/script8.js"></script>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		#sembunyi, #tampil {
			width: 10%; background: #2473f2; float: left; font-size: 12px; font-family: sans-serif;color: #fff;
			padding: 13px 5px 5px 5px; text-align: center; height: 55px; transition-duration: 0.2s; cursor: pointer;
		}
		#sembunyi:hover, #tampil:hover {
			background: #448cff;
		}
		.profil {
			width: 80%; height: 55px; background: #1c64d8; color: #fff; margin: 0px; float: left; font-size: 18px; font-family: sans-serif; text-align: center; padding: 18px 10px 10px 10px; cursor: pointer; font-weight: bold;
			border: none; transition-duration: 0.2s;
		}
		.profil:hover {
			background: #3c86fc;
		}
		.d1 {
			width: 100%; height: 55px; background: #9b0000; color: #fff; margin: 0px 0px 0px 0px; float: left; font-size: 18px; font-family: sans-serif; text-align: center; padding: 18px 10px 10px 10px; cursor: pointer; font-weight: bold;
			border: none; transition-duration: 0.2s;
		}
		.d2 {
			width: 100%; height: 50px; background: #282828; color: #fff; margin: 0px; float: left; font-size: 12px; font-family: sans-serif; text-align: center; padding: 18px; cursor: pointer;
		}
		.d3 {
			width: 100%; height: 70px; background: #3a3a3a; color: #fff; margin: 0px 0px 0px 0px; float: left; font-size: 12px; font-family: sans-serif; text-align: center; padding: 18px; cursor: pointer;
		}
		.bungkus_tombol {
			text-align: center;

		}
		.d4 {
			width: 100%; height: 250px; background: #282828; color: #fff; margin: 0px; float: left; font-size: 12px; font-family: sans-serif; text-align: center; padding: 18px; cursor: pointer;
		}
		.d5 {
			width: 100%; height: 180px; background: #282828; color: #fff; margin: 0px; float: left; font-size: 12px; font-family: sans-serif; text-align: center; padding: 18px; cursor: pointer;
		}
		button {
			margin: 20px 0px 20px 0px;
		}
		
	</style>
</head>
<body>
	<div class="bungkus">
		<div id="sembunyi">Hide Second Paragraph</div>
		<div id="tampil">Show Second Paragraph</div>
		<div id="toggle" class="profil">Toggle Slide First Paragraph</div>
	</div>
<div class="d1">Profil Pondok Informatika Al Madinah</div>
<div class="d2">
	Selamat datang di situs (website) resmi Pondok Informatika Al Madinah  Yogyakarta. Semoga kita semuanya mendapatkan kebaikan dan kemanfaatan dengan segala yang disajikan dalam website ini.
</div>
<div class="d3">
	Pondok Informatika Al-Madinah adalah Pondok IT yang berusaha melahirkan Ahli-Ahli IT muslim yang mendapatkan pendidikan islami berdasarkan Al Qur’an dan Sunnah Nabi yang bermanfaat untuk ummat. Dikhususkan kepada orang-orang yang kurang mampu secara ekonomi namun mempunyai minat dan bakat dalam bidang IT. Berlokasi di Pakem, Sleman, Daerah Istimewa Yogyakarta.
</div>
<div class="bungkus_tombol">
	<button id="ndelik">Sembunyikan Foto</button>
	<button id="metu">Tampilkan Foto</button>
	<button id="campur">Toggle Button</button>
</div>
<div class="d1">
	Documentation of Pondok
</div>
<div class="d4">
	<img src="img/1.jpg" width="290px" id="g1">
	<img src="img/2.jpg" width="290px" id="g2">
	<img src="img/3.jpg" width="290px" id="g3">
</div>

<div class="bungkus_tombol">
	<button id="fatu">Sembunyikan Info</button>
	<button id="fati">Tampilkan Info</button>
	<button id="fatui">Toggle Button</button>
</div>
<div class="d1">
	Informasi Penerimaan Santri Baru Pondok
</div>
<div class="d5">
	<img src="img/4.jpg" width="1200px" id="g4">
</div>

</body>
</html>