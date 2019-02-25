<!DOCTYPE html>
<html>
<head>
	<title>Tugas JQuery Animation - Callback</title>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/script11.js?=1.0"></script>
	<script src="js/script11.js?=1.1"></script>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}
		.container {
			padding-top: 100px;
			max-width: 1100px;
			box-sizing: border-box;
			margin: auto;
		}

		/*Script Mulai*/
		.pertama {
			display: flex;
			justify-content: center;
		}
		.pertama .mulai {
			margin: 10px;
			border: none;
			background-color: #0076e5;
			color: #fff;
			padding: 20px;
			cursor: pointer;
			font-weight: bold;
			font-size: 18px;
			animation-duration: 0.2s;
			border-radius: 5px;
		}
		.pertama .mulai:hover {
			background-color: #1e92ff;
		}


		/*Script Question Status*/
		.kedua {
			display: none;
		}
		.box-f1 {
			display: flex;
			justify-content: center;
		}
		.judul {
			font-weight: bold;
			font-family: sans-serif;
			text-align: center;
		}
		.box-f1 .isi-status {
			border-radius: 5px;
			margin: 10px;
			border: none;
			background-color: #0076e5;
			color: #fff;
			padding: 10px;
			cursor: pointer;
			font-weight: bold;
			animation-duration: 0.2s;
		}
		.box-f1 .isi-status:hover {
			background-color: #1e92ff;
		}

		/*Script Babay*/
		.bay {
			display: none;
			font-weight: bold;
			font-family: sans-serif;
			text-align: center;
		}

		/*Script Kotak*/
		.kotak {
			box-sizing: content-box;
		}
		.box-button {
			display: flex;
			justify-content: center;
			width: 100%;
		}
		.box-animate {
			width: 100%;
			min-height: 400px;
		}
		#k1, #k2, #k3, #k4 {
			display: none;
			border-radius: 5px;
			margin: 10px;
			border: none;
			background-color: #0076e5;
			color: #fff;
			padding: 10px;
			cursor: pointer;
			font-weight: bold;
			animation-duration: 0.2s;
		}
		#k1:hover, #k2:hover, #k3:hover, #k4:hover {
			background-color: #1e92ff;
		}

		.a1, .a2, .a3, .a4 {
			display: none;
			position: absolute;
			width: 40px;
			height: 40px;
		}
		.a1 {
			top: 200px;
			background-color: red;
		}
		.a2 {
			top: 200px;
			right: 200px;
			background-color: blue;
		}
		.a3 {
			top: 400px;
			background-color: green;
		}
		.a4 {
			top: 400px;
			right: 200px;
			background-color: black;
		}


	</style>
</head>
<body>
	<div class="container">

		<!-- Animasi Pertama -->
		<div class="pertama" id="satu">
			<button class="mulai">MULAI</button>
		</div> <!-- pertama -->

		<!-- Animasi Kedua -->
		<div class="kedua" id="dua">
			<div class="judul">Apakah anda mau bermain?</div>
			<div class="box-f1">
				<div><button class="isi-status" id="tidur">TIDUR AJA</button></div>
				<div><button class="isi-status" id="kuy">KUYYY</button></div>
			</div> <!-- box-f1 -->
		</div> <!-- kedua -->

		<!-- Animasi babay -->
		<div class="bay">
			<p>Babaaaayyyy...</p>
		</div>

		<!-- Animasi Kotak -->
		<div class="kotak" id="animasi">
			<div class="box-button">
				<button id="k1">Move 1</button>
				<button id="k2">Move 2</button>
				<button id="k3">Move 3</button>
				<button id="k4">Move 4</button>
			</div> <!-- /.box-button -->
			<div class="box-animate">
				<div class="a1"></div>
				<div class="a2"></div>
				<div class="a3"></div>
				<div class="a4"></div>
			</div> <!-- /.box-animate -->
		</div> <!-- /.kotak -->

	</div> <!-- /.container -->
</body>
</html>