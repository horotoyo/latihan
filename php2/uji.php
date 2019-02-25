<input type="text" name="nama">
<button type="submit">submit</button>

<?php

$nama		= $_POST['nama'];
$random		= rand(11111, 9999);
$ubah		= str_replace($nama, $random.".jpg", $nama);

echo $ubah;

?>