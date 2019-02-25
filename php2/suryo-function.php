<?php
function muncul($nama,$jumlah){

	for ($a=1; $a<=$jumlah; $a++) { 
		if (($a%5) == 0) {
			echo "Rasa cintaku kepada <b>$nama</b> sebesar <b>$a</b> Gunung Uhud<br><hr>";
		} else {
			echo "Rasa cintaku kepada <b>$nama</b> sebesar <b>$a</b> Gunung Uhud<br>";
		}
	}
}

muncul("Tempe",20);
?>