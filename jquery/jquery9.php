<!DOCTYPE html>
<html>
<head>
	<title>JQuery Animate - JQuery 5</title>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/script9.js"></script>
	<style type="text/css">
		.container1{
			margin:10px 0px 0px 0px;
			background-color: #abcdef;
			position: relative;
			height: 600px;
			width: 700px;
			border:1px solid #333;
		}
		.isi1, .isi2, .isi3, .isi4, .isi5 {
			position: absolute;
			min-width: 100px;
			min-height: 100px;
			border:1px solid #333;
		}
		.isi1 {
			top: 0px;
			left: 10px;
			background-color: #ff0000;
		}
		.isi2 {
			top: 20px;
			left: 30px;
			background-color: #fff;
		}
		.isi3 {
			top: 500px;
			left: 100px;
			background-color: #ff00ff;
		}
		.isi4 {
			top: 150px;
			left: 300px;
			background-color: #00aaff;
		}
		.isi5 {
			top: 300px;
			left: 400px;
			background-color: #ffbb22;
		}
	</style>
</head>
<body>
	<button class="animasi1">clik 1</button>
	<button class="animasi2">clik 2</button>
	<button class="animasi3">clik 3</button>
	<button class="animasi4">clik 4</button>
	<button class="animasi5">clik 5</button>

<div class="container1">
	<div class="isi1">Animate 1</div>
	<div class="isi2">Animate 2</div>
	<div class="isi3">Animate 3</div>
	<div class="isi4">Animate 4</div>
	<div class="isi5">Animate 5</div>
</div>

</body>
</html>