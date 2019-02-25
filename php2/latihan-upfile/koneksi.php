<?php
$server		= "localhost";
$user		= "root";
$pass		= "123";
$db			= "latihan";

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
	die('koneksi gagal' . mysqli_error());
} 
//else {echo "berhasil";}

?>