<!DOCTYPE html>
<html>
<head>
	<title>Tugas All JQuery</title>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/script13.js"></script>
	<style type="text/css">
		body {
			margin:0;
			padding: 0;
			box-sizing: border-box;
		}
		.container {
			background-image: url("img/s1.jpg");
			background-repeat: no-repeat;
			background-position: center;
			background-size: 100%;
			box-sizing: content-box;
		}

		/*Script Mulai*/
		.pertama .mulai {
			margin: 10px;
			border: none;
			background-color: #0076e5;
			color: #fff;
			padding: 10px;
			cursor: pointer;
			font-weight: bold;
			font-size: 18px;
			animation-duration: 0.2s;
			border-radius: 5px;
		}
		.pertama .mulai:hover {
			background-color: #1e92ff;
		}
		.pertama .tombol {
			display: none;
			margin: 10px;
			border: none;
			background-color: #0076e5;
			color: #fff;
			padding: 10px;
			cursor: pointer;
			font-weight: bold;
			font-size: 18px;
			animation-duration: 0.2s;
			border-radius: 5px;
		}
		.pertama .tombol:hover {
			background-color: #1e92ff;
		}
		.box-game {
			width: 100%;
			min-height: 580px;
			/*border: 1px solid #333;*/
			display: flex;
			justify-content: center;
		}

		/*Script Mobil*/
		#car {
			position: absolute;
			top: 480px;
			padding-top: 30px;
			width: 90%;
			height: 60px;
		}
		#car-move {
			position: absolute;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="box-game" id="box-game-id">
		
		<!-- Tombol -->
		<div class="pertama" id="satu">
			<button class="mulai">MULAI</button>
			<button class="tombol" id="henti">BERHENTI</button>
			<button class="tombol" id="lagi">MULAI LAGI</button>
			<button class="tombol" id="mundur">MUNDUR</button>
			<button class="tombol" id="hilang">HILANG</button>
			<button class="tombol" id="muncul">MUNCUL</button>

		</div>

		<!-- Animasi Mobil -->
		<div id="car">
			<img src="img/car.gif" width="100px" id="car-move">
		</div>

		

	</div>
</div>
</body>
</html>