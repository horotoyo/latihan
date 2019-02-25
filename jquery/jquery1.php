<!DOCTYPE html>
<html>
<head>
	<title>Jquery1</title>
	<script src="js/jquery-3.3.1.js"></script>
	<script>
		$(document).ready(function(){
			$("#sembunyi").click(function(){
				$(".box").hide();
			});
			$("#tampil").click(function(){
				$(".box").show();
			});
		});
	</script>
	<style>
		.box{
			height: 100px;
			width: 100px;
			display: inline-block;
			border: 1px solid #999;
			background-color: red;
		}
	</style>
</head>
	<body>
		<button id="sembunyi">Sembunyi</button>
		<button id="tampil">Tampil</button>
		<hr>
		<div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
		<div class="box"></div>
	</body>
</html>