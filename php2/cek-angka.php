<!DOCTYPE html>
<html>
<head>
	<title>Cek Angka</title>
</head>
<body>
<form method="POST">
	<table>
		<p>Masukan angka pada kolom dibawah</p>
		<p>Angka <b>TIDAK BOLEH</b> sama</p>
		<tr>
			<td>Variable A</td>
			<td>:</td>
			<td><input type="number" name="satu" id="satu"></td>
		</tr>
		<tr>
			<td>Variable B</td>
			<td>:</td>
			<td><input type="number" name="dua" id="dua"></td>
		</tr>
		<tr>
			<td>Variable C</td>
			<td>:</td>
			<td><input type="number" name="tiga" id="tiga"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit">Cek Variable</button>
				<button type="reset">Batal</button>
			</td>
		</tr>
	</table>
</form>
</body>
</html>

<?php

$ina	= (isset($_POST ['satu'])?$_POST ['satu']:"");
$inb	= (isset($_POST ['dua'])?$_POST ['dua']:"");
$inc 	= (isset($_POST ['tiga'])?$_POST ['tiga']:"");

$va 	= "<b>Variable A</b> dengan nilai ";
$vb 	= "<b>Variable B</b> dengan nilai ";
$vc 	= "<b>Variable C</b> dengan nilai ";

$mix	= [$ina, $inb, $inc];
$urut	= rsort($mix);

echo "<br>Variable A adalah " . $ina;
echo "<br>Variable B adalah " . $inb;
echo "<br>Variable C adalah " . $inc;
echo "<br>";

if ($ina>$inb && $ina>$inc){
	echo "Variable terbesar adalah " . $va . "<b>".$ina."</b>";
} elseif ($inb>$ina && $inb>$inc){
	echo "Variable terbesar adalah " . $vb . "<b>".$inb."</b>";
} elseif ($inc>$ina && $inc>$inb){
	echo "Variable terbesar adalah " . $vc . "<b>".$inc."</b>";
} else {
	echo "Ikuti sesuai perintah ya...";
}

?>