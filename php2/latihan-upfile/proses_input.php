<?php
include 'koneksi.php';

$nama 				= $_POST['nama'];
//Input files gambar
$allowed 			=  array('jpeg','png' ,'jpg');
$nama_gambar		= $_FILES['gambar']['name'];
$tmp_name			= $_FILES['gambar']['tmp_name'];
$size_gambar		= $_FILES['gambar']['size'];
$ext 				= pathinfo($nama_gambar, PATHINFO_EXTENSION);

//alert for undefined extension
function ext() {
  alert("Format file anda tidak sesuai!");
}

if ($size_gambar > 1000000) {
	echo "
			<script type='text/javascript'>
				alert('file extention not allowed');
				window.location.href='create.php?file_type_not_allowed_error';
			</script>
		";
	header("location: index.php?your-file-is-so-big");
} else {
	move_uploaded_file($tmp_name, "gambar/".$nama_gambar);
	$sql = "INSERT INTO photo (nama, photo) VALUES ('$nama','$nama_gambar')";
	mysqli_query($konek,$sql);
	header('location:index.php');
}
?>